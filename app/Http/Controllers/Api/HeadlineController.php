<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeadlineController extends Controller
{

    const detikDataSource = [
        'News' => [
            'webSource' => "https://news.detik.com/",
            'headlineSource' => ".media__title > a"
        ],
        'Finance' => [
            'webSource' => "https://finance.detik.com/",
            'headlineSource' => ".media__title > a"
        ],
        'Hot' => [
            'webSource' => "https://hot.detik.com/",
            'headlineSource' => ".media__title > a"
        ],
        'Inet' => [
            'webSource' => "https://inet.detik.com/",
            'headlineSource' => ".media__title > a"
        ],
        'Sport' => [
            'webSource' => "https://sport.detik.com/",
            'headlineSource' => ".media__title > a"
        ],
        'Oto' => [
            'webSource' => "https://oto.detik.com/",
            'headlineSource' => ".media__title > a"
        ],
        'Travel' => [
            'webSource' => "https://travel.detik.com/",
            'headlineSource' => ".list__news__content > h3  > a"
        ],
        'Food' => [
            'webSource' => "https://food.detik.com/",
            'headlineSource' => ".media__title > a"
        ],
        'Health' => [
            'webSource' => "https://health.detik.com/",
            'headlineSource' => "article > a"
        ],
        'Wolipop' => [
            'webSource' => "https://wolipop.detik.com/",
            'headlineSource' => ".title > a"
        ],
        '20' => [
            'webSource' => "https://20.detik.com/",
            'headlineSource' => ".media__title > a"
        ],
        
    ];
    
    const kompasDataSource = [
        'News' => [
            'webSource' => 'https://www.kompas.com/',
            'headlineSource' => '.article__title > a'
        ]
        ];

    // Detik
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detikNews()
    {
        try{
            $source = $this->scraper->getHeadline(self::detikDataSource['News']); 
            $finalData = $this->cache->headlineStore($source, 'detik_news_headline');
            return $this->response->success($finalData, 'response_detik_news', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
           
    }

    public function detikFinance()
    {
        try{
            $source = $this->scraper->getHeadline(self::detikDataSource['Finance']); 
            $finalData = $this->cache->headlineStore($source, 'detik_finance_headline');
            return $this->response->success($finalData, 'response_detik_finance', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
        


        
    }

    public function detikHot()
    {
        try{
            $source = $this->scraper->getHeadline(self::detikDataSource['Hot']); 
            $finalData = $this->cache->headlineStore($source, 'detik_hot_headline');
            return $this->response->success($finalData, 'response_detik_hot', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
        


        
    }
    public function detikInet()
    {
        try{
            $source = $this->scraper->getHeadline(self::detikDataSource['Inet']); 
            $finalData = $this->cache->headlineStore($source, 'detik_inet_headline');
            return $this->response->success($finalData, 'response_detik_inet', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }

    public function detikSport()
    {
        try{
            $source = $this->scraper->getHeadline(self::detikDataSource['Sport']); 
            $finalData = $this->cache->headlineStore($source, 'detik_sport_headline');
            return $this->response->success($finalData, 'response_detik_sport', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }

    public function detikOto()
    {
        try{
            $source = $this->scraper->getHeadline(self::detikDataSource['Oto']); 
            $finalData = $this->cache->headlineStore($source, 'detik_oto_headline');
            return $this->response->success($finalData, 'response_detik_oto', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }

    public function detikTravel()
    {
        try{
            $source = $this->scraper->getHeadline(self::detikDataSource['Travel']); 
            $finalData = $this->cache->headlineStore($source, 'detik_travel_headline');
            return $this->response->success($finalData, 'response_detik_travel', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }

    public function detikFood()
    {
        try{
            $source = $this->scraper->getHeadline(self::detikDataSource['Food']); 
            $finalData = $this->cache->headlineStore($source, 'detik_food_headline');
            return $this->response->success($finalData, 'response_detik_food', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }

    public function detikHealth()
    {
        try{
            $source = $this->scraper->getHeadline(self::detikDataSource['Health']); 
            $finalData = $this->cache->headlineStore($source, 'detik_health_headline');
            return $this->response->success($finalData, 'response_detik_health', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }

    public function detikWolipop()
    {
        try{
            $source = $this->scraper->getHeadline(self::detikDataSource['Wolipop']); 
            $finalData = $this->cache->headlineStore($source, 'detik_wolipop_headline');
            return $this->response->success($finalData, 'response_detik_wolipop', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }

    public function detik20()
    {
        try{
            $source = $this->scraper->getHeadline(self::detikDataSource['20']); 
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
            $source = $this->scraper->getHeadline(self::kompasDataSource['News']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_headline');
            return $this->response->success($finalData, 'response_kompas', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }

    // End Kompas

}
