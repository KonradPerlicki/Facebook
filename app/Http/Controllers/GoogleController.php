<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleLogin(Request $request)
    {
        
        $user = Socialite::driver('google')->user();
        $googleUser = User::where('google_id', $user->id)->first();
        if($googleUser){
            Auth::login($googleUser);
            $request->session()->regenerate();

            User::storeInvitedUsers();

            return redirect(RouteServiceProvider::HOME);
        }else{
            return view('components.auth.form-register-finish', [
                'user' => $user,
            ]);
        }
    }
}
