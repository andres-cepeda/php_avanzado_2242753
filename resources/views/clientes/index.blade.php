<!--llama la plantilla-->
@extends('templates.template')
<!--Lugar donde va a agrefar-->
@section("contenido")

        <h1>Listado Clientes</h1>
        <a href="{{ url('clientes/create') }}" type="button" class="btn "><i class="icon ion-md-person"></i>Nuevo Cliente</a>
        @if (session("mensaje_exito"))
            <div class="alert alert-success">
                <strong>{{ session("mensaje_exito") }}</strong>
            </div>
        @endif
        @if (session("mensaje_exito1"))
        <div class="alert alert-info">
            <strong>{{ session("mensaje_exito1") }}</strong>
        </div>
        @endif
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th class="table-active">Nombre</th>
                    <th>Ciudad</th>
                    <th>Pais</th>
                    <th>Email</th>
                    <th>Actualizar</th>
                    <th>Ver detalles ...</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->FirstName }} {{ $cliente->LastName }}</td>
                        <td>{{ $cliente->City }}</td>
                        <td>{{ $cliente->Country }}</td>
                        <td>{{ $cliente->Email }}</td>
                        <td><a href="{{url('clientes/'.$cliente->CustomerId.'/edit') }}" type="button" class="btn btn-success"><i class="icon ion-md-create"></i></a></td>
                        <td><a href="{{url('clientes/'.$cliente->CustomerId) }}" type="button" class="btn btn-info"><i class="icon ion-md-more"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$clientes->links()}}

@endsection


