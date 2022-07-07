<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use App\Models\Models\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        //consulta todos clientes, chamando apenas a classe do model e o metodo all
        $clientes = Client::all();
        $products = [[
            'id'=>1,
            'name'=>'Video Game',
            'value'=>'200'
        ]];

        return response()->json(
            ['clients'=> $clientes,
            'products'=> $products],
            
        );
    }
}
