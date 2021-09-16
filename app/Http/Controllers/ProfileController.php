<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        $story = Story::where('user_id', $user->id)->where('expires_at', '>=', now())->first();
        $posts = Post::where('user_id', $user->id)->latest()->paginate(6);

        return view('user.timeline', [
            'user' => $user,
            'posts' => $posts,
            'friends' => $user->friends,
            'story' => $story
        ]);
    }
}
