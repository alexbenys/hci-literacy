<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',
    [
        'as' => 'home',
        'uses' => 'PagesController@index'
    ]);


Route::get('test', function () {
    return view('pages.test');
});

Route::get('news', [
    'as' => 'displayNews',
    'uses' => 'PagesController@getNews'
]);


Route::post('/', [
    'as' => 'storeWeather',
    'uses' => 'WeatherController@storeWeather'
]);

Route::get('weather', [
        'as' => 'displayWeather',
        'uses' => 'WeatherController@index'
]);

Route::get('market', [
    'as' => 'displayMarket',
    'uses' => 'PagesController@getMarket'
]);

Route::get('garlic', [
    'as' => 'displayGarlic',
    'uses' => 'PagesController@getGarlic'
]);

Route::get('source-log', [
    'as' => 'displaySourceLog',
    'uses' => 'PagesController@getSourceLog'
]);



