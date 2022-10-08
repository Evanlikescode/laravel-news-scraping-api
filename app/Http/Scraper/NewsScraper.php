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
                // dd($res);

                $response = [
                    "Title" => $node->text(),
                    "Link" => "{$sourceData['headlineWeb'][0]}{$node->attr('href')}",
                    "Status" => "route",
                    "HeadlineWeb" => $sourceData['headlineWeb'],
                    "Route" => $sourceData["route"],
                    "realHref" => $node->attr('href'),
                ];
            }else{
                $response = [
                    "Title" => $node->text(),
                    "Link" => $node->attr('href'),
                    "Status" => "non-route",
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