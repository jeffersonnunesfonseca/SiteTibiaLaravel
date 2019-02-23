<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Accounts;
use App\Helpers\Commons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CreateAccountController extends Controller
{
    public function index(){
        return view("create-acc");
    }

    /**
     * Controlador de criar conta
     * recebde parametros do form
     */
    public function createAcc(Request $request){
        if($request->ajax()){
            $data = array();          
            if($request->input('account-number')){
                $acc = $this->validateAccountNumber($request->input('account-number'));
                if(empty($acc)){
                    $tamanho = $this->validateField($request->input('account-number'));
                    if($tamanho)
                        $data[] = $request->input('account-number');
                    else{
                        return Commons::returnJsonValidate("size","account-number");
                    }
                }else{
                    return Commons::returnJsonValidate("exists","account-number");
                }
            }else{
                return Commons::returnJsonValidate("error","account-number");
            }

            if($request->input('password') && $request->input('password-conf') && $request->input('password-conf') == $request->input('password')){
                $tamanho = $this->validateField($request->input('password'));
                if($tamanho)
                    $data[] = $request->input('password');
                else
                    return Commons::returnJsonValidate("size","password");
            }else{
                return Commons::returnJsonValidate("error","password");
            }

            if($request->input('email')){
                $tamanho = $this->validateField($request->input('email'));
                if($tamanho)
                    $data[] = $request->input('email');
                else
                    return Commons::returnJsonValidate("size","email");
            }else{
                return Commons::returnJsonValidate("error","email");
            }

            $schema = $this->setSchema($data);
            $insert = Accounts::create($schema);
            if($insert)
                return Commons::returnJsonValidate("ok","insert");
             else
                return Commons::returnJsonValidate("error","insert");
        }
    }

    /**
     * Prepata array para insert
     * @param array $data dados do form para preparar
     */
    private function setSchema(array $data){
        $schema = array(
            "name"     =>$data[0],
            "password" =>$data[1],
            "email"    =>$data[2]
        );
        return $schema;
    }

    /**
     * valida se qtd de caracter é válido
     * @param $string valor do campo
     */
    private function validateField(string $string){
        if(strlen($string)<6){
            return false;
        }
        else
            return true;
    }

    /**
     * Verifica se acc number já existe
     * @param $accNumber
     */
    private function validateAccountNumber(string $accNumber){
        $acc = new Accounts();
        $result = $acc->getByAccountNumber($accNumber);
        return (json_decode($result));
    }
}
