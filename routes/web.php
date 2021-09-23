<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\RecommendationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\skillcontroller;
use App\Http\Controllers\voorbeeldcontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/', function (){
    return view('welcome');
});


Route::get('/voorbeeldmodel',[voorbeeldcontroller::class, 'index']);
Route::get('/voorbeeldmodel',[EducationController::class, 'index']);
Route::get('/voorbeeldmodel',[ExperienceController::class, 'index']);
Route::get('/voorbeeldmodel',[RecommendationController::class, 'index']);
Route::get('/voorbeeldmodel',[ActivityController::class, 'index']);

