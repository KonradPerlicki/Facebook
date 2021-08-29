<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function store(PostRequest $request)
    {
        $attributes = $request->validated();
        if(isset($attributes['image'])) $attributes['image'] = $request->file('image')->store('public/posts');
        if(isset($attributes['video'])) $attributes['video'] = $request->file('video')->store('public/posts');
        
        request()->user()->posts()->create($attributes);

        return back()->with('status', 'Post created successfully');
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        
        $attributes = $request->validated();
        //check if user delete everything and leave empty post, if so return error with message
        if(!$attributes['content'] && ($request->remove_image 
            || $request->remove_video) && (!isset($attributes['image']) 
            && !isset($attributes['video']))){
                return back()->withErrors('You can\'t leave your post empty!');
            }
        
        //deleting files if checked
        if(isset($request->remove_image)){
            Storage::delete($post->image);
            $attributes['image'] = null;
        } 
        if(isset($request->remove_video)){
            Storage::delete($post->video);
            $attributes['video'] = null;
        } 
        //updating files if exists
        if(isset($attributes['image'])) $attributes['image'] = $request->file('image')->store('public/posts');
        if(isset($attributes['video'])) $attributes['video'] = $request->file('video')->store('public/posts');

        $post->update($attributes);

        return back()->with('status', 'Post updated successfully');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return back()->with('status', 'Post deleted successfully');
    }
}
