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


          $users = DB::table("users AS a")
          ->select(array(
               "a.id as user_id", "a.username", "b.voteOn as upvote_on",
               "b.vote as upvote", "b.voteAdded as upvote_added", "c.voteOn as downvote_on",  "c.vote as downvote",
               "c.voteAdded as downvote_added"
          ))
          ->join("upvotes AS b",  "a.id", "=", "b.voteBy")
               ->join("downvotes AS c",  "a.id", "=", "c.voteBy")
               ->orderBy("b.voteAdded", "asc")
               ->get();
     }
}
