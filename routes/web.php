<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* 
Route::get('/holamundo', function () {
    return 'Bienvenido a mi pagina, usted ingresó desde la ruta -holamundo-';
});

Route::get('/saludo/{nombre}/{apellido}', function ($nombre, $apellido) {
    return 'Hola ' . $nombre . ' ' . $apellido;
});

Route::get('pruebacontrolador', [HomeController::class, 'pruebacontrolador']);
Route::get('vistaprueba', [HomeController::class, 'vistaprueba']); */

/* Route::get('/item', function () {
    return view('item.index');
});

Route::get('/item/create', [ItemController::class,'create']); */
Route::resource('items', 'App\Http\Controllers\ItemController');