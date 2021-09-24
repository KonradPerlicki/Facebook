<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        $post->comments()->create([
            'content' => request()->content,
            'user_id' => auth()->id(),
        ]);
        return back()->with('status','Comment added successfully');
    }

    public function destroy($id)
    {
        Comment::find($id)->delete();
        return back()->with('status','Comment removed successfully');
    }
    
    public function allow_comments()
    {
        Post::find(request()->post_id)->update(['allow_comments'=>true]);
    }

    public function disable_comments()
    {
        Post::find(request()->post_id)->update(['allow_comments'=>false]);
    }
}
