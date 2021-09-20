<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function show($search)
    {
        $result = User::where('first_name', 'LIKE', '%'.$search.'%')
        ->orWhere('last_name', 'LIKE', '%'.$search.'%')
        ->orWhere('username', 'LIKE', '%'.$search.'%')->take(6)->get();
        return response()->json($result, 200);
    }
}
