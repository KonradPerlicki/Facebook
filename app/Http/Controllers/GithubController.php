<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    public function githubRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubLogin(Request $request)
    {
        $user = Socialite::driver('github')->user();
        $githubUser = User::where('github_id', $user->id)->first();
        if($githubUser){
            Auth::login($githubUser, true);

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
