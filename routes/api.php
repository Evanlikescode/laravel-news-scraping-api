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
    Route::get('/detik', [HeadlineController::class, 'detik']);
    Route::get('/kompas', [HeadlineController::class, 'kompas']);
});

Route::prefix('search')->group(function (){
    Route::get('/detik/{query}', [SearchController::class, 'detik']);
    Route::get('/kompas/{query}', [SearchController::class, 'kompas']);
});