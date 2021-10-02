<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\RecommendationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UsersController;



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

Route::get('/skills',[SkillController::class,'lijst']);
Route::get('/skills/{id}',[SkillController::class,'show']);
Route::get('/activity',[ActivityController::class, 'lijst']);
Route::get('/experience',[ExperienceController::class, 'lijst']);
Route::get('/recommendation',[RecommendationController::class, 'lijst']);
Route::get('/users', [UsersController::class, 'lijst']);