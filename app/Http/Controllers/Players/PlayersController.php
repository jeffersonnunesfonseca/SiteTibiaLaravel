<?php

namespace App\Http\Controllers\Players;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Players as PlayerModel;


class PlayersController extends Controller
{
    public function index(PlayerModel $players){
        $x = $this->create($players);
        print_r($x);
        die();
        $player = $players::where("id",1)->get();
        echo "<pre>";
        $player->each(function ($item, $key) {
            print_r($item);
        });
        echo "</pre>";
    }
    
    /**
     * insere player
     */
    public function create(PlayerModel $player){
        $schema = $this->setSchema();
        $insert = $player->create($schema);

        if($insert)
             return "Inserido com sucesso " . $insert->id;
         else
            return "falha ao inserir";
    }

    /**
     * Monsta array para insercao do players
     */
    private function setSchema(array $data){
        $schema = array(
            "name"       => "TESTE COM INSERT",
            "account_id" => 9691164,
            "vocation"   => "1",
            "health"     => "185",
            "healthmax"  => "185",
            "experience" => "4200",
            "lookbody" => "30",
            "lookfeet" => "50",
            "lookhead" => "20",
            "looklegs" => "40",
            "looktype" => "54",
            "mana" => "35",
            "manamax" => "35",
            "soul" => "99",
            "town_id" => "1",
            "posx" => "160",
            "posy" => "51",
            "posz" => "7",
            "cap" => "400",
            "sex" => "1",
        );
        return $schema;
    }


}
