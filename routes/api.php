<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Headline\DetikHeadlineController;
use App\Http\Controllers\Api\Headline\KompasHeadlineController;
use App\Http\Controllers\Api\Headline\BBCHeadlineController;
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
        Route::get('/news', [DetikHeadlineController::class, 'detikNews']);
        Route::get('/finance', [DetikHeadlineController::class, 'detikFinance']);
        Route::get('/hot', [DetikHeadlineController::class, 'detikHot']);
        Route::get('/inet', [DetikHeadlineController::class, 'detikInet']);
        Route::get('/sport', [DetikHeadlineController::class, 'detikSport']);
        Route::get('/oto', [DetikHeadlineController::class, 'detikOto']);
        Route::get('/travel', [DetikHeadlineController::class, 'detikTravel']);
        Route::get('/food', [DetikHeadlineController::class, 'detikFood']);
        Route::get('/health', [DetikHeadlineController::class, 'detikHealth']);
        Route::get('/wolipop', [DetikHeadlineController::class, 'detikWolipop']);
        Route::get('/20', [DetikHeadlineController::class, 'detik20']);
    });
    Route::prefix('kompas')->group(function (){
        Route::get('/news', [KompasHeadlineController::class, 'kompasNews']);
        Route::get('/tren', [KompasHeadlineController::class, 'kompasTren']);
        Route::get('/health', [KompasHeadlineController::class, 'kompasHealth']);
        Route::get('/food', [KompasHeadlineController::class, 'kompasFood']);
        Route::get('/edukasi', [KompasHeadlineController::class, 'kompasEdukasi']);
        Route::get('/parapuan', [KompasHeadlineController::class, 'kompasParapuan']);
        Route::get('/money', [KompasHeadlineController::class, 'kompasMoney']);
        Route::get('/umkm', [KompasHeadlineController::class, 'kompasUMKM']);
        Route::get('/tekno', [KompasHeadlineController::class, 'kompasTekno']);
        Route::get('/lifestyle', [KompasHeadlineController::class, 'kompasLifestyle']);
        Route::get('/homey', [KompasHeadlineController::class, 'kompasHomey']);
        Route::get('/properti', [KompasHeadlineController::class, 'kompasProperti']);
        Route::get('/bola', [KompasHeadlineController::class, 'kompasBola']);
        Route::get('/otomotif', [KompasHeadlineController::class, 'kompasOtomotif']);
        Route::get('/sains', [KompasHeadlineController::class, 'kompasSains']);
        Route::get('/hype', [KompasHeadlineController::class, 'kompasHype']);
        Route::get('/kolom', [KompasHeadlineController::class, 'kompasKolom']);
        Route::get('/foto', [KompasHeadlineController::class, 'kompasFoto']);

    });

    Route::prefix('bbc')->group(function (){
        Route::get('/general', [BBCHeadlineController::class, 'bbcGeneral']);
        Route::get('/news', [BBCHeadlineController::class, 'bbcNews']);
        Route::get('/sport', [BBCHeadlineController::class, 'bbcSport']);
        Route::get('/worklife', [BBCHeadlineController::class, 'bbcWorklife']);
        Route::get('/travel', [BBCHeadlineController::class, 'bbcTravel']);
        Route::get('/future', [BBCHeadlineController::class, 'bbcFuture']);
        Route::get('/culture', [BBCHeadlineController::class, 'bbcCulture']);
        
    });


});

Route::prefix('search')->group(function (){
    Route::get('/detik/{query}', [SearchController::class, 'detik']);
});