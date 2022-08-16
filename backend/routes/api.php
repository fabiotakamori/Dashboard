<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiDash\HomeController;
use App\Http\Controllers\ApiDash\ProductController;
use App\Http\Controllers\ApiDash\ClientController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
irá fornecer API para HomeController, chamando método index
app->http->Controllers
para evitar problema de cors, precisa realizar o procedimento a baixo
https://dev.to/thiagoluna/resolvendo-problema-de-access-control-allow-origin-cors-no-laravel-57g5

Route::resource: O método Route::resource é um controlador RESTful
*/
Route::get('/', [HomeController::class, "index"]);
Route::resource('/products',ProductController::class);
Route::resource('/clients', ClientController::class);



