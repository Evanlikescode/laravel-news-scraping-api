<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeadlineController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detik()
    {
        try{
            $dataSource = [
                'webSource' => "https://news.detik.com/",
                'headlineSource' => ".media__title > a"
            ];
            $source = $this->scraper->getHeadline($dataSource); 
            $finalData = $this->cache->headlineStore($source, 'detik_headline');
            return $this->response->success($finalData, 'response_detik');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
        


        
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kompas()
    {
        try{
            $dataSource = [
                'webSource' => "https://www.kompas.com/",
                'headlineSource' => ".article__title > a"
            ];
            $source = $this->scraper->getHeadline($dataSource); 
            $finalData = $this->cache->headlineStore($source, 'kompas_headline');
            return $this->response->success($finalData, 'response_kompas');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }
        


        
    }

}
