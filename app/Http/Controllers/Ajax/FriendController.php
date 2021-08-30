<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Friend;
use App\Models\Invite;
use App\Models\Notification;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function store()
    {
        $user_id = request()->user_id;
        #User::with('friends')->where('id',$id)->get()
        #mutual    dd(Friend::where('user_id',$id)->whereIn('friend_id',[10])->get());
        #dd(Friend::where('user_id', $id)->orWhere('user_id2', $id)->get());
        #dd(Friend::with('user')->where('user_id', auth()->id())->get()); //show MY friends
        $invite = Invite::where('sender_id', $user_id)->where('receiver_id', auth()->id())->first();
        $invite->forceDelete();
        
        request()->user()->friends()->create([
            'friend_id' => $user_id,
        ]);
        //create reversed relation
        Friend::create([
            'user_id' => $user_id,
            'friend_id' => auth()->id(),
        ]);
        //set friend request notification as accepted(2)
        Notification::where('from_user_id', $user_id)->where('to_user_id', auth()->id())->update([
            'additional_id' => 2
        ]);

        request()->user()->notifications()->create([
            'to_user_id' => $user_id,
            'content' => ' has accepted your friend request.',
            'type' => 'accepted'
        ]);
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

        request()->user()->notifications()->create([
            'to_user_id' => $user_id,
            'content' => ' has rejected your friend request.',
            'type' => 'rejected'
        ]);
    }
}
