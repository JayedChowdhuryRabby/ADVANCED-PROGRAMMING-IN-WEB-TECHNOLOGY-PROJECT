<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        
        $message = "Welcome to home page";
        return view('home')->with('message', $message);
    }
}
