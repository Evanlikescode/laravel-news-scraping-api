<?php

namespace Tests\Feature\Headline\BBCHeadlineTest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BBCHeadlineTest extends TestCase
{
    
    const bbcBaseUrl = [
        'General' => '/headline/bbc/general',
        'News' => '/headline/bbc/news',
        'Sport' => '/headline/bbc/sport',
        'Worklife' => '/headline/bbc/worklife',
        'Travel' => '/headline/bbc/travel',
        'Future' => '/headline/bbc/future',
        'Culture' => '/headline/bbc/culture',
    ];

    const resultExpected = [
        'status' => true,
        'message' => 'Resources fetched',
        'data' => array(),
    ];

    public function testBBCGeneralSuccess()
    {
        $response = $this->get(self::bbcBaseUrl['General']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testBBCNewsSuccess()
    {
        $response = $this->get(self::bbcBaseUrl['News']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    
    public function testBBCSportSuccess()
    {
        $response = $this->get(self::bbcBaseUrl['Sport']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }

    public function testBBCWorklifeSuccess()
    {
        $response = $this->get(self::bbcBaseUrl['Worklife']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }

    public function testBBCTravelSuccess()
    {
        $response = $this->get(self::bbcBaseUrl['Travel']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }

    public function testBBCFutureSuccess()
    {
        $response = $this->get(self::bbcBaseUrl['Future']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }

    public function testBBCCultureSuccess()
    {
        $response = $this->get(self::bbcBaseUrl['Culture']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }

}
