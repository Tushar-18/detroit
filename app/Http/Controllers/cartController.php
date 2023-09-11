<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;
use App\Models\Products;
use Illuminate\Support\Facades\DB;


class cartController extends Controller
{
     public function add_cart(Request $req){
          
     }
     public function join()
     {
          return DB::table('students')
          ->join('collage', 'collage.student_id', '=', 'students.id')
          // ->select('students.name')
          // ->where('branch','sds')
          ->get();
     }
}
