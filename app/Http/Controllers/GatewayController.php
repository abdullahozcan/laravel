<?php

namespace App\Http\Controllers;

use App\Libraries\GatewayLibrary;
use Illuminate\Http\Request;

class GatewayController extends Controller
{
    private $gatewayLibrary;
    function __construct(GatewayLibrary $gatewayLibrary)
    {
        $this->gatewayLibrary = $gatewayLibrary;
    }

    //
    public function list($module){
        $this->gatewayLibrary->setModule($module);
        return response()->json($this->gatewayLibrary->getList());
    }

    public function store(Request $request){

    }
}
