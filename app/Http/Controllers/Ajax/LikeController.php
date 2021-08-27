<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LikeController extends Controller
{
    public function manageLikes()
    {
        #todo send notification when first liked
        $post = Post::find(request()->id);#request()->id
        $likes = $post->likes->count()-1;

        #if already liked
        if($post->likedBy(request()->user())){
            request()->user()->likes()->where('post_id', $post->id)->delete();
            $post = Post::find(request()->id);
            if($likes > 0){
                $last_user = $post->likes->reverse()->first()->user; //first user from the end
            }else{
                $last_user = 'zero';
            }
            $likes--;
            $txt = 'Like';
            $filled = false;
        }else{ #if not liked
            request()->user()->likes()->create([
                'post_id' => request()->id
            ]);
            $post = Post::find(request()->id);
            $current_user = auth()->user();
            $likes++;
            $txt='Unlike';
            $filled = true;
        }
        
        $all_likes = $post->likes->take(4);
        
        return response()->json([
            'txt'=>$txt, 
            'filled'=>$filled,
            'likes'=>$likes,
            'other'=>Str::plural('Other', $likes),
            'all_likes' => $all_likes,
            'last_user' => isset($last_user) ? $last_user : $current_user
        ],200);
    }
}
