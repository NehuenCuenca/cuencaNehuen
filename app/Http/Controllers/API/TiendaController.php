<?php

namespace App\Http\Controllers\API;

use App\Models\Tienda;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tienda = Tienda::all();
        return $tienda->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tienda = Tienda::create($request->all());
        return response()->json($tienda, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tienda = Tienda::find($id);
        return $tienda->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tienda $tienda)
    {
        $tienda->update($request->all());
        return response()->json(['SolicitudHTTP' => 'Exitosa', 'Mensaje' => 'Tienda modificada']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tienda $tienda)
    {
        Tienda::destroy($tienda->id);
        return response()->json(['SolicitudHTTP' => 'Exitosa', 'Mensaje' => 'Tienda eliminada']);
    }
}
