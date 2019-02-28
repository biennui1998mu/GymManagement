<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        $title = 'register-page';
        return view('register') -> with('title', $title);
//        return view('register', compact('title'));
    }
}
