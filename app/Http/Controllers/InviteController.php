<?php

namespace App\Http\Controllers;

use App\Models\Invite;
use Illuminate\Http\Request;

class InviteController extends Controller
{
    public function store()
    {
        //invite was canceled and now restored so it's not first invite
        if($friend = Invite::onlyTrashed()->where('sender_id', auth()->id())->where('receiver_id', request()->id)->first()){
            $friend->restore();
        }else{//runs only once when its first invite
            request()->user()->invites()->create([
                'receiver_id' => request()->id
            ]);
            //TODO send notification
        }
    }

    public function destroy()
    {
        Invite::where('sender_id', auth()->id())->where('receiver_id', request()->id)->delete();
    }
}
