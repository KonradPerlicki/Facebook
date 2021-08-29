<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //get all rows where to_user_id is equal to current user id and where 
    //its not seen and update this rows to seen
    public function mark_as_read()
    {
        Notification::withoutTrashed()->where('to_user_id', request()->id)
        ->where('seen',false)->update(['seen' => true]);
    }
}
