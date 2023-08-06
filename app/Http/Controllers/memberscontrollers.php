<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class memberscontrollers extends Controller
{
    public function add_users(Request $req){
        $req->validate([
            'fn' => 'required|min:3|max:20',
           'em' => 'required|email',
             'pwd' => 'required',
            'cpwd' => 'required|same:pwd',
            'pin' => 'required|digits:6',
            'city' => 'required',
            'states' => 'required',
             'num' => 'required|digits:10',
             'address' => 'required',
             'pic' => 'required|max:30000|mimes:jpg,png,gif,bmp'
       ]);
        $pic_name = uniqid() . $req->file('pic')->getClientOriginalName();
        $req->pic->move('profile_pic', $pic_name);
        $reg = new Members();
        $reg->user_name = $req->fn;
        $reg->user_email = $req->em;
        $reg->user_pwd = $req->pwd;
        $reg->user_number = $req->num;
        $reg->user_address = $req->address;
        $reg->user_city = $req->city;
        $reg->user_states = $req->states;
        $reg->user_pincode = $req->pin;
        $reg->user_pic = $pic_name;
        // $reg->gender = $req->gender;
        if ($reg->save()) {
            session()->flash('succ', 'Data saved successfully');
        } else {
            session()->flash('err', 'error in saving data');
        }
        return view('log');
    }
}
