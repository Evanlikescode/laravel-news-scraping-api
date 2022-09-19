<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        try{
            $dataSource = [
                'newsScraping' => [
                    'detik' => [
                        'getHeadlineNews' => '/headline/detik/news',
                        'getHeadlineFinance' => '/headline/detik/finance',
                        'getHeadlineHot' => '/headline/detik/hot',
                        'getHeadlineInet' => '/headline/detik/inet',
                        'getHeadlineSport' => '/headline/detik/sport',
                        'getHeadlineOto' => '/headline/detik/oto',
                        'getHeadlineTravel' => '/headline/detik/travel', 
                        'getHeadlineFood' => '/headline/detik/food',
                        'getHeadlineHealth' => '/headline/detik/health', 
                        'getHeadlineWolipop' => '/headline/detik/wolipop', 
                        'getHeadline20Detik' => '/headline/detik/20',
                        'searchNews'  => '/search/detik/{query}'
                    ],
                    'kompas' => [
                        'getHeadlineNews' => '/headline/kompas/news',
                        'getHeadlineTren' => '/headline/kompas/tren',
                        'getHeadlineHealth' => '/headline/kompas/health',
                        'getHeadlineFood' => '/headline/kompas/food' ,
                        'getHeadlineEdukasi' => '/headline/kompas/edukasi',
                        'getHeadlineParapuan' => '/headline/kompas/parapuan',
                        'getHeadlineMoney' => '/headline/kompas/money',
                        'getHeadlineUMKM' => '/headline/kompas/umkm',
                        'getHeadlineTekno' => '/headline/kompas/tekno',
                        'getHeadlineLifestyle' => '/headline/kompas/lifestyle',
                        'getHeadlineHomey' => '/headline/kompas/homey',
                        'getHeadlineProperti' => '/headline/kompas/properti',
                        'getHeadlineBola' => '/headline/kompas/bola',
                        'getHeadlineOtomotif' => '/headline/kompas/otomotif',
                        'getHeadlineSains' => '/headline/kompas/sains',
                        'getHeadlineHype' => '/headline/kompas/hype',
                        'getHeadlineKolom' => '/headline/kompas/kolom',
                        'getHeadlineFoto' => '/headline/kompas/foto',
                        'getHeadlinesearchNews'  => null
                    ],
                    'bbc' => [
                        'getHeadlineGeneral' => '/headline/bbc/general',
                        'getHeadlineNews' => '/headline/bbc/news',
                        'getHeadlineSport' => '/headline/bbc/sport',
                        'getHeadlineWorklife' => '/headline/bbc/worklife' ,
                        'getHeadlineTravel' => '/headline/bbc/travel',
                        'getHeadlineFuture' => '/headline/bbc/future',
                        'getHeadlineCulture' => '/headline/bbc/culture',
                        'getHeadlinesearchNews'  => null
                    ],
                ]
                
                
            ];
            return $this->response->success($dataSource, 'landing_page', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }
        
}
