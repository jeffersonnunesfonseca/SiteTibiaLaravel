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
}
