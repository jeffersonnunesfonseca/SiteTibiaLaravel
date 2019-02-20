<?php

namespace App\Http\Controllers\Players;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Players as PlayerModel;

class PlayersController extends Controller
{
    public function index(PlayerModel $players){

        $player = $players::where('online',1)->get();
        echo "<pre>";
        $player->each(function ($item, $key) {
            print_r($item->name);
        });
        echo "</pre>";


    }

}
