<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\User;
use App\Models\ViewedStories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoryController extends Controller
{
    public function store(Request $request)
    {
        $attributes = $this->validate($request, ['image'=>'required|image|max:1999', 'who_can_see'=>'required']);
        
        if(isset($attributes['image'])) $attributes['image'] = $request->file('image')->store('public/stories');
        $attributes['expires_at'] = now()->addHours(24);
        $request->user()->story()->create($attributes);

        return back()->with('status', 'Story added successfully');
    }

    public function destroy()
    {
        $story = Story::where('user_id', auth()->id())->where('expires_at', '>=', now())->first();
        Storage::delete($story->image);
        $story->delete();
        return back()->with('status', 'Story deleted successfully');
    }

    public function count()
    {
        $username = request()->username;
        $user = User::where('username', $username)->first();

        Story::find($user->available_story->id)->increment('views');

        if(ViewedStories::where('user_id', auth()->id())
        ->where('story_id', $user->available_story->id)
        ->firstOrCreate([
            'user_id' => auth()->id(),
            'story_id' => $user->available_story->id
        ])){
            return response('Success',200);
        }else{
            return response('Error',500);
        }
    }
}
