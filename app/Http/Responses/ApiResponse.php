<?php

namespace App\Http\Responses;
use Illuminate\Support\Facades\Redis;

class ApiResponse {

    // Success

    public function success($data, $cacheKey, $statusCode = 200){
        if($responses = Redis::get("laravel_database_$cacheKey")){
            return json_decode($responses);
        }
        $responses = response()->json(
            [
                'status' => true,
                'message' => 'Success fetch headline',
                'data' => $data
            ], $statusCode
        ) ;
        Redis::set($cacheKey,json_encode($responses), 'EX', 60);
        return $responses;

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