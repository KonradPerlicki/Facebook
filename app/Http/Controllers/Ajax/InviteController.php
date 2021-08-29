<?php

namespace App\Http\Controllers;

use App\Models\Invite;
use App\Models\Notification;
use Illuminate\Http\Request;

class InviteController extends Controller
{
    public function store()
    {
        //invite was canceled and now restored so it's not first invite
        if($friend = Invite::onlyTrashed()->where('sender_id', auth()->id())->where('receiver_id', request()->id)->first()){
            $friend->restore();
            //when sending second invite dont create new invite instead restore previous 
            //and restore previous notification and mark them as seeable
            Notification::onlyTrashed()->where('from_user_id', auth()->id())
            ->where('to_user_id', request()->id)->restore();
        }else{//runs only once when its first invite
            request()->user()->invites()->create([
                'receiver_id' => request()->id
            ]);
            request()->user()->notifications()->create([
                'to_user_id' => request()->id,
                'content' => ' sent you a friend request.',
                'type' => 'friend'
            ]);
        }
    }

    public function destroy()
    {
        //mark invite as removed and unable to see
        Invite::where('sender_id', auth()->id())->where('receiver_id', request()->id)->delete();
        //mark notification as removed and unable to see
        Notification::where('from_user_id', auth()->id())->where('to_user_id', request()->id)->delete();
    }
}
