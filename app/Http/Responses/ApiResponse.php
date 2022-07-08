<?php

namespace App\Http\Responses;
use Illuminate\Support\Facades\Redis;

class ApiResponse {

    // Success
    
    public function __construct(){
        $this->trueResponse = [
            "fetch" => "Resources fetched",
            "update" => "Resources updated",
            "create" => "Resources created",
            "delete" => "Resources deleted"
        ];
        $this->falseResponse = [
            "fetch" => "Resources failed to fetched",
            "update" => "Resources failed to updated",
            "create" => "Resources failed to created",
            "delete" => "Resources failed to deleted"
        ];
    }

    public function success($data, $cacheKey, $method, $statusCode = 200){
        if(!empty($data)){
            if($responses = Redis::get("laravel_database_$cacheKey")){
                return json_decode($responses);
            }
            $responses = response()->json(
                [
                    'status' => true,
                    'message' => $this->trueResponse[$method],
                    'data' => $data
                ], $statusCode
            ) ;
            Redis::set($cacheKey,json_encode($responses), 'EX', 120);
            return $responses;
    
        }
        return response()->json(
            [
                'status' => false,
                'message' => $this->falseResponse[$method],
                'data' => $data
            ], $statusCode
        ) ;
    }
        
    
    
    public function failed($error, $statusCode = 500)
    {
        return response()->json(
            [
                'status'=> false,
                'message' => $error->getMessage(),
                'error' => $error->getTrace(),

            ], $statusCode
        );
    }



}