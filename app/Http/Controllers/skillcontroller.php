<?php

namespace App\Http\Controllers;

use App\Models\skills;
use Illuminate\Http\Request;

class skillcontroller extends Controller
{
    public function voorbeeld(skills $skills)
    {
        return view('skills/show', $skills);
    }

}
