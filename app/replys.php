<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class replys extends Model
{
    //
    public function full() {


        $full = DB::table('replys')->select('id', 'text')->get();
//        $count = DB::table('replys')->count();

        return $full;
    }
}
