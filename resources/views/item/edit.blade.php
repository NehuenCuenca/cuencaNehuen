@extends('layouts.plantillabase');  
        
    @section('contenido')
    <h2>Modificacion de ITEM</h2>
        <br>
        <form action="/items/{{$item->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$item->nombre}}">
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Unidad de medida (mts, kg, mts2, etc)</label>
                <input type="text" name="unidadDeMedida" class="form-control" value="{{$item->unidadDeMedida}}">
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Cantidad de metros</label>
                <input type="text" name="cantidadMetros" class="form-control" value="{{$item->cantidadMetros}}">
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Costo de unidad</label>
                <input type="text" name="costoUnidad" class="form-control" value="{{$item->costoUnidad}}">
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Costo de mano de obra</label>
                <input type="text" name="costoManoDeObra" class="form-control" value="{{$item->costoManoDeObra}}">
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Total</label>
                <input type="text" name="total" class="form-control" value="{{$item->total}}">
            </div>
            
            <div class="mb-3">
                <a href="/items" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    @endsection