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
    Route::prefix('detik')->group(function (){
        Route::get('/news', [HeadlineController::class, 'detikNews']);
        Route::get('/finance', [HeadlineController::class, 'detikFinance']);
        Route::get('/hot', [HeadlineController::class, 'detikHot']);
        Route::get('/inet', [HeadlineController::class, 'detikInet']);
        Route::get('/sport', [HeadlineController::class, 'detikSport']);
        Route::get('/oto', [HeadlineController::class, 'detikOto']);
        Route::get('/travel', [HeadlineController::class, 'detikTravel']);
        Route::get('/food', [HeadlineController::class, 'detikFood']);
        Route::get('/health', [HeadlineController::class, 'detikHealth']);
        Route::get('/wolipop', [HeadlineController::class, 'detikWolipop']);
        Route::get('/20', [HeadlineController::class, 'detik20']);
    });
    Route::prefix('kompas')->group(function (){
        Route::get('/news', [HeadlineController::class, 'kompasNews']);
        Route::get('/tren', [HeadlineController::class, 'kompasTren']);
        Route::get('/health', [HeadlineController::class, 'kompasHealth']);
        Route::get('/food', [HeadlineController::class, 'kompasFood']);
        Route::get('/edukasi', [HeadlineController::class, 'kompasEdukasi']);
        Route::get('/parapuan', [HeadlineController::class, 'kompasParapuan']);
        Route::get('/money', [HeadlineController::class, 'kompasMoney']);
        Route::get('/umkm', [HeadlineController::class, 'kompasUMKM']);
        Route::get('/tekno', [HeadlineController::class, 'kompasTekno']);
        Route::get('/lifestyle', [HeadlineController::class, 'kompasLifestyle']);
        Route::get('/homey', [HeadlineController::class, 'kompasHomey']);
        Route::get('/properti', [HeadlineController::class, 'kompasProperti']);
        Route::get('/bola', [HeadlineController::class, 'kompasBola']);
        Route::get('/otomotif', [HeadlineController::class, 'kompasOtomotif']);
        Route::get('/sains', [HeadlineController::class, 'kompasSains']);
        Route::get('/hype', [HeadlineController::class, 'kompasHype']);
        Route::get('/kolom', [HeadlineController::class, 'kompasKolom']);
        Route::get('/foto', [HeadlineController::class, 'kompasFoto']);

    });
});

Route::prefix('search')->group(function (){
    Route::get('/detik/{query}', [SearchController::class, 'detik']);
});