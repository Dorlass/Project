<?php

namespace App\Http\Controllers;

use App\Http\Resources\Skill;
use App\Http\Resources\SkillsResource;
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
        $data = skills::find($id);
        return new SkillsResource($data);
    }

    public function voorbeeld(skills $skills)
    {
        return view('skills/show', $skills);
    }

    public function list(){
        $data=skills::all();
        return SkillsResource::collection($data);
    }

}
