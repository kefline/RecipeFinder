<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // if (Auth::attempt($request->only('email', 'password'))) {
        //     $user = Auth::user();


        //     if ($user->hasVerifiedEmail()) {
        //         return redirect()->route('index');
        //     } else {
        //         Auth::logout();
        //         return redirect()->route('verification.notice')
        //             ->with('message', 'Please verify your email before logging in.');
        //     }
        // }
        return redirect('dashboard');
        // return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        event(new Registered($user));

        return redirect()->route('auth.login')->with('success', 'Registration successful! Please check your email to verify your account.');
    }


    public function forgot_password()
    {
        return view(' auth.forgot_password');
    }
}
