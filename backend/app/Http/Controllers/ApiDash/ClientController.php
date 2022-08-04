<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use App\Models\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index($id = null){
        //consulta todos clientes, chamando apenas a classe do model e o metodo all
        if($id==null){
            $products = Client::all();
            return response()->json(
                ['Clients'=> $products],
            );
         }else if($id>0){
            $products = Client::where('id','=',$id)->get();
            return response()->json(
                ['Client'=> $products],
            );
         }
}
}
