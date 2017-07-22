<?php

namespace App\Http\Controllers;

use App\replys;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function intro() {


        $hello = new replys();

        $full = $hello->full();

        return view('intro')->with('full', $full);
    }
}
