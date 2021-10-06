<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skills;

class skillController extends Controller
{
    public function show(){
        return skills::first();
    }
}
