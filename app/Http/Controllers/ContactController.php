<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function store(Request $request)

    {
        // dd($request->all());
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email|unique:contact|max:255',
            'message' => 'required',
            'subject' => 'required|string',


        ]);
        

        $user = new Contact();
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->message = $request->message;
        $user->subject = $request->subject;
        $user->save();

        return redirect('contact')->with('message was sent successful');

    }
}
