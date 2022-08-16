<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use App\Models\Models\Client;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all();
        return $clients;
    }

    public function store(Request $request){
        Client::create($request->all());
        return response()->json(["Status"=>200, "Message"=>"User created"],200);
    }

    public function show(int $id){

        $clientsModel = Client::find($id);

        if($clientsModel == null){
            return response()->json(["Message"=>"Client not found"],200);
        }else{
            return response()->json(["Client"=>$clientsModel],200);
        }
        
    }

    public function update(int $id, Request $request){
        
        $clientsModel = Client::find($id);

        if($clientsModel == null){
            return response()->json(["Error"=>"Invalid parameter id"],200);
        }else{
            $clientsModel->fill($request->all());
            $clientsModel->save();
            return response()->json(["Status"=>200, "Message"=>$clientsModel],200);
        }
        
    }

    public function destroy(int $id){
        Client::destroy($id);
        return response()->json(["Status"=>200, "Message"=>"Deleted"]);
    }

}
