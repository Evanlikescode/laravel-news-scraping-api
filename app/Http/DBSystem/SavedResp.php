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
            if($x['Title'] != null && $x['Link'] != "#" && $x['Link'] != null){
                
                if($x['Status'] == "route"){
                    $route = substr($x["Link"], $x["Route"][0], $x["Route"][1]);
                    $route_2 = substr($x["Link"], $x['Route'][2], $x["Route"][3]);
                    if( $route == $x['HeadlineWeb'][0] || $route_2 == $x['HeadlineWeb'][1]){
                        $x["Link"] = $x['realHref'];
                    }
                }

                if($x['Title'] != "Twitter" && $x['Title'] != "Facebook" && $x['Title'] != "Instagram" && $x['Title'] != "YouTube" ){
                    array_push(
                        $newData,array(
                        "Headline" => $x['Title'],
                        "Link" => $x['Link']
                        )
                    );
                }
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