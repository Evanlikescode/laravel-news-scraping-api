<?php

namespace App\Http\Controllers\Api\Headline;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BBCHeadlineController extends Controller
{

    const bbcDataSource = [
        'General' => [
            'webSource' => "https://bbc.com/",
            'headlineSource' => ".block-link__overlay-link",
            'headlineWeb' => "https://bbc.com"
        ],
        'News' => [
            'webSource' => "https://bbc.com/news",
            'headlineSource' => ".gs-c-promo-heading",
            'headlineWeb' => "https://bbc.com"
        ],
        'Sport' => [
            'webSource' => "https://bbc.com/sport",
            'headlineSource' => ".ssrcss-1j8184x-PromoLink",
            'headlineWeb' => "https://bbc.com"
        ],
        'Worklife' => [
            'webSource' => "https://bbc.com/worklife",
            'headlineSource' => ".rectangle-story-item__title",
            'headlineWeb' => "https://bbc.com"
        ],
        'Travel' => [
            'webSource' => "https://bbc.com/travel",
            'headlineSource' => ".rectangle-story-item__title",
            'headlineWeb' => "https://bbc.com"
        ],
        'Future' => [
            'webSource' => "https://bbc.com/future",
            'headlineSource' => ".rectangle-story-item__title",
            'headlineWeb' => "https://bbc.com"
        ],
        'Culture' => [
            'webSource' => "https://bbc.com/culture",
            'headlineSource' => ".rectangle-story-item__title",
            'headlineWeb' => "https://bbc.com"
        ],
        
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bbcGeneral()
    {
        try{
            $source = $this->scraper->getHeadline(self::bbcDataSource['General']); 
            $finalData = $this->cache->headlineStore($source, 'bbc_general_headline');
            return $this->response->success($finalData, 'response_bbc_general', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }
           
    }
    public function bbcNews()
    {
        try{
            $source = $this->scraper->getHeadline(self::bbcDataSource['News']); 
            $finalData = $this->cache->headlineStore($source, 'bbc_news_headline');
            return $this->response->success($finalData, 'response_bbc_news', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }
           
    }
    public function bbcSport()
    {
        try{
            $source = $this->scraper->getHeadline(self::bbcDataSource['Sport']); 
            $finalData = $this->cache->headlineStore($source, 'bbc_sport_headline');
            return $this->response->success($finalData, 'response_bbc_sport', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }
           
    }
    public function bbcWorklife()
    {
        try{
            $source = $this->scraper->getHeadline(self::bbcDataSource['Worklife']); 
            $finalData = $this->cache->headlineStore($source, 'bbc_worklife_headline');
            return $this->response->success($finalData, 'response_bbc_worklife', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }
           
    }
    public function bbcTravel()
    {
        try{
            $source = $this->scraper->getHeadline(self::bbcDataSource['Travel']); 
            $finalData = $this->cache->headlineStore($source, 'bbc_travel_headline');
            return $this->response->success($finalData, 'response_bbc_travel', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }
           
    }
    public function bbcFuture()
    {
        try{
            $source = $this->scraper->getHeadline(self::bbcDataSource['Future']); 
            $finalData = $this->cache->headlineStore($source, 'bbc_future_headline');
            return $this->response->success($finalData, 'response_bbc_future', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }
           
    }
    public function bbcCulture()
    {
        try{
            $source = $this->scraper->getHeadline(self::bbcDataSource['Culture']); 
            $finalData = $this->cache->headlineStore($source, 'bbc_culture_headline');
            return $this->response->success($finalData, 'response_bbc_culture', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }
           
    }


}
