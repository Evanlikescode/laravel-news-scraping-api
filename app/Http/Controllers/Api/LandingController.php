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
                        'getHeadlineGeneral' => '/api/headline/detik-news',
                        'getHeadlineFinance' => '/api/headline/detik-finance',
                        'getHeadlineHot' => '/api/headline/detik-hot',
                        'getHeadlineInet' => '/api/headline/detik-inet',
                        'getHeadlineSport' => '/api/headline/detik-sport',
                        'getHeadlineOto' => '/api/headline/detik-oto',
                        'getHeadlineTravel' => '/api/headline/detik-travel', 
                        'getHeadlineFood' => '/api/headline/detik-food',
                        'getHeadlineHealth' => '/api/headline/detik-health', 
                        'getHeadlineWolipop' => '/api/headline/detik-wolipop', 
                        'getHeadline20Detik' => '/api/headline/detik-20',
                        'searchNews'  => '/api/search/detik/{query}'
                    ],
                    'kompas' => [
                        'getHeadline' => '/api/headline/kompas',
                        'searchNews'  => null
                    ],
                ]
                
                
            ];
            return $this->response->success($dataSource, 'landing_page', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }
        
}
