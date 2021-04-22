<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pruebacontrolador(){
        return 'Hola desde el controlador';
    }

    public function vistaprueba(){
        return view('vistaprueba');
    }
}
