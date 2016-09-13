<?php

/**
 *
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Nwidart\ForecastPhp\Forecast;

class WeatherController extends Controller
{
    public function getWeather() {
        $forecast = new Forecast(env('FORECAST_API'));
        $forecast = $forecast->get('40.7324296', '-73.9977264');
        return $forecast;
    }

    public function index() {
        $currentWeather = $this->getWeather();
        dd($currentWeather);
        return view('pages.weather');
    }


}
