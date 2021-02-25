<?php

namespace Tests\Weather;

use GuzzleHttp\Exception\ClientException;
use PHPUnit\Framework\TestCase;
use Weather\WeatherData;

class WeatherDataTest extends TestCase
{
    private WeatherData $weather;

    public function setUp(): void
    {
        parent::setUp();
        $config = require __DIR__ . '/../config/config.php';
        $this->weather = new WeatherData($config['api_key'], $config['base_url']);
    }

    public function testIfInvalidCityIsThrowingAnException(): void
    {
        $this->expectException(ClientException::class);
        $this->expectExceptionCode("404");

        $this->weather->getCurrentWeatherAndTemperatureByCityName('Berlinn');
    }

    public function testValidCityReturnsValidResponse(): void
    {
        $response = $this->weather->getCurrentWeatherAndTemperatureByCityName('Berlin');
        $this->assertStringContainsString('Celsius', $response);
    }
}