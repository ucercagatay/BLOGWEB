<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function adminlog(){
        return view('adminlog');
    }
}
