<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArtistResource;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index(Request $request)
    {
        return view('/artist/index');
    }

    public function show($id){
        $artist = 'Artist'::find($id)->with('skills');
        return new ArtistResource($artist);
    }
}
