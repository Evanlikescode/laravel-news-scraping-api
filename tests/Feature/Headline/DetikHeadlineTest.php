<?php

namespace Tests\Feature\Headline\DetikHeadlineTest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DetikHeadlineTest extends TestCase
{
    
    const detikBaseUrl = [
        'News' => '/headline/detik/news',
        'Finance' => '/headline/detik/finance',
        'Hot' => '/headline/detik/hot',
        'Inet' => '/headline/detik/inet',
        'Sport' => '/headline/detik/sport',
        'Oto' => '/headline/detik/oto',
        'Travel' => '/headline/detik/travel', 
        'Food' => '/headline/detik/food',
        'Health' => '/headline/detik/health', 
        'Wolipop' => '/headline/detik/wolipop', 
        '20Detik' => '/headline/detik/20',
    ];

    const resultExpected = [
        'status' => true,
        'message' => 'Resources fetched',
        'data' => array(),
    ];

    public function testDetikNewsSuccess()
    {
        $response = $this->get(self::detikBaseUrl['News']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testDetikFinanceSuccess()
    {
        $response = $this->get(self::detikBaseUrl['Finance']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    
    public function testDetikHotSuccess()
    {
        $response = $this->get(self::detikBaseUrl['Hot']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }

    public function testDetikInetSuccess()
    {
        $response = $this->get(self::detikBaseUrl['Inet']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }

    public function testDetikSportSuccess()
    {
        $response = $this->get(self::detikBaseUrl['Sport']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }

    public function testDetikOtoSuccess()
    {
        $response = $this->get(self::detikBaseUrl['Oto']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }

    public function testDetikTravelSuccess()
    {
        $response = $this->get(self::detikBaseUrl['Travel']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }

    public function testDetikFoodSuccess()
    {
        $response = $this->get(self::detikBaseUrl['Food']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }

    public function testDetikHealthSuccess()
    {
        $response = $this->get(self::detikBaseUrl['Health']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }

    public function testDetikWolipopSuccess()
    {
        $response = $this->get(self::detikBaseUrl['Wolipop']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }

    public function testDetik20DetikSuccess()
    {
        $response = $this->get(self::detikBaseUrl['20Detik']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }

}
