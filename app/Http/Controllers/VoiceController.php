<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class VoiceController extends Controller
{
    public function storeVoice(Request $request){
        $voice = $request->input('hiddenInput');
//        dd($voice);

//        switch ($voice) {
//            case 'Market': $redirectTo = route('displayMarket');
//                break;
//            case 'Weather' : $redirectTo = route('displayWeather');
//                break;
//            case 'Hospital' : $redirectTo = route('displayHospital');
//                break;
//            case 'News' : $redirectTo = route('displayNews');
//                break;
//            default : $redirectTo = route('home');
//        }

        switch ($voice) {
            case 'Menu utama': $redirectTo = route('home');
                break;
            case 'Belanja': $redirectTo = route('displayMarket');
                break;
            case 'Pasar': $redirectTo = route('displayMarket');
                break;
            case 'Cuaca' : $redirectTo = route('displayWeather');
                break;
            case 'Temperatur' : $redirectTo = route('displayWeather');
                break;
            case 'Rumah sakit' : $redirectTo = route('displayHospital');
                break;
            case 'Klinik' : $redirectTo = route('displayHospital');
                break;
            case 'Berita' : $redirectTo = route('displayNews');
                break;
            default : $redirectTo = route('home');
        }

        return redirect($redirectTo);
    }
}
