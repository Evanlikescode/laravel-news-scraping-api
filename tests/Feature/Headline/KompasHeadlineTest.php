<?php

namespace Tests\Feature\KompasHeadlineTest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class KompasHeadlineTest extends TestCase
{
    const kompasBaseUrl = [
        'News' => '/headline/kompas/news',
        'Tren' => '/headline/kompas/tren',
        'Health' => '/headline/kompas/health',
        'Food' => '/headline/kompas/food' ,
        'Edukasi' => '/headline/kompas/edukasi',
        'Parapuan' => '/headline/kompas/parapuan',
        'Money' => '/headline/kompas/money',
        'UMKM' => '/headline/kompas/umkm',
        'Tekno' => '/headline/kompas/tekno',
        'Lifestyle' => '/headline/kompas/lifestyle',
        'Homey' => '/headline/kompas/homey',
        'Properti' => '/headline/kompas/properti',
        'Bola' => '/headline/kompas/bola',
        'Otomotif' => '/headline/kompas/otomotif',
        'Sains' => '/headline/kompas/sains',
        'Hype' => '/headline/kompas/hype',
        'Kolom' => '/headline/kompas/kolom',
        'Foto' => '/headline/kompas/foto',
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
