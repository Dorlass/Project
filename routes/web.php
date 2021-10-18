<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\RecommendationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\skillcontroller;
use App\Http\Controllers\voorbeeldcontroller;
use App\Http\Middleware\EnsureTokenIsValid;

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

Route::get('/skills',[skillcontroller::class,'lijst']);
Route::get('/skills/{id}',[skillcontroller::class,'show']);
Route::get('/activity',[ActivityController::class, 'lijst']);
Route::get('/experience',[ExperienceController::class, 'lijst']);
Route::get('/recommendation',[RecommendationController::class, 'lijst']);
Route::get('/',[DogApiController::class,'getData']);

Route::get('/profile', function (){

})->middleware(EnsureTokenIsValid::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
