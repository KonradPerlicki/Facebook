<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Invite;
use App\Models\Notification;
use Illuminate\Support\Facades\Cache;

class InviteController extends Controller
{
    public function store()
    {
        //invite was canceled and now restored so it's not first invite
        if($invite = Invite::onlyTrashed()->where('sender_id', auth()->id())->where('receiver_id', request()->id)->first()){
            $invite->restore();
            //when sending second invite dont create new invite instead restore previous 
            //and restore previous notification and mark them as seeable
            Notification::onlyTrashed()->where('from_user_id', auth()->id())
            ->where('to_user_id', request()->id)->first()->restore();
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

        //refresh list of invited users
        $invited_users = Invite::where('sender_id', auth()->id())->get()->pluck('receiver_id')->toArray();
        Cache::forever('invited_users', $invited_users);

        return response('Success',200);
    }

    public function destroy()
    {
        //mark invite as removed and unable to see
        Invite::where('sender_id', auth()->id())->where('receiver_id', request()->id)->delete();
        //mark notification as removed and unable to see
        Notification::where('from_user_id', auth()->id())->where('to_user_id', request()->id)->delete();
    
        //refresh list of invited users
        $invited_users = Invite::where('sender_id', auth()->id())->get()->pluck('receiver_id')->toArray();
        Cache::forever('invited_users', $invited_users);
    }
}
