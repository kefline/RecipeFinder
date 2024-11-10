<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    // Sends a password reset email
    public function PasswordEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function PasswordUpdate(Request $request)
    {
         $request->validate([
            'token'=>'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
        
        // $request['token'] = request('_token');


        $status = Password::reset(
            $request->only('email', 'password','token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        // password_reset_tokens
        // email,
        // token,
        // timestamp

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('auth.login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
