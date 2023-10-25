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
        $data=['em'=>$email,'fn'=>$fn];
        Mail::send('register_template',["data1"=>$data],function($message)use($data){
            
            $message->to($data['em'],$data['fn']);
            $message->from("travaliya519@rku.ac.in","Tushar");
        });
        } else {
            session()->flash('err', 'error in saving data');
        }
        $data = Members::select()->get();
        return view('index',compact('data'));
    }
    public function account_activation($email)
    {
        $result = members::where("user_email",$email)->first();
        if (empty($result)) {
            session()->flash('error', 'Your account is not registered. kindly register here.');
            return redirect('register');
        } else {
            if ($result->user_status == 'Active') {
                session()->flash('success', 'Your account is already activated kindly login');
            } else {
                $update = members::where('user_email', $email)->update(array('user_status' => 'Active'));
                if ($update) {
                    session()->flash('success', 'Your account is activated successfully. kindly login');
                } else {
                    session()->flash('error', 'Account activation failed please try after sometime.');
                }
            }
            return redirect('login');
        }
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
        
        else if($result['user_role'] == "user" && $result['user_status'] == "Active"){
            $req->session()->put('email',$result['user_email']);
            $req-> session()->put('pwd',$result['user_pwd']);
            $req-> session()->put('name',$result['user_name']);
            $req-> session()->put('user_id',$result['user_id']);    
            $req-> session()->put('pic',$result['user_pic']);

            return redirect('/');
        }
        else if($result['user_role'] == "Admin"&& $result['user_status'] == "Active"){
            $req->session()->put('email', $result['user_email']);
            $req->session()->put('pwd', $result['user_pwd']);
            $req->session()->put('user_id', $result['user_id']);    
            $req->session()->put('name', $result['user_name']);
            $req->session()->put('pic', $result['user_pic']);

            return redirect('/admin/dashboard');
        }
        else{
            return "Inactive Account";
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
    public function change_pwd(Request $req){
        $req->validate([   
            'old_pwd' => 'required|min:4|max:20|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,20}$/',
            'pwd' => 'required|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,20}$/',
            'pwd_confirmation' => 'required'
        ],[
            'old_pwd.required' => 'old password required',
            'pwd.required' => 'New password required',
            'old_pwd.min' => 'old password must have 4 character',
            'pwd.min' => 'new password must have 4 character',
            'old_pwd.max' => 'old password must have 20 charcter',
            'pwd.max' => 'new password must have 20 charcter',
            'pwd.confirmed' => 'Password and Confirm Password must match',
            'pwd_confirmation.required' => 'please enter password',
             'old_pwd.regex' => 'use !,#,$,%,^,&,*,-,?',
             'pwd.regex' => 'use !,#,$,%,^,&,*,-,?'

        ]);
        $data = Members::where('user_email', session()->get('email'))->first();
        if($data['user_pwd'] == $req->old_pwd){
            $data = Members::where('user_email', session('email'))->update(array('user_pwd'=> $req->pwd));
            return view('login');
        }
        else{
            echo 'password not match';
        }
    }
    // public function edit_profile(Request $req){
    //     $req->validate([
    //         'name' => 'required|max:20|min:2',
    //         'dob' => 'required',    

    //     ],[
    //         'name.required' => 'Name is required',
    //         'name.min' => 'Full name must contain minimum 3 characters',
    //         'name.max' => 'Full name must contain maximum of 30 characters',
    //         'dob.required' => 'Date of Birth is required',
    //         'profile.required' => 'Profile pohto not selected',
    //         'profile.max' => 'file size is lessthan 30MB'
    //     ]);

    //     $result = Members::where('user_email', $req->email)->first();
    //     if ($req->hasFile('profile')) {
    //         $file_name = "Images/profile_pictures/" . $result['profile'];
    //         if (File::exists($file_name)) {
    //             File::delete($file_name);
    //         }

    //         $pic_name = uniqid() . $req->file('profile')->getClientOriginalName();
    //         $req->profile->move('images/profile_pictures/', $pic_name);
    //         $result->where('email', $req->email)->update(array('fullname' => $req->name,  'birth_date' => $req->dob, 'pic' => $pic_name));
    //         session()->flash('succ', 'Data Updated successfully');
    //     } else {

    //         $result->where('user_email', $req->email)->update(array('fullname' => $req->name, 'birth_date' => $req->dob));
    //         session()->flash('succ', 'Data Updated successfully');
    //     }
    //     $result = Members::where('useer_email', $req->email)->first();
    //     $req->session()->put('email', $result['email']);
    //     $req->session()->put('pwd', $result['password']);
    //     $req->session()->put('name', $result['fullname']);
    //     $req->session()->put('pic', $result['pic']);
    //     $req->session()->put('id',$result['id']);

    //     return redirect()->back();

    //     return view('edit_profile');
    // }
    public function edit_users($id)
    {
        $d = Members::where('user_id', session('user_id'))->first();
        return view('edit_profile', compact('d'));
    }
    public function update_users(Request $req)
    {
        $req->validate([
            'fn' => 'required',
            'em' => 'required|email',
            'pin' => 'required|digits:6',
            'city' => 'required',
            'states' => 'required',
            'num' => 'required|digits:10',
            'address' => 'required',
            'pic' => 'required',
        ]);
        return "hello";
        $result = Members::where('user_email', $req->em)->first();
        if ($req->hasFile('pic')) {

            $file_name = "profile_pic/" . $result['pic'];
            if (File::exists($file_name)) {
                File::delete($file_name);
            }

            $pic_name = uniqid() . $req->file('pic')->getClientOriginalName();
            $req->pic->move('profile_pic/', $pic_name);
            $result->where('user_email', $req->em)->update(array('user_name' => $req->fn,  'user_pincode' => $req->pin, 'user_city' => $req->city, 'user_states' => $req->states, 'user_number' => $req->num, 'user_address' => $req->address, 'pic' => $pic_name));
            session()->flash('succ', 'Data Updated successfully');
        } else {
            $result->where('user_email', $req->em)->update(array('user_name' => $req->fn,  'user_pincode' => $req->pin, 'user_city' => $req->city, 'user_states' => $req->states, 'user_number' => $req->num, 'user_address' => $req->address));
            session()->flash('succ', 'Data Updated successfully');
        }
        return redirect()->back();
    }
}
