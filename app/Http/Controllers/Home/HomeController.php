<?php

namespace App\Http\Controllers\Home;
use App\Helpers\Commons;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct(Request $request){
        $this->request = $request;
    }

    public function index(){
        $session = Commons::getSession($this->request);
        return view("index")->with(compact('session'));
        
    }
}
