<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class playerDataController extends Controller
{
    public function playerData ($id)
    {
        $Request=Http::get("https://apiv3.apifootball.com/?action=get_players&player_name=$id&APIkey=22ef7e78e43ddf74ccf66b7104a60715bf7a0bc5b1ab8da5b6e63a673cb7a408");
        $RequestData = $Request->json();
        return view ('dataPlayer', ["playerData" => $RequestData[0]]);
        
    }
}
