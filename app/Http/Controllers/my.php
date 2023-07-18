<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class my extends Controller
{
    public function in(){
        return view("welcome");
    }
    public function page1(Request $name){
        // return view("page1");
        return $name-> name;
    }
} 
