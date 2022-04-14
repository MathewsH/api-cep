<?php

use Illuminate\Http\Request;
use App\Models\Cep;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CepController;
//use App\Http\Controllers\CepController;


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

Route::get('/cep', [CepController::class, 'index']);
Route::post('/cep', [CepController::class, 'store']);
Route::get('/cep/{cep}', [CepController::class, 'show']);
Route::put('/cep/{id}', [CepController::class, 'update']);
Route::delete('/cep/{id}', [CepController::class, 'destroy']);
Route::get('/cep/searchLogradouro/{logradouro}', [CepController::class, 'searchLogradouro']);
Route::get('/cep/searchCep/{cep}', [CepController::class, 'searchCep']);


//Route::post('/cep', function(){
 //   return Cep::create([
 //       'cep' => '79300030',
//        'logradouro' => 'Rua delamare',
//        'bairro' => 'centro',
//        'localidade' => 'Corumba',
//        'uf' => 'MS'
//    ]);
//});

//Route::apiResource('/cep',['App/Http/Controllers/CepController::class']);