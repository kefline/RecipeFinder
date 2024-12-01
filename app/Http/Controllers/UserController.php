<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function dashboard(){

        $recipes= Recipe::all(); 
        return view('dashboard', compact('recipes'));
    }

    public function about(){

        $recipes = Recipe::all();
        return view('about', compact('recipes'));
    }
    public function category(){

        $recipes = Recipe::all();
        return view('category',compact('recipes'));
    }
    public function contact(){
        return view('contact');
    }

    public function add(){
        $recipes = Recipe::all();

        return view('add', compact('recipes'));
    }

   
    public function blog(){
        $recipes = Recipe::all();
        return view('blog',compact('recipes'));
    }


}