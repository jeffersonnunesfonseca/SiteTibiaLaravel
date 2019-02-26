<?php

namespace App\Http\Controllers\Players;

use Illuminate\Http\Request;
use App\Helpers\Commons;
use App\Http\Controllers\Controller;
use App\Models\Players as PlayerModel;


class PlayersController extends Controller
{
    public function __construct(PlayerModel $players,Request $request){
        $this->players = $players;
        $this->request = $request;
    }
    public function index(){
        return redirect('/');
    }

    public function createCharacter(){
        if($this->request->session()->get("id"))
            return view("create-player");
       else
        return redirect('/');
    }
    public function formDeleted(){
        if($this->request->session()->get("id"))
            return view("delete-player");
        else
            return redirect('/');
    }
    public function deleteCharacter(){
        if($this->request->ajax()){    
            $name      =  ($this->request->input('character-name'))?ucwords($this->request->input('character-name')):null;        
            if($this->request->session()->get("id")!=null && $this->validateNamePlayer($name)){
                $array = array("deleted"=>1);
                $deleted = $this->players->deletedPlayer($this->request->session()->get("id"),$name,$array);
                if($deleted ==1)
                    return Commons::returnJsonValidate("ok","deleted");
                else{
                    return Commons::returnJsonValidate("size-player","character-name");
                }
            }
            else
                return Commons::returnJsonValidate("size-player","character-name");
        }
        else
            return redirect('/');
               
    }
    
    /**
     * insere player
     */
    public function create(){
        if($this->request->ajax()){
            $data = array();
            $accountId =  ($this->request->session()->get("id"))?$this->request->session()->get("id"):null;
            if($accountId){
                $data["id"] = (int)$accountId;

                $name      =  ($this->request->input('character-name'))?ucwords($this->request->input('character-name')):null;
                $gender    =  ($this->request->input('gender'))?$this->request->input('gender'):null;
                $vocation  =  ($this->request->input('vocation'))?$this->request->input('vocation'):null;
                
                if($name && $this->validateField($name)){
                    $data["nome"] = $name;
                }
                else{
                    return Commons::returnJsonValidate("size-player","character-name");
                }

                if($this->validateNamePlayer($name)){
                    return Commons::returnJsonValidate("exists","character-name");
                }

                if($gender)
                    $data["gender"] = ($gender == "female")?0:1;  
                
                if($vocation)
                    $data["vocation"] = $vocation;

                $schema = $this->setSchema($data);
                $insert = $this->players->create($schema);

                if($insert)
                    return Commons::returnJsonValidate("ok","insert");
                else
                    return Commons::returnJsonValidate("error","insert");
            }
        }else{
            return redirect('/');
        }
    }

    /**
     * Monsta array para insercao do players
     */
    private function setSchema(array $data){
        $schema = array(
            "name"       =>$data["nome"],
            "account_id" => $data["id"],
            "vocation"   => $data["vocation"],
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
            "sex" => $data["gender"],
        );
        return $schema;
    }

    private function validateField(string $string){
        if(strlen($string)<4 || strlen($string)>15){
            return false;
        }
        else
            return true;
    }

    private function validateNamePlayer($name){
        $name = json_decode($this->players->getByName($name));
        if(!empty($name))
            return true;
    }
}
