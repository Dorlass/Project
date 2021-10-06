

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DogApiController extends Controller
{
    public function getData()
    {
        $response = Http::get('https://dog.ceo/api/breeds/image/random');
        $images = $response->json()['message'];

        return view('/DogApi/index', ['images' => $images]);
    }
}