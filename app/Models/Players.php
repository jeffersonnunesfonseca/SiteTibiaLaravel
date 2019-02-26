<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    // Nome da tabela existente
    protected $table = 'players';   
    protected $guarded = [];
    public $timestamps = false;
    /**
     * Busca onlines ou off
     */
    public function getOnline(int $status=0){
        return $this::where("online",$status)->get();
    }

    /**
     * Atuliza tabela com base no id do usuario
     */    
    public function updateById(int $id, array $data){
        return $this::where("id",$id)->update($data);
    }
    public function deletedPlayer(int $id,string $playerName, array $data){
        return $this::where([["account_id","=",$id],["name","=",$playerName]])->update($data);
    }

    public function getByName($name){
        return $this::where("name",$name)->get();
    }

}