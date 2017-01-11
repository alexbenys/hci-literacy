<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function getNews()
    {
        return view('mockup-news.government-news');
    }

    public function getMarket() {
        return view('pages.market');
    }

    public function getGarlic()
    {
        return view('market.garlic');
    }

    public function getShalots()
    {
        return view('market.shalots');
    }

    public function getRedChilli()
    {
        return view('market.redchilli');
    }

    public function getTomato()
    {
        return view('market.tomato');
    }

    public function getSourceLog()
    {
        return view('pages.sourcelog');
    }

    public function getHospital()
    {
        return view('pages.hospital');
    }

    public function getVoice()
    {
        return view('pages.voice');
    }
}
