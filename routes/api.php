<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Portfolio\HomeController;
use App\Http\Controllers\Portfolio\AboutController;
use App\Http\Controllers\Portfolio\EduController;
use App\Http\Controllers\Portfolio\ExpController;
use App\Http\Controllers\Portfolio\PortfController;
use App\Http\Controllers\Portfolio\SkillController;

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

Route::group(['middleware' => 'api'], function ($router) {
    Route::post('register', [UserAuthController::class, 'register']);
    Route::post('login', [UserAuthController::class, 'login']);
    Route::get('user', [UserAuthController::class, 'user']);
    Route::post('refresh', [UserAuthController::class, 'refresh']);
    Route::post('logout', [UserAuthController::class, 'logout']);
});
Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('users', [UserAuthController::class, 'getAuthenticatedUser']);
    Route::resource('portfolio/home', HomeController::class);
    Route::resource('portfolio/about', AboutController::class);
    Route::resource('portfolio/education', EduController::class);
    Route::resource('portfolio/experience', ExpController::class);
    Route::resource('portfolio/skill', SkillController::class);
    Route::resource('portfolio/portf', PortfController::class);

});
Route::get('/demo-url',  function  (Request $request)  {
    return response()->json(['Laravel 8 CORS Demo']);
 });