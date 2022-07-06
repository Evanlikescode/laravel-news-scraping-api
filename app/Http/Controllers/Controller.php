<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Scraper\NewsScraper;
use App\Http\DBSystem\SavedResp;
use App\Http\Responses\ApiResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->scraper = new NewsScraper();
        $this->cache = new SavedResp();
        $this->response = new ApiResponse();
    }
}
