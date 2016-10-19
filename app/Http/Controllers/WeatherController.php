<?php

/**
 *
 */

namespace App\Http\Controllers;

use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;


use App\Http\Requests;
use Nwidart\ForecastPhp\Forecast;

class WeatherController extends Controller
{
    public function storeWeather() {
        $data = Input::get();
        $lat = $data['latitude'];
        $lon = $data['longitude'];

        $forecast = $this->getWeather($lat, $lon);

        Session::put('forecast', $forecast);


        return redirect()->route('displayWeather');
    }



    public function getWeather($lat, $lon) {

        $forecast = new Forecast(env('FORECAST_API'));
        $forecast = $forecast->setOptions(['units' => 'si'])->get($lat, $lon);

        return $forecast;
    }

    public function index() {
        return view('pages.weather');
    }


}
