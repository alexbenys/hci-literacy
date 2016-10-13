<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function getMarket() {
        return view('pages.market');
    }

    public function getGarlic()
    {
        return view('market.garlic');
    }
}
