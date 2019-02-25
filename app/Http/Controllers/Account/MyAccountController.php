<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Accounts;
use App\Helpers\Commons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MyaccountController extends Controller{

    public function __construct(Request $request,Accounts $account){
        $this->request = $request;
        $this->account = $account;
    }

    public function index(){
        $session = Commons::getSession($this->request);
        if(!empty($session)){
            ini_set('memory_limit', '2048M');
            // dd($session);
            echo "<pre>";
            $data = $this->account->playersById($session["id"]);
            print_r($data);
            dd();
            // $data = json_decode($this->account->getByAccountNumber($session["name"]),true);
            return view('myaccount')->with(compact('data'));
        }
        else{
            dd("erro");
        }
    }

    
}
