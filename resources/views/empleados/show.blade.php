<!--llama la plantilla-->
@extends('templates.template')
<!--Lugar donde va a agrefar-->
@section("contenido")
    <h1>
        Empleado: {{ $empleado->FirstName }}
                {{ $empleado->LastName }}
    </h1>
        <ul>
            <li><strong> Cargo:</strong> {{ $empleado->Title}} </li>
            <li><strong> Fecha de nacimiento:</strong> {{ $empleado->BirthDate}} </li>
            <li><strong> Fecha de contratación:</strong> {{ $empleado->HireDate}} </li>
            <li><strong> Dirección:</strong> {{ $empleado->Address}} </li>
            <li><strong> Ciudad:</strong> {{ $empleado->City}} </li>
            <li><strong> Estado:</strong> {{ $empleado->State}} </li>
            <li><strong> País:</strong> {{ $empleado->Country}} </li>
            <li><strong> Código Postal:</strong> {{ $empleado->PostalCode}} </li>
            <li><strong> Teléfono:</strong> {{ $empleado->Phone}} </li>
            <li><strong> Fax:</strong> {{ $empleado->Fax}} </li>
            <li><strong> Email:</strong> {{ $empleado->Email}} </li>


        </ul>
@endsection

