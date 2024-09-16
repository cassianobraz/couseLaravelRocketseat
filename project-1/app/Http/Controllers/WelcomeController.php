<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome.index');
    }

    public function exemplo(){
        return view('welcome.exemplo');
    }

    public function hello(){
        return view('welcome.hello');
    }
}
