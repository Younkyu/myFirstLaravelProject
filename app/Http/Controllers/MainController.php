<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function intro(Request $request) {

        $name = $request->name;
        if($name == null) {
            $name = '이름 없음';
        }

        return view('intro')->with('name', $name);
    }
}
