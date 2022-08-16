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
                        'getHeadlineNews' => '/api/headline/detik/news',
                        'getHeadlineFinance' => '/api/headline/detik/finance',
                        'getHeadlineHot' => '/api/headline/detik/hot',
                        'getHeadlineInet' => '/api/headline/detik/inet',
                        'getHeadlineSport' => '/api/headline/detik/sport',
                        'getHeadlineOto' => '/api/headline/detik/oto',
                        'getHeadlineTravel' => '/api/headline/detik/travel', 
                        'getHeadlineFood' => '/api/headline/detik/food',
                        'getHeadlineHealth' => '/api/headline/detik/health', 
                        'getHeadlineWolipop' => '/api/headline/detik/wolipop', 
                        'getHeadline20Detik' => '/api/headline/detik/20',
                        'searchNews'  => '/api/search/detik/{query}'
                    ],
                    'kompas' => [
                        'getHeadlineNews' => '/api/headline/kompas/news',
                        'getHeadlineTren' => '/api/headline/kompas/tren',
                        'getHeadlineHealth' => '/api/headline/kompas/health',
                        'getHeadlineFood' => '/api/headline/kompas/food' ,
                        'getHeadlineEdukasi' => '/api/headline/kompas/edukasi',
                        'getHeadlineParapuan' => '/api/headline/kompas/parapuan',
                        'getHeadlineMoney' => '/api/headline/kompas/money',
                        'getHeadlineUMKM' => '/api/headline/kompas/umkm',
                        'getHeadlineTekno' => '/api/headline/kompas/tekno',
                        'getHeadlineLifestyle' => '/api/headline/kompas/lifestyle',
                        'getHeadlineHomey' => '/api/headline/kompas/homey',
                        'getHeadlineProperti' => '/api/headline/kompas/properti',
                        'getHeadlineBola' => '/api/headline/kompas/bola',
                        'getHeadlineOtomotif' => '/api/headline/kompas/otomotif',
                        'getHeadlineSains' => '/api/headline/kompas/sains',
                        'getHeadlineHype' => '/api/headline/kompas/hype',
                        'getHeadlineKolom' => '/api/headline/kompas/kolom',
                        'getHeadlineFoto' => '/api/headline/kompas/foto',
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
