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
        ],
        'Tren' => [
            'webSource' => 'https://www.kompas.com/tren',
            'headlineSource' => '.trenLatest__title > a'
        ],
        'Health' => [
            'webSource' => 'https://health.kompas.com/',
            'headlineSource' => '.trenLatest__title > a'
        ],
        'Food' => [
            'webSource' => 'https://www.kompas.com/food',
            'headlineSource' => '.article__title > a'
        ],
        'Edukasi' => [
            'webSource' => 'https://edukasi.kompas.com',
            'headlineSource' => '.article__title > a'
        ],
        'Parapuan' => [
            'webSource' => 'https://www.kompas.com/parapuan',
            'headlineSource' => '.parapuan__title > a'
        ],
        'Money' => [
            'webSource' => 'https://money.kompas.com',
            'headlineSource' => '.article__title > a'
        ],
        'UMKM' => [
            'webSource' => 'https://umkm.kompas.com',
            'headlineSource' => '.food__title > a'
        ],
        'Tekno' => [
            'webSource' => 'https://tekno.kompas.com',
            'headlineSource' => '.article__title > a'
        ],
        'Lifestyle' => [
            'webSource' => 'https://lifestyle.kompas.com',
            'headlineSource' => '.article__title > a'
        ],
        'Homey' => [
            'webSource' => 'https://www.kompas.com/homey',
            'headlineSource' => '.homey__title > a'
        ],
        'Properti' => [
            'webSource' => 'https://properti.kompas.com',
            'headlineSource' => '.article__title > a'
        ],
        'Bola' => [
            'webSource' => 'https://bola.kompas.com',
            'headlineSource' => '.article__title > a'
        ],
        'Otomotif' => [
            'webSource' => 'https://otomotif.kompas.com',
            'headlineSource' => '.article__title > a'
        ],
        'Sains' => [
            'webSource' => 'https://www.kompas.com/sains',
            'headlineSource' => '.sainsLatest__title > a'
        ],
        'Hype' => [
            'webSource' => 'https://www.kompas.com/hype',
            'headlineSource' => '.hype__title > a'
        ],
        'Kolom' => [
            'webSource' => 'https://kolom.kompas.com',
            'headlineSource' => '.article__title > a'
        ],
        'Foto' => [
            'webSource' => 'https://foto.kompas.com',
            'headlineSource' => '.article__title > a'
        ],
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
    public function kompasNews()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['News']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_news_headline');
            return $this->response->success($finalData, 'response_kompas_news', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasTren()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Tren']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_tren_headline');
            return $this->response->success($finalData, 'response_kompas_tren', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasHealth()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Health']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_health_headline');
            return $this->response->success($finalData, 'response_kompas_health', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasFood()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Food']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_food_headline');
            return $this->response->success($finalData, 'response_kompas_food', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasEdukasi()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Edukasi']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_edukasi_headline');
            return $this->response->success($finalData, 'response_kompas_edukasi', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasParapuan()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Parapuan']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_parapuan_headline');
            return $this->response->success($finalData, 'response_kompas_parapuan', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasMoney()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Money']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_money_headline');
            return $this->response->success($finalData, 'response_kompas_money', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasUMKM()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['UMKM']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_umkm_headline');
            return $this->response->success($finalData, 'response_kompas_umkm', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasTekno()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Tekno']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_tekno_headline');
            return $this->response->success($finalData, 'response_kompas_tekno', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasLifestyle()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Lifestyle']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_lifestyle_headline');
            return $this->response->success($finalData, 'response_kompas_lifestyle', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasHomey()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Homey']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_homey_headline');
            return $this->response->success($finalData, 'response_kompas_homey', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasProperti()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Properti']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_properti_headline');
            return $this->response->success($finalData, 'response_kompas_properti', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasBola()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Bola']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_bola_headline');
            return $this->response->success($finalData, 'response_kompas_bola', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasOtomotif()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Otomotif']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_otomotif_headline');
            return $this->response->success($finalData, 'response_kompas_otomotif', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasSains()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Sains']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_sains_headline');
            return $this->response->success($finalData, 'response_kompas_sains', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasHype()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Hype']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_hype_headline');
            return $this->response->success($finalData, 'response_kompas_hype', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasKolom()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Kolom']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_headline_kolom');
            return $this->response->success($finalData, 'response_kompas_kolom', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }
    public function kompasFoto()
    {
        try{
            $source = $this->scraper->getHeadline(self::kompasDataSource['Foto']); 
            $finalData = $this->cache->headlineStore($source, 'kompas_foto_headline');
            return $this->response->success($finalData, 'response_kompas_foto', 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }   
    }

    // End Kompas

}
