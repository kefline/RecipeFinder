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
    //
    public function googlelogin()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }
    public function googleAunthentication()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            $User = User::where('google_id', $googleUser->id)->first();
            if ($User) {
                Auth::login($User);
                return redirect()->route('dashboard');
            } else {
                $userData = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => Hash::make('password@123'),
                    
                    'google_id' => $googleUser->id,
                ]);
            }
            if ($userData) {
                Auth::login($userData);
                return redirect()->route('dashboard');
            }
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function facebooklogin() {
        return Socialite::driver('facebook')
            ->stateless()
            ->redirect();
    }
    

    public function facebookAunthentication()
    {

        try {

            \Log::info('Facebook Callback:', request()->all());
            $facebookuser = Socialite::driver('facebook')->stateless()->user();
            $user = User::where('facebook_id', $facebookuser->id)->first();
            if ($user) {
                Auth::login($user);
                return redirect()->route('dashboard');
            } else {
                $data = User::create([
                    'name' => $facebookuser->name,
                    'email' => $facebookuser->email,
                    'password' => Hash::make('password@123'),
                    'facebook_id' => $facebookuser->id,
                ]);
            }
            if ($data) {
                Auth::login($data);
                return redirect()->route('dashboard');
            }
        } catch (Exception $e) {
            \Log::error('Facebook Authentication Error: ' . $e->getMessage());
            dd($e);
        }
    }

    // public function authproviderRedirect($provider)

    // {
    //     if (isset($provider)) {
    //         return Socialite::driver($provider)->redirect();
    //     } else {
    //         abort(404);
    //     }
    // }
    // public function Socialauthentification($provider)

    // {
    //     // dd($provider);
    //     // if(!$provider){
    //     //     abort(404);

    //     // }
    //     try {
    //         if ($provider) {
    //             $socialUser = Socialite::driver($provider)->user();
    //             $user = User::where('auth_provider_id',$socialUser->id)->first();
    //             if ($user) {
    //                 Auth::login($user);
    //                 return redirect()->route('dashboard');
    //             } else {
    //                 $userdata = User::create([
    //                     'name' => $socialUser->name,
    //                     'email' => $socialUser->email,
    //                     'password' => Hash::make('Priscajohn@2345'),
    //                     'auth_provider_id' => $socialUser->id,
    //                     'auth_provider' => $provider,


    //                 ]);
    //                 if ($userdata) {
    //                     Auth::login($userdata);

    //                 }
    //             }
    //             return redirect()->route('dashboard');
    //         }
    //         abort(404);
    //     } catch (Exception $e) {
    //         dd($e);
    //         // \Log::error('Social authentication error: ' . $e->getMessage());
    //         // return redirect()->route('auth.login')->withErrors(['msg' => 'Authentication failed.']);
    //     }

    // }
}
