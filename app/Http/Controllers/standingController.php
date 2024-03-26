<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class standingController extends Controller
{
    public function standing ()
    {
        $Request=Http::get('https://apiv3.apifootball.com/?action=get_standings&league_id=302&APIkey=22ef7e78e43ddf74ccf66b7104a60715bf7a0bc5b1ab8da5b6e63a673cb7a408');
        $Rdata=$Request->json();
        return view ('standing' , ['Rdata'=>$Rdata]);


    }

}
