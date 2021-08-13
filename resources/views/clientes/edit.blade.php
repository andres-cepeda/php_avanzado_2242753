<!--llama la plantilla-->
@extends('templates.template')
<!--Lugar donde va a agrefar-->
@section("contenido")

    <form method="POST"
       action="{{ url('clientes/' . $cliente->CustomerId) }}"
        class="form-horizontal">
        @method('PUT')
        @csrf
        <fieldset>

            <!-- Form Name -->
            <legend>Actualizar Cliente</legend>

            <!-- Text input-->
            <div class="mb-3">
                <label class="form-label" for="textinput">Nombre</label>
                <input value="{{ $cliente->FirstName }}" name="nombre" type="text" class="form-control">
                <strong class="text-danger"> {{ $errors->first('nombre') }} </strong>
            </div>

            <!-- Text input-->
            <div class="mb-3">
                <label class="form-label" for="textinput">Apellido</label>
                <input value="{{ $cliente->LastName }}" name="apellido" type="text"  class="form-control">
                <strong class="text-danger"> {{ $errors->first('apellido') }} </strong>
            </div>

            <!-- Text input-->
            <div class="mb-3">
                <label class="form-label" for="textinput">Email</label>
                <input value="{{ $cliente->Email }}" name="email" type="text" class="form-control">
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
