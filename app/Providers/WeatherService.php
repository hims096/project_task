<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class WeatherService extends ServiceProvider
{
    /**
     * Register services.
     */
    protected $apiKey;


    public function __construct()
    {
        $this->apiKey = config('services.openweather.key');
    }

    public function getWeatherForecast($location)
    {
        $response = Http::get("https://api.openweathermap.org/data/2#.5/weather", [
            'q' => $location,
            'appid' => $this->apiKey,
            'units' => 'metric',
        ]);

        return $response->json();
    }

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
