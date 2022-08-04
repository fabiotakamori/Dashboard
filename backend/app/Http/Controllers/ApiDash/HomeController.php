<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use App\Models\Models\Product;
use App\Models\Models\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        //consulta todos clientes, chamando apenas a classe do model e o metodo all
        $clientes = Client::all();
        $products = Product::all();
        return response()->json(
            ['Clients'=> $clientes,
            'Products'=> $products],
        );    
    }
}
