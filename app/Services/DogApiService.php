<?php

namespace App\Services;

use App\Models\DogApiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DogApiService
{
    public function getData()
    {   
        $response = Http::get('https://dog.ceo/api/breeds/image/random/5');
        $images = $response->json()['message'];
        return $images;
    }

    public function Import()
    {
        $images = $this->getData(50);
        foreach ($imageUrls as $imageUrl){
            $DogApiModel - new DogApiModel();
            $DogApiModel->url= $imageUrl;
            $DogApiModel->save();
        }
    }
}