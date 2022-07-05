<?php
namespace App\Http\DBSystem;

class SavedResp{

    public function store($data){
        $newData = [];
        foreach($data as $x){
            if($x['Link'] != "#" && $x['Link'] != null){
                array_push(
                    $newData,array(
                    "Headline" => $x['Headline'],
                    "Link" => $x['Link']
                    )
                );
            }
            
        }
        return $newData;
        

    }

}