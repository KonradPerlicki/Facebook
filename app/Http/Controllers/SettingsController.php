<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function index()
    {
        return view('user.pages-setting',[
            'user' => auth()->user()
        ]);
    }

    public function update(Request $request)
    {
        if(isset($request->table)){ //it should update users table 
            $attributes = $this->validate($request, [
                'first_name' => 'required|string|max:255|min:3',
                'last_name' => 'required|string|max:255|min:3',
                'about_me' => 'string|max:255|nullable',
                'location' => 'string|max:255|nullable',
                'working_at' => 'string|max:255|nullable',
                'relationship' => 'string|max:30|nullable',
                'background_image' => 'nullable|image|max:1999',
                'profile_image' => 'nullable|image|max:1999'
            ]);
            
            $user = User::find(auth()->id());

            if(isset($attributes['background_image'])){
                $user->background_image != 'background_image/background.jpg' 
                    ? Storage::delete($user->background_image) 
                    : '';
                $attributes['background_image'] = request()->file('background_image')->store('public/background_image'); #store path to stored image
            }

            if(isset($attributes['profile_image'])){
                $user->profile_image != 'profile_image/user.png' 
                    ? Storage::delete($user->profile_image) 
                    : '';
                $attributes['profile_image'] = request()->file('profile_image')->store('public/profile_image'); #store path to stored image
            }

            $user->update($attributes);
            return back()->with('status', 'Profile updated successfully');
        }else{ //update settings table
            $attributes = $this->validate($request, [
                'who_can_follow' => 'required|integer',
                'show_my_activities' => 'required|integer',
                'display_in_search_engine' => 'nullable',
            ]);
            isset($attributes['display_in_search_engine']) 
                ? $attributes['display_in_search_engine']=1 
                : $attributes['display_in_search_engine']=0;
            $settings = Settings::where('user_id', auth()->id())->first();
            $settings->update($attributes);

            return back()->with('status', 'Privacy updated successfully');
        }
        
    }
}