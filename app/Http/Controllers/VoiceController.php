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

        switch ($voice) {
            case 'Market': $redirectTo = route('displayMarket');
                break;
            case 'Weather' : $redirectTo = route('displayWeather');
                break;
            case 'Hospital' : $redirectTo = route('displayHospital');
                break;
            case 'News' : $redirectTo = route('displayNews');
                break;
            default : $redirectTo = route('home');
        }

        return redirect($redirectTo);
    }
}
