<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practice extends Controller
{
    public function intro(Request $request) {

        $name = $request->name;
        if($name == null) {
            $name = '이름 없음';
        }

        return view('practice')->with('name', $name);
    }
}
