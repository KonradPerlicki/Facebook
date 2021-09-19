<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Friend;
use App\Models\Invite;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FriendController extends Controller
{
    public function store()
    {
        $user_id = request()->user_id;
        $invite = Invite::where('sender_id', $user_id)->where('receiver_id', auth()->id())->first();
        $invite->forceDelete();
        
        request()->user()->friends()->firstOrCreate([
            'friend_id' => $user_id,
        ]);
        //create reversed relation
        Friend::firstOrCreate([
            'user_id' => $user_id,
            'friend_id' => auth()->id(),
        ]);
        //set friend request notification as accepted(2)
        Notification::where('from_user_id', $user_id)->where('to_user_id', auth()->id())->update([
            'additional_id' => 2
        ]);

        if(request()->user()->notifications()->create([
            'to_user_id' => $user_id,
            'content' => ' has accepted your friend request.',
            'type' => 'accepted'
        ])){
            $invited_users = Invite::where('sender_id', auth()->id())->get()->pluck('receiver_id')->toArray();
            Cache::forever('invited_users', $invited_users);
            return response('Success',200);
        }else{
            return response('Error',500);
        }
    }

    public function destroy()
    {
        $user_id = request()->user_id;
        $invite = Invite::where('sender_id', $user_id)->where('receiver_id', auth()->id())->first();
        $invite->forceDelete();
        //set friend request notification as rejected(1)
        Notification::where('from_user_id', $user_id)->where('to_user_id', auth()->id())->update([
            'additional_id' => 1
        ]);

        if(request()->user()->notifications()->create([
            'to_user_id' => $user_id,
            'content' => ' has rejected your friend request.',
            'type' => 'rejected'
        ])){
            $invited_users = Invite::where('sender_id', auth()->id())->get()->pluck('receiver_id')->toArray();
            Cache::forever('invited_users', $invited_users);
            return response('Success',200);
        }else{
            return response('Error',500);
        }
    }

    public function unfriend($id)
    {
        Friend::where('user_id',$id)->where('friend_id',auth()->id())->delete();
        Friend::where('friend_id',$id)->where('user_id',auth()->id())->delete();
        request()->user()->notifications()->create([
            'to_user_id' => $id,
            'content' => 'has removed you from friend list',
            'type' => 'unfriend'
        ]);
        return back()->with('status', 'Friend removed successfully');
    }
}
