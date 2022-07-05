<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\sendResetLink;
use Illuminate\Support\Str;
use App\Http\Middleware\TrustHosts;

class PasswordUpdateController extends Controller{

    public function forgotPassword() {
        return view('auth.forgot-password');
    }

    public function mailRequest(Request $request) {
        $request->validate(['email' => 'required|email']);
        $status = Password::sendResetLink($request->only('email'));
     
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)]) 
            : back()->withErrors(['email' => __($status)]);
    }
    
    public function resetPassword($token) {
        return view('auth.reset-password', ['token' => $token]);
    }    

    public function updatePassword(Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]); 
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill(['password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
                $user->save();
                event(new PasswordReset($user));
            });
        return $status === Password::PASSWORD_RESET
                    ? redirect('/')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);

    }                

}
