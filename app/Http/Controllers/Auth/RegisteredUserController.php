<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function store(UserRequest $request)
    {
        $attributes = $request->validated();
        $attributes['password'] = Hash::make($attributes['password']);
        $user = User::create($attributes);

        event(new Registered($user));
        Auth::login($user);

        //creating row in settings table with defaults values and corresponding user id
        $request->user()->settings()->create(); 
        
        return redirect(RouteServiceProvider::HOME);
    }

    public function finish(Request $request)
    {
        $attributes = $this->validate($request, [
            'first_name' => 'required|string|max:255|min:3',
            'last_name' => 'required|string|max:255|min:3',
            'username' => 'required|string|max:255|min:3|unique:users,username',
            'profile_image' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email',
            'email_verified_at' => 'required',
            'gender' => 'required',
            'birth_date' => 'required|date|date_format:Y-m-d',
            'phone' => 'numeric|digits:9|nullable|unique:users,phone',
            'terms' => 'required'
        ]);
        
        if($request->has('google_id')){
            $attributes['google_id'] = $request->google_id; 
        }else{
            $attributes['github_id'] = $request->github_id;
        }
        $user = User::create($attributes);

        Auth::login($user, true);
        User::storeInvitedUsers();
        $request->user()->settings()->create(); 

        return redirect(RouteServiceProvider::HOME);
    }
}
