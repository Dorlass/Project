<?php

namespace App\Http\Controllers;

use App\Services\DogApiService;
use GuzzleHttp\Psr7\Uri;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DogApiController extends Controller
{
    public function getData()
    {
        $DogApiService = 'DogApiService'();
        $images= $DogApiService->getData();

        return \view ('/DogApi/Index', ['images' => [$images]]);
    }
}
