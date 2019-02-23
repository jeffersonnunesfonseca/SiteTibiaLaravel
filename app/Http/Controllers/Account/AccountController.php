<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Accounts;
use App\Models\Login;
use App\Helpers\Commons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AccountController extends Controller{

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function index(){
        return view("create-acc");
    }

    /**
     * Controlador de criar conta
     * recebde parametros do form
     */
    public function createAcc(){
        if($this->request->ajax()){
            $data = array();          
            if($this->request->input('account-number')){
                $acc = $this->validateAccountNumber($this->request->input('account-number'));
                if(empty($acc)){
                    $tamanho = $this->validateField($this->request->input('account-number'));
                    if($tamanho)
                        $data[] = $this->request->input('account-number');
                    else{
                        return Commons::returnJsonValidate("size","account-number");
                    }
                }else{
                    return Commons::returnJsonValidate("exists","account-number");
                }
            }else{
                return Commons::returnJsonValidate("error","account-number");
            }

            if($this->request->input('password') && $this->request->input('password-conf') && $this->request->input('password-conf') == $this->request->input('password')){
                $tamanho = $this->validateField($this->request->input('password'));
                if($tamanho)
                    $data[] = $this->request->input('password');
                else
                    return Commons::returnJsonValidate("size","password");
            }else{
                return Commons::returnJsonValidate("error","password");
            }

            if($this->request->input('email')){
                $tamanho = $this->validateField($this->request->input('email'));
                if($tamanho)
                    $data[] = $this->request->input('email');
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

    public function loginAcc(){
        if($this->request->ajax()){      
            if($this->request->input('account-number') && $this->request->input('password')){
                $acc = new Accounts();
                $result = $acc->getByAccountNumberPassword($this->request->input('account-number'),$this->request->input('password'));
                $this->createSession($result->id,$result->name,$result->password);

                $x = $this->getSession();
                echo "<pre>";
                print_r($x);
                $this->deleteSession();
                $x = $this->getSession();
                echo "abaio";
                print_r($x);

                dd();   
            }
        }
    }

    public function logoutAcc(){
        
    }

    private function createSession(int $id, string $name, string $password){
        $this->request->session()->put(["id"=>$id]);
        $this->request->session()->put(["name"=>$name]);
        $this->request->session()->put(["password"=>$password]);
    }
    private function deleteSession(){
        return $this->request->session()->flush();
    }

    private function getSession(){
        $dadosSessao = array();
        $id         = ($this->request->session()->has("id"))?$this->request->session()->get("id"):null;
        $name       = ($this->request->session()->has("name"))?$this->request->session()->get("name"):null;
        $password   = ($this->request->session()->has("password"))?$this->request->session()->get("password"):null;

        $dadosSessao = array(
                            "id"=>$id,
                            "name"=>$name,
                            "password"=>$password
                        );
        
        return $dadosSessao;
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
