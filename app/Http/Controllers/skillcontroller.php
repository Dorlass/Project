<?php

namespace App\Http\Controllers;

use App\Models\education;
use App\Models\skills;
use Illuminate\Http\Request;

class skillcontroller extends Controller
{

    public function lijst(){
        $skills = skills::all();
        return view('skills/index', ['data'=>$skills]);
    }

    public function show($id){
        dd($id);
    }

    public function voorbeeld(skills $skills)
    {
        return view('skills/show', $skills);
    }

}
