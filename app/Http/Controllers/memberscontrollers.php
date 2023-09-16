<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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
        $email = $req->em;
        $fn = $req->fn;
        $data=['email'=>$email,'fn'=>$fn];
        Mail::send('register_template',["data1"=>$data],function($message)use($data){
            
            $message->to($data['email'],$data['fn']);
            $message->from("hnananiya813@rku.ac.in","Harshit");
        });
        } else {
            session()->flash('err', 'error in saving data');
        }
        $data = Members::select()->get();
        return view('index',compact('data'));
    }
    public function fech_user(){
        $data = Members::select()->get();
        return view('admin/dashboard',compact('data'));
    }
    public function login(Request $req){
        $result = Members::where('user_email', $req->email)->where('user_pwd', $req->pwd)->first();
        if($result == null)
        {
            return "invalid username and password";
        }
        
        else if($result['user_role'] == "user"){
            $req->session()->put('email',$result['user_email']);
            $req-> session()->put('pwd',$result['user_pwd']);
            $req-> session()->put('name',$result['user_name']);
            $req-> session()->put('pic',$result['user_pic']);

            return redirect('/');
        }
        else{
            $req->session()->put('email', $result['user_email']);
            $req->session()->put('pwd', $result['user_pwd']);
            $req->session()->put('name', $result['user_name']);
            $req->session()->put('pic', $result['user_pic']);

            return redirect('/admin/dashboard');
        }
    }
    public function logout(Request $req){
        $req->session()->flush();
        return redirect('/');
    }

    public function fetch_user(Request $req){
        $data = Members::select()->get();
        return view('admin/dashboard',compact('data'));
    }
    public function status_users($id)
    {
        $data = Members::where('user_email', $id)->first();
        if ($data['user_status'] == "Active") {
            DB::table('members')
            ->where('user_email', $id)
                ->update(['user_status' => 'Inactive']);
            return redirect('admin/dashboard');
        } else {
            DB::table('members')
            ->where('user_email', $id)
                ->update(['user_status' => 'Active']);
            return redirect('admin/dashboard');
        }
    }
}
