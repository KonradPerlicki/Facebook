<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function manageLikes()
    {
        #todo send notification when first liked
        $post = Post::find(request()->id);
        #if already liked
        if($post->likedBy(request()->user())){
            request()->user()->likes()->where('post_id', $post->id)->delete();
            $txt = 'Like';
            $filled = false;
        }else{ #if not liked
            request()->user()->likes()->create([
                'post_id' => request()->id
            ]);
            $txt='Unlike';
            $filled = true;
        }
        return response()->json(['txt'=>$txt, 'filled'=>$filled],200);
    }
}
