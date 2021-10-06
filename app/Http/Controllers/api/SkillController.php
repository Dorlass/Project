<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SkillsResource;
use App\Http\Resources\SkillCollection;
use Illuminate\Http\Request;
use App\Models\skills;

class SkillController extends Controller
{
    public function show(){
        $data = skills::first();
        return new SkillsResource($data);
    }

    public function list(){
        $data = skills::all();
        return new SkillCollection($data);
    }

}
