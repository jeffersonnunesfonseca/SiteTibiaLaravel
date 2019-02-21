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

}