<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class voorbeeldcontroller extends Controller
{
    public function index(){
        return view('voorbeeldmodel/index');
    }
}
