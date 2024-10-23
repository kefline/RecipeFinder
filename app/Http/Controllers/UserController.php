<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function dashboard(){
        return view('dashboard');
    }

    public function about(){
        return view('about');
    }
    public function category(){
        return view('category');
    }
    public function contact(){
        return view('contact');
    }
}
