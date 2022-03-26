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
use App\Http\Controllers\PortFront\FrontController;

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
    Route::post('updatehome/{id}', [HomeController::class, 'updatehome']);
});
//portfolio frontend api
Route::get('gethome', [FrontController::class, 'getHome']);
Route::get('getabout', [FrontController::class, 'getAbout']);
Route::get('geteducation ', [FrontController::class, 'getEducation']);
Route::get('getexperience', [FrontController::class, 'getExperience']);
Route::get('getskill', [FrontController::class, 'getSkill']);
Route::get('getportfolio', [FrontController::class, 'getPortfolio']);
Route::get('getportfolio/{id}', [FrontController::class, 'getPortfolioById']);

// Route::resource('portfolio/home', HomeController::class);
// Route::post('updatehome/{id}', [HomeController::class, 'updatehome']);

Route::get('/demo-url',  function  (Request $request)  {
    return response()->json(['Laravel 8 CORS Demo']);
 });