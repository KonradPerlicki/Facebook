<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        $posts = Post::where('user_id', $user->id)->latest()->paginate(6);
        #$likes = Like::with('user')->where('user_id',auth()->id())->get(); this shows posts liked by that user
        return view('user.timeline', [
            'user' => $user,
            'posts' => $posts
        ]);
    }
}
