@extends('layouts.plantillabase');  
        
    @section('contenido')
    <h1>Menu ITEM</h1>
    <a href="items/create" class="btn btn-primary">CREAR ITEM</a>
    <table class="table table-sm table-dark table-bordered mt-4">
        <thead >
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Medida</th>
                <th scope="col">Metros</th>
                <th scope="col">Costo unidad</th>
                <th scope="col">Costo Mano de obra</th>
                <th scope="col">Total</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->unidadDeMedida}}</td>
                <td>{{$item->cantidadMetros}}</td>
                <td>{{$item->costoUnidad}}</td>
                <td>{{$item->costoManoDeObra}}</td>
                <td>{{$item->total}}</td>
                <td>
                    <form action="{{ route ('items.destroy',$item->id) }}" method="post">
                        <a href="/items/{{ $item->id }}/edit" class="btn btn-warning">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    
    </table>
    
    @endsection