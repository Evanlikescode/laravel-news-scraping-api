<?php

namespace Tests\Feature\KompasHeadlineTest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class KompasHeadlineTest extends TestCase
{
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
        'Foto' => '/api/headline/kompas/foto',
    ];

    const resultExpected = [
        'status' => true,
        'message' => 'Resources fetched',
        'data' => array(),
    ];

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
