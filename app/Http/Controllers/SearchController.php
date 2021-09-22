<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $search_result = User::select(['id','first_name','last_name','username','profile_image'])
        ->where('first_name', 'LIKE', '%'.request()->search.'%')
        ->orWhere('last_name', 'LIKE', '%'.request()->search.'%')
        ->orWhere('username', 'LIKE', '%'.request()->search.'%')->paginate(15);
        return view('searches',[
            'user' => auth()->user(),
            'searches' => $search_result
        ]);
    }

    public function show($search)
    {
        $result = User::select(['id','first_name','last_name','username','profile_image'])
        ->where('first_name', 'LIKE', '%'.$search.'%')
        ->orWhere('last_name', 'LIKE', '%'.$search.'%')
        ->orWhere('username', 'LIKE', '%'.$search.'%')->get();
        $result->prepend(["total"=>$result->count()]);
        return response()->json($result->take(7), 200);
    }

    public function store(Request $request)
    {
        request()->user()->search()->create(['searched_for' => $request->search]);
        return redirect('search/?search='.$request->search);
    }
}
