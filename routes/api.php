<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HeadlineController;
use App\Http\Controllers\Api\SearchController;
use App\Http\Controllers\Api\LandingController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [LandingController::class, 'landing']);

Route::prefix('headline')->group(function (){
    Route::get('/detik-news', [HeadlineController::class, 'detikNews']);
    Route::get('/detik-finance', [HeadlineController::class, 'detikFinance']);
    Route::get('/detik-hot', [HeadlineController::class, 'detikHot']);
    Route::get('/detik-inet', [HeadlineController::class, 'detikInet']);
    Route::get('/detik-sport', [HeadlineController::class, 'detikSport']);
    Route::get('/detik-oto', [HeadlineController::class, 'detikOto']);
    Route::get('/detik-travel', [HeadlineController::class, 'detikTravel']);
    Route::get('/detik-food', [HeadlineController::class, 'detikFood']);
    Route::get('/detik-health', [HeadlineController::class, 'detikHealth']);
    Route::get('/detik-wolipop', [HeadlineController::class, 'detikWolipop']);
    Route::get('/detik-20', [HeadlineController::class, 'detik20']);
    Route::get('/kompas', [HeadlineController::class, 'kompas']);
});

Route::prefix('search')->group(function (){
    Route::get('/detik/{query}', [SearchController::class, 'detik']);
});