<?php
namespace App\Helpers;

class Commons {
    /**
     * Retorna json utilizado para validar em retorno de ajax
     * @param string $status tipo do erro
     * @param string $field id do campo html
     */
    public static function returnJsonValidate(string $status, string $field){
        return json_encode(array("status"=>$status,"field"=>$field));
    }
}