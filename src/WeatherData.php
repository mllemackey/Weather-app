<?php

namespace Weather;

use GuzzleHttp\Client;

class WeatherData
{
    public function __construct(
        private string $apiKey,
        private string $baseUrl
    ) {
    }

    private function getCityWeatherData(string $city): array
    {
        $client = new Client();
        $response = $client->request('GET', $this->baseUrl . 'weather', [
            'query' => ['q' => $city, 'units' => 'metric', 'appid' => $this->apiKey]
        ]);
        return json_decode($response->getBody(), true);
    }

    public function getCurrentWeatherAndTemperatureByCityName(string $city): string
    {
        $response = $this->getCityWeatherData($city);

        $weatherConditions = ucfirst($response['weather'][0]['description']);
        $currentTemperature = intval($response['main']['temp']) . ' degrees Celsius';
        return $weatherConditions . ', ' . $currentTemperature . PHP_EOL;
    }

}
