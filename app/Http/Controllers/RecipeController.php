<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{


    public function recipe()
    {
        $recipes = Recipe::all();

        $categoryCount = $recipes->groupBy('category')->map(function ($item) {
            return $item->count();
        });

        return view('recipe', compact('recipes', 'categoryCount'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'tags' => 'required|string',
            'video_file' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:10240',
            'video_url' => 'nullable|url',
            'directions' => 'required|array',
            'directions.*' => 'required|string',
            'peoples' => 'required|integer|min:1|max:100',
            'cook_time' => 'required|integer|min:1|max:300',
            'category' => 'required|string|max:255',
            'ingredients' => 'required|array',
            'ingredients.*.name' => 'required|string|max:255',
            'ingredients.*.amount' => 'required|string|max:255',
            'nutritions' => 'required|array',
            'nutritions.*.name' => 'required|string|max:255',
            'nutritions.*.amount' => 'required|string|max:255',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('recipes', 'public');
        }
        $videoPath = null;
        if ($request->hasFile('video_file')) {
            $videoPath = $request->file('video_file')->store('videos', 'public'); // Save video in 'storage/app/public/videos'
        }



        $recipe = Recipe::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image_url' => $imagePath,
            'tags' => $validated['tags'],
            'video_url' => $videoPath ?? $validated['video_url'],
            'directions' => json_encode($validated['directions']),
            'ingredients' => json_encode($validated['ingredients']),
            'nutritions' => json_encode($validated['nutritions']),
            'peoples' => $validated['peoples'],
            'category' => $validated['category'],
            'cook_time' => $validated['cook_time'],
        ]);

        return redirect()->back()->with('success', 'Recipe added successfully!');
    }

    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        // dd(json_decode($recipe->directions));
        // dd($recipe->decoded_ingredients);
    



        return view('recipe-detail', compact('recipe'));
    }


    public function search(Request $request)
    {
        $query = Recipe::query();

        if ($request->category) {
            $query->where('category', $request->category);
        }

        if ($request->title) {
            $query->where('title', 'LIKE', '%' . $request->title . '%');
        }

        $recipes = $query->get();

        return view('search_results', compact('recipes'));
    }
    public function liveSearch(Request $request)
    {
        $query = $request->input('title');

        $recipes = Recipe::where('title', 'LIKE', '%' . $query . '%')
            ->limit(5)
            ->get(['id', 'title']);

        return response()->json($recipes);
    }
}
