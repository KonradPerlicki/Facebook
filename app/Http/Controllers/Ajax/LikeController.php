<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Notification;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LikeController extends Controller
{
    public function manage_likes()
    {
        #todo send notification when first liked
        $post = Post::find(request()->id);#request()->id
        $likes = $post->likes->count()-1;
        
        #when disliking
        if($post->likedBy(request()->user())){
            request()->user()->likes()->where('post_id', $post->id)->first()->delete();
            Notification::withoutTrashed()->where('from_user_id', auth()->id())
            ->where('to_user_id', request()->author_id)->delete();
            $post = Post::find(request()->id);
            if($likes > 0){
                $last_user = $post->likes->reverse()->first()->user; //first user from the end
            }else{
                $last_user = 'zero';
            }
            $likes--;
            $txt = 'Like';
            $filled = false;
        }else{ #when liking
            if($like = Like::onlyTrashed()->where('user_id', auth()->id())->where('post_id', request()->id)->first()){
                $like->restore();
            }else{
                request()->user()->likes()->create([
                    'post_id' => request()->id
                ]);
            }
            
            if(request()->author_id != auth()->id()){
                if($notification = Notification::onlyTrashed()->where('from_user_id', auth()->id())
                ->where('to_user_id', request()->author_id)->first()){
                    $notification->restore();
                }else{
                    request()->user()->notifications()->create([
                        'to_user_id' => request()->author_id,
                        'content' => ' has liked your post.',
                        'additional_id' => request()->id,
                        'type' => 'like'
                    ]);
                }
            }
            
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
