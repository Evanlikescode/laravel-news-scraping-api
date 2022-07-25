<?php
namespace App\Http\DBSystem;
use Illuminate\Support\Facades\Redis;

class SavedResp{

    public function headlineStore($data, $cacheKey){
        if($newData = Redis::get("laravel_database_$cacheKey")){
            return json_decode($newData);
        }
        $newData = [];
        foreach($data as $x){
            if($x['Link'] != "#" && $x['Link'] != null){
                array_push(
                    $newData,array(
                    "Headline" => $x['Title'],
                    "Link" => $x['Link']
                    )
                );
            }
            
        }
        Redis::set($cacheKey,json_encode($newData), 'EX', 120);
        return $newData;
        

    }

    public function searchStore($data, $cacheKey){
        if($newData = Redis::get("laravel_database_$cacheKey")){
            return json_decode($newData);
        }
        $newData = [];
        foreach($data as $x){
            if($x['Link'] != "#" && $x['Link'] != null){
                array_push(
                    $newData,array(
                    "Title" => $x['Title'],
                    "Date_Published" => $x['Date_Published'],
                    "Link" => $x['Link'],
                    )
                );
            }
            
        }
        Redis::set($cacheKey,json_encode($newData), 'EX', 120);
        return $newData;
        

    }

}