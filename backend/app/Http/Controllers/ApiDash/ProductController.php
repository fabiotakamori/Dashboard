<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use App\Models\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //retornar todos produtos
    public function index(Request $request){
        
        $product = Product::all();
        return $product;
    }

    //Para criação precisa configurar o fillable no model
    public function store(Request $request){
        return response()->json(Product::create($request->all()),200);
    }

    //laravel pega o id no show
    public function show(int $product){
        //consulta por id
        $productModel = Product::find($product);

        if($productModel === null){
            return response()->json(['Error'=>'404',"cause"=>"ID inválido"],400);
        }else{
            return response()->json([$productModel],200);
        }
        //return $productModel;
    }

    //atualização
    
}
