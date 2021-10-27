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
use App\Http\Controllers\DogApiController;
use App\Http\Controllers\HelloWorldMailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/skills',[skillcontroller::class,'lijst']);
Route::get('/skills/{id}',[skillcontroller::class,'show']);
Route::get('/activity',[ActivityController::class, 'lijst']);
Route::get('/experience',[ExperienceController::class, 'lijst']);
Route::get('/recommendation',[RecommendationController::class, 'lijst']);
Route::get('/DogAPi',[DogApiController::class,'getData']);
Route::get('/',[HomeController::class,'index']);
Route::get('/mail', [HelloWorldMailController::class,'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dogphoto', [UserController::class, 'viewmail']);
