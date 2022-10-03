<?php
namespace App\Http\Scraper;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class NewsScraper{

    public function __construct(){
        $this->client = new Client(HttpClient::create(['timeout' => 120]));
    }

    public function getHeadline($sourceData){
        $crawler = $this->client->request('GET', $sourceData['webSource']);
        $data = $crawler->filter($sourceData['headlineSource']);
        $obj = $data->each(function ($node) use ($sourceData) {
            if(count($sourceData) > 2){
                
                $response = [
                    "Title" => $node->text(),
                    "Link" => "{$sourceData['headlineWeb']}{$node->attr('href')}",
                ];
                $route = substr($response["Link"], $sourceData["routeFirst_1"], $sourceData["routeFirst_2"]);
                $route_2 = substr($response["Link"], $sourceData['routeSecond_1'], $sourceData["routeSecond_2"]);
                if( $route == $sourceData['headlineWeb'] || $route_2 == $sourceData['headlineWeb_2']){
                    $response["Link"] = $node->attr('href');
                }
            }else{
                $response = [
                    "Title" => $node->text(),
                    "Link" => $node->attr('href'),
                ];
            }
          
            return $response;
        });
        return $obj;  
    }

    public function getSearch($sourceData){
        $crawler = $this->client->request('GET', $sourceData['webSource']);
        $data = $crawler->filter($sourceData['searchSource']);
        $obj = $data->each(function ($node) {
            $response = [
                "Title" => $node->filter('h2')->text(),
                "Date_Published" => $node->filter('.date')->text(),
                "Link" => $node->filter('a')->attr('href'),
            ];
            return $response;
        });
        return $obj; 
    }



}