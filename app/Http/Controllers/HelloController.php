<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        return view("home0255");
    }
    public function contact(){
        return view("contact0255");
    }
    public function artikel(){
        return view("artikel0255");
    }
}
