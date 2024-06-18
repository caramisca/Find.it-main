<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function submit(Request $request){

        $prompt = $request->name;
        return view('ai')->with('prompt', $prompt);
    }
}
