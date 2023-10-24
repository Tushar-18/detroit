<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class admincontroler extends Controller
{
    public function delete_product($id){
   
        DB::table('products')
            ->where('product_id', $id)
            ->delete();
        return redirect('admin/product');

    }
    public function edit_users($id)
    {
        $d = Members::where('user_id', $id)->first();
        return view('admin/admin_edit_member', compact('d'));
    }
    public function admin_update_users(Request $req)
    {
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


    public function delete_user($id)
    {

        DB::table('members')
        ->where('user_id', $id)
        ->delete();
        return redirect('admin/dashboard');
    }
}
