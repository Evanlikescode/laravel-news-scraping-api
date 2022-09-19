<?php

namespace Tests\Feature\SearchTest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchTest extends TestCase
{
    
    const baseUrl = [
        'detikSearch' => '/search/detik/bola',
    ];

    const resultExpected = [
        'status' => true,
        'message' => 'Resources fetched',
        'data' => array(),
    ];

    public function testDetikSearchSuccess()
    {
        $response = $this->get(self::baseUrl['detikSearch']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
}