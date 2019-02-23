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
}
