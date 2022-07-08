<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    public function detik($query)
    {
        try{
            $dataSource = [
                'webSource' => "https://www.detik.com/search/searchall?query=$query&siteid=2",
                'searchSource' => "article"
            ];
            $source = $this->scraper->getSearch($dataSource); 
            $finalData = $this->cache->searchStore($source, "detik_search_$query");
            return $this->response->success($source, "response_detik_$query", 'fetch');
        }catch(\Exception $e){
            return $this->response->failed($e);
        }
        


        
    }

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
}
