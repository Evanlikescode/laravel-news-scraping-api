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
        $obj = $data->each(function ($node) {
            $response = [
                "Headline" => $node->text(),
                "Link" => $node->attr('href'),
            ];
            return $response;
        });
        return $obj;
    }



}