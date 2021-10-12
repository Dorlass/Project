<?php

use App\Http\Controllers\api\SkillController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\skillcontroller as ControllersSkillcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/skills/{id}',[SkillController::class, 'show']);
Route::get('/skills', [ControllersSkillcontroller::class, 'list'])->middleware('tokenCheck');
Route::get('/artist/{id}', [ArtistController::class, 'show']);
Route::get('/profile', function() {})->middleware('auth');