<!--llama la plantilla-->
@extends('templates.template')
<!--Lugar donde va a agrefar-->
@section("contenido")

        <h1>Listado Empleados</h1>
        <a href="{{ url('empleados/create') }}" type="button" class="btn "><i class="icon ion-md-person"></i>Nuevo Empleado</a>
        <br>
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
                    <th>Cargo</th>
                    <th>Ciudad</th>
                    <th>Pais</th>
                    <th>Email</th>
                    <th>Actualizar</th>
                    <th>Ver detalles...</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->FirstName }} {{ $empleado->LastName }}</td>
                        <td>{{ $empleado->Title }}</td>
                        <td>{{ $empleado->City }}</td>
                        <td>{{ $empleado->Country }}</td>
                        <td>{{ $empleado->Email }}</td>
                        <td style="text-align: center"><a href="{{url('empleados/'.$empleado->EmployeeId.'/edit') }}" type="button" class="btn btn-success"><i class="icon ion-md-create"></i></a></td>
                        <td  style="text-align: center"><a href="{{url('empleados/'.$empleado->EmployeeId) }}"  type="button" class="btn btn-info"><i class="icon ion-md-more"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$empleados->links()}}
@endsection

