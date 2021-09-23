<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (! in_array($request->lang, ['en', 'pl'])) {
            abort(400);
        }
        if (App::isLocale('en')) {
            session()->put('lang', 'pl');
        }else{
            session()->put('lang', 'en');
        }
        return redirect()->back();
    }
}
