<!--llama la plantilla-->
@extends('templates.template')
<!--Lugar donde va a agrefar-->
@section("contenido")
    <h1>
        Cliente: {{ $cliente->FirstName }}
                {{ $cliente->LastName }}
    </h1>
        <ul>
            <li><strong> Empresa:</strong> {{ $cliente->Company}} </li>
            <li><strong> Dirección:</strong> {{ $cliente->Address}} </li>
            <li><strong> Ciudad:</strong> {{ $cliente->City}} </li>
            <li><strong> Estado:</strong> {{ $cliente->State}} </li>
            <li><strong> País:</strong> {{ $cliente->Country}} </li>
            <li><strong> Código Postal:</strong> {{ $cliente->PostalCode}} </li>
            <li><strong> Teléfono:</strong> {{ $cliente->Phone}} </li>
            <li><strong> Fax:</strong> {{ $cliente->Fax}} </li>
            <li><strong> Email:</strong> {{ $cliente->Email}} </li>


        </ul>
@endsection
