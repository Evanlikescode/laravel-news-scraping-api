<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeadlineController extends Controller
{

    // Detik
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detikNews()
    {
        try{
            $dataSource = [
                'webSource' => "https://news.detik.com/",
                'headlineSource' => ".media__title > a"
            ];
            $source = $this->scraper->getHeadline($dataSource); 
            $finalData = $this->cache->headlineStore($source, 'detik_news_headline');
            return $this->response->success($finalData, 'response_detik_news', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
           
    }

    public function detikFinance()
    {
        try{
            $dataSource = [
                'webSource' => "https://finance.detik.com/",
                'headlineSource' => ".media__title > a"
            ];
            $source = $this->scraper->getHeadline($dataSource); 
            $finalData = $this->cache->headlineStore($source, 'detik_finance_headline');
            return $this->response->success($finalData, 'response_detik_finance', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
        


        
    }

    public function detikHot()
    {
        try{
            $dataSource = [
                'webSource' => "https://hot.detik.com/",
                'headlineSource' => ".media__title > a"
            ];
            $source = $this->scraper->getHeadline($dataSource); 
            $finalData = $this->cache->headlineStore($source, 'detik_hot_headline');
            return $this->response->success($finalData, 'response_detik_hot', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
        


        
    }
    public function detikInet()
    {
        try{
            $dataSource = [
                'webSource' => "https://inet.detik.com/",
                'headlineSource' => ".media__title > a"
            ];
            $source = $this->scraper->getHeadline($dataSource); 
            $finalData = $this->cache->headlineStore($source, 'detik_inet_headline');
            return $this->response->success($finalData, 'response_detik_inet', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }

    public function detikSport()
    {
        try{
            $dataSource = [
                'webSource' => "https://sport.detik.com/",
                'headlineSource' => ".media__title > a"
            ];
            $source = $this->scraper->getHeadline($dataSource); 
            $finalData = $this->cache->headlineStore($source, 'detik_sport_headline');
            return $this->response->success($finalData, 'response_detik_sport', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }

    public function detikOto()
    {
        try{
            $dataSource = [
                'webSource' => "https://oto.detik.com/",
                'headlineSource' => ".media__title > a"
            ];
            $source = $this->scraper->getHeadline($dataSource); 
            $finalData = $this->cache->headlineStore($source, 'detik_oto_headline');
            return $this->response->success($finalData, 'response_detik_oto', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }

    public function detikTravel()
    {
        try{
            $dataSource = [
                'webSource' => "https://travel.detik.com/",
                'headlineSource' => ".list__news__content > h3  > a"
            ];
            $source = $this->scraper->getHeadline($dataSource); 
            $finalData = $this->cache->headlineStore($source, 'detik_travel_headline');
            return $this->response->success($finalData, 'response_detik_travel', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }

    public function detikFood()
    {
        try{
            $dataSource = [
                'webSource' => "https://food.detik.com/",
                'headlineSource' => ".media__title > a"
            ];
            $source = $this->scraper->getHeadline($dataSource); 
            $finalData = $this->cache->headlineStore($source, 'detik_food_headline');
            return $this->response->success($finalData, 'response_detik_food', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }

    public function detikHealth()
    {
        try{
            $dataSource = [
                'webSource' => "https://health.detik.com/",
                'headlineSource' => "article > a"
            ];
            $source = $this->scraper->getHeadline($dataSource); 
            $finalData = $this->cache->headlineStore($source, 'detik_health_headline');
            return $this->response->success($finalData, 'response_detik_health', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }

    public function detikWolipop()
    {
        try{
            $dataSource = [
                'webSource' => "https://wolipop.detik.com/",
                'headlineSource' => ".title > a"
            ];
            $source = $this->scraper->getHeadline($dataSource); 
            $finalData = $this->cache->headlineStore($source, 'detik_wolipop_headline');
            return $this->response->success($finalData, 'response_detik_wolipop', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }

    public function detik20()
    {
        try{
            $dataSource = [
                'webSource' => "https://20.detik.com/",
                'headlineSource' => ".media__title > a"
            ];
            $source = $this->scraper->getHeadline($dataSource); 
            $finalData = $this->cache->headlineStore($source, 'detik_20_headline');
            return $this->response->success($finalData, 'response_detik_20', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }

    // End Detik




    // Kompas
    
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
            return $this->response->success($finalData, 'response_kompas', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }

    // End Kompas

}
