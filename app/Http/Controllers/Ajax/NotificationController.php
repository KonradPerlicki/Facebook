<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //get all rows where to_user_id is equal to current user id and where 
    //its not seen and update this rows to seen
    public function mark_as_read()
    {
        if(Notification::withoutTrashed()->where('to_user_id', request()->id)
        ->where('seen',false)->update(['seen' => true])){
            return response('Success',200);
        }else{
            return response('Error',500);
        }
    }

    public function index()
    {
        return view('notifications',[
            'user' => auth()->user(),
            'notifications' => Notification::withoutTrashed()->with('from')->where('to_user_id', auth()->id())->orderBy('seen')->orderByDesc('updated_at')->paginate(15)
        ]);
    }
}
