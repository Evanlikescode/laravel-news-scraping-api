<?php

namespace Tests\Feature\HeadlineTest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HeadlineTest extends TestCase
{
    
    const detikBaseUrl = [
        'News' => '/api/headline/detik/news',
        'Finance' => '/api/headline/detik/finance',
        'Hot' => '/api/headline/detik/hot',
        'Inet' => '/api/headline/detik/inet',
        'Sport' => '/api/headline/detik/sport',
        'Oto' => '/api/headline/detik/oto',
        'Travel' => '/api/headline/detik/travel', 
        'Food' => '/api/headline/detik/food',
        'Health' => '/api/headline/detik/health', 
        'Wolipop' => '/api/headline/detik/wolipop', 
        '20Detik' => '/api/headline/detik/20',
    ];

    const kompasBaseUrl = [
        'News' => '/api/headline/kompas/news',
        'Tren' => '/api/headline/kompas/tren',
        'Health' => '/api/headline/kompas/health',
        'Food' => '/api/headline/kompas/food' ,
        'Edukasi' => '/api/headline/kompas/edukasi',
        'Parapuan' => '/api/headline/kompas/parapuan',
        'Money' => '/api/headline/kompas/money',
        'UMKM' => '/api/headline/kompas/umkm',
        'Tekno' => '/api/headline/kompas/tekno',
        'Lifestyle' => '/api/headline/kompas/lifestyle',
        'Homey' => '/api/headline/kompas/homey',
        'Properti' => '/api/headline/kompas/properti',
        'Bola' => '/api/headline/kompas/bola',
        'Otomotif' => '/api/headline/kompas/otomotif',
        'Sains' => '/api/headline/kompas/sains',
        'Hype' => '/api/headline/kompas/hype',
        'Kolom' => '/api/headline/kompas/kolom',
        'JEO' => '/api/headline/kompas/jeo',
        'Foto' => '/api/headline/kompas/foto',
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
    
    public function testKompasNewsSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['News']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasTrenSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Tren']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasHealthSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Health']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasFoodSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Food']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasEdukasiSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Edukasi']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasParapuanSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Parapuan']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasMoneySuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Money']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasUMKMSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['UMKM']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasTeknoSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Tekno']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasLifestyleSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Lifestyle']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasHomeySuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Homey']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasPropertiSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Properti']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasBolaSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Bola']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasOtomotifSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Otomotif']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasSainsSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Sains']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasHypeSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Hype']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasKolomSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Kolom']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }
    public function testKompasFotoSuccess()
    {
        $response = $this->get(self::kompasBaseUrl['Foto']);
        $response->assertStatus(200)->assertJson(self::resultExpected);
    }



}
