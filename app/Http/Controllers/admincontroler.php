<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class admincontroler extends Controller
{
    public function delete_member(){
        Members::where("user_email",session('email'))->delete();
        return view("register");
    }
}
