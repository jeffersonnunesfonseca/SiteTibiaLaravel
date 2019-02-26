<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $table = 'accounts';   
    protected $guarded = [];
    public $timestamps = false;

    public function getByAccountNumber(string $acc){
        return $this::where("name",$acc)->get();
    }

    public function getByAccountNumberPassword(string $acc,string $password){
        return $this::where([["name","=",$acc],["password","=",$password]])->first();
    }    
    
    public function playersById($id){
        return $this::leftJoin('players','accounts.id','players.account_id')
                        ->leftJoin('vocations','vocations.id','players.vocation')
                        ->select("accounts.name as accName","players.*","vocations.*")
                        ->where("accounts.id",$id)
                        ->where("players.deleted",0)
                        ->get();
    }
}
