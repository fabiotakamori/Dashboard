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
        return response()->json(["Product"=>Product::create($request->all()), "Message"=>"Created"],200);
    }

    //laravel pega o id no show
    public function show(int $product){
        //consulta por id
        $productModel = Product::find($product);

        if($productModel === null){
            return response()->json(['Error'=>'404',"cause"=>"Invalid id"],400);
        }else{
            return response()->json(["Product"=>$productModel, "Satus"=>200],200);
        }
        //return $productModel;
    }

    //atualização
    public function update(int $id, Request $request){
        $product = Product::find($id);
        
        if($product == null){
            return response()->json(['Error'=>'404',"cause"=>"Invalid id"],400);
        }else{
            $product->fill($request->all());
            $product->save();
            return response()->json(["Message"=>"Sucess", "Satus"=>200],200);
        }
    }

    //deletar
    public function destroy(int $product){
         Product::destroy($product);
         return response()->json(["Message"=>"Deleted","Status"=>200]);
    }

    
}
