<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admincontroler extends Controller
{
    public function delete_game($id){
   
        DB::table('games')
            ->where('game_id', $id)
            ->delete();
        return redirect('admin/game-list');

    }
}
