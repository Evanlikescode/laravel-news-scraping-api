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

    
}
