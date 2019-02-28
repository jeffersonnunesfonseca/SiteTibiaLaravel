<?php
namespace App\Helpers;
use Illuminate\Http\Request;

class Commons {


    /**
     * Retorna json utilizado para validar em retorno de ajax
     * @param string $status tipo do erro
     * @param string $field id do campo html
     */
    public static function returnJsonValidate(string $status, string $field){
        return json_encode(array("status"=>$status,"field"=>$field));
    }

    public static function getSession(Request $request){
        $dadosSessao = array();
        $id         = ($request->session()->has("id"))?$request->session()->get("id"):null;
        $name       = ($request->session()->has("name"))?$request->session()->get("name"):null;
        $password   = ($request->session()->has("password"))?$request->session()->get("password"):null;

        $dadosSessao = array(
                            "id"=>$id,
                            "name"=>$name,
                            "password"=>$password
                        );
        
        return $dadosSessao;
    }
    public static function deleteSession(Request $request){
        return $request->session()->flush();
    }
}