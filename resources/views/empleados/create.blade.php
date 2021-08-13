<!--llama la plantilla-->
@extends('templates.template')
<!--Lugar donde va a agrefar-->
@section("contenido")
        <form method="POST" action="{{ url('empleados') }}" class="form-horizontal">
            @csrf
            <fieldset>
                <!-- Form Name -->
                <legend>Nuevo Empleado</legend>

                 <!-- Text input-->
                <div class="mb-3">
                    <label class="form-label" for="textinput">Nombre</label>
                    <input value="{{ old('nombre') }}" id="textinput" name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre">
                    <strong class="text-danger"> {{ $errors->first('nombre') }} </strong>
                </div>

                <!-- Text input-->
                <div class="mb-3">
                    <label class="col-md-4 control-label" for="textinput">Apellido</label>
                        <input value="{{ old('apellido') }}" id="textinput" name="apellido" type="text" class="form-control" placeholder="Ingrese el apellido"  >
                        <strong class="text-danger"> {{ $errors->first('apellido') }} </strong>
                </div>

                <!-- Text input-->
                <div class="mb-3">
                    <label class="col-md-4 control-label" for="textinput">Email</label>
                    <input value="{{ old('email') }}" id="textinput" name="email" type="text" class="form-control" placeholder="Ingrese el email"  >
                    <strong class="text-danger"> {{ $errors->first('email') }} </strong>
                </div>

                <br>

                <!-- Button -->
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button id="" name="" class="btn btn-primary">Guardar</button>
                </div>
            </fieldset>
        </form>
@endsection


