<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('components.auth.form-register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'first_name' => 'required|string|max:255|min:3',
            'last_name' => 'required|string|max:255|min:3',
            'username' => 'required|string|max:255|min:3|unique:users,username',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()->numbers()],
            'gender' => 'required',
            'phone' => 'numeric|digits:9|nullable|unique:users,phone',
            'terms' => 'required'
        ]);
        $attributes['password'] = Hash::make($attributes['password']);
        $user = User::create($attributes);

        event(new Registered($user));
        Auth::login($user);

        //creating row in settings table with defaults values and corresponding user id
        $request->user()->settings()->create(); 
        
        return redirect(RouteServiceProvider::HOME);
    }
}
