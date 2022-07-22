<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        try{
            $dataSource = [
                'getHeadline' => '/api/headline/{detik or kompas}',
                'searchNews' => '/api/search/{detik or kompas}/{keyword}',
            ];
            return $this->response->success($dataSource, 'landing_page', 'fetch');

        }catch(\Exception $e){
            return $this->response->failed($e);
        }
    }
        
}
