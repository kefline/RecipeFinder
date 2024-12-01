<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Hash;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function googleAuthentication()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            $user = User::where('google_id', $googleUser->id)->first();

            if ($user) {
                // User exists, log them in
                Auth::login($user);
                return redirect()->route('dashboard');
            } else {
                // User doesn't exist, create a new user
                $phone = $googleUser->phone ?? 'N/A'; // Fallback if phone is null
                
                $userData = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'phone' => $phone, // Use fallback phone if null
                    'password' => Hash::make('password@123'),
                    'google_id' => $googleUser->id,
                ]);
            }

            if (isset($userData)) {
                // Log the newly created user in
                Auth::login($userData);
                return redirect()->route('dashboard');
            }

        } catch (Exception $e) {
            // Log error for debugging
            \Log::error('Google Authentication Error: ' . $e->getMessage());
            dd($e); // Optionally show error message
        }
    }

    public function facebookLogin()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    public function facebookAuthentication()
    {
        try {
            \Log::info('Facebook Callback:', request()->all());
            $facebookUser = Socialite::driver('facebook')->stateless()->user();
            $user = User::where('facebook_id', $facebookUser->id)->first();

            if ($user) {
                // User exists, log them in
                Auth::login($user);
                return redirect()->route('dashboard');
            } else {
                // User doesn't exist, create a new user
                $phone = $facebookUser->phone ?? 'N/A'; // Fallback if phone is null

                $data = User::create([
                    'name' => $facebookUser->name,
                    'email' => $facebookUser->email,
                    'phone' => $phone, // Use fallback phone if null
                    'password' => Hash::make('password@123'),
                    'facebook_id' => $facebookUser->id,
                ]);
            }

            if (isset($data)) {
                // Log the newly created user in
                Auth::login($data);
                return redirect()->route('dashboard');
            }

        } catch (Exception $e) {
            // Log error for debugging
            \Log::error('Facebook Authentication Error: ' . $e->getMessage());
            dd($e); // Optionally show error message
        }
    }
}
