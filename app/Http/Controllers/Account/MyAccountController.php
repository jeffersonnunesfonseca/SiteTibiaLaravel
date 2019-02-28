<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Accounts;
use App\Models\Vocations;
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
        if(!empty($session) && $session["id"]!=null){
            ini_set('memory_limit', '2048M');
            $data = $this->account->playersById($session["id"]);

            return view('myaccount')->with(compact('data'));
        }
        else{
            return redirect('/');
        }
    }

    public function vocations(){
        $vocations = new Vocations();
        $list = $vocations->all();
        return $list;
    }
}
