<?php
use App\Http\Controllers\API\MotoController;
use App\Http\Controllers\API\TiendaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('motos', [MotoController::class,'index']);

Route::apiResource('tiendas', TiendaController::class);

/* Route::get('/tiendas', [TiendaController::class,'index']);

Route::post('/tienda', [TiendaController::class,'store']);

Route::get('/tiendas/{$id}', [TiendaController::class,'show']);

Route::put('/tiendas/{$id}', [TiendaController::class,'update']);

Route::delete('tiendas/{$id}', [TiendaController::class,'destroy']); */