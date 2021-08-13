<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use Illuminate\Support\Facades\Validator;


class EmpleadoController extends Controller
{

    public function index()
    {
        //seleccion de recursos
        $empleados = Empleado::paginate(6);
        //retorna recursos
        return view('empleados.index')->with("empleados", $empleados);
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
         //Proceso para validar datos (laravel)
        //1. Establecer la reglas de validacion en un arreglo
        $reglas=[
            "nombre" => 'required|alpha|max:10',
            "apellido" => 'required|alpha|max:10',
            "email" => 'required|email'
        ];

        //1.1. Establecer mensajes de validacion
        $mensajes=[
            "required" => "Campo requerido",
            "alpha" => "Solo letras",
            "email" => "Debe ser un email",
            "max" => "Debe tener máximo :max caracteres"
        ];



        //2. Crear el objeto epecial para validacion
        $validador = Validator::make($request->all(), $reglas, $mensajes);

        //3. realizar la validacion utilizando el validador(fails)
        if($validador->fails())//True por que falla
        {
            //zona de fallo
            return redirect('empleados/create')
            ->withErrors($validador)
            ->withInput();
        }

        //Traer el maxio Id que este en la tabla cliente
        $maxempleado = Empleado::all()->max('EmployeeId');
        $maxempleado++;
        //Crear el nuevo recurso
        $nuevoempleado = new Empleado();
        $nuevoempleado->EmployeeId = $maxempleado;
        $nuevoempleado->FirstName = $request->input("nombre");
        $nuevoempleado->LastName = $request->input("apellido");
        $nuevoempleado->Email = $request->input("email");
        $nuevoempleado->save();

        return redirect('empleados')
        ->with("mensaje_exito" , "Empleado registrado exitosamente");
    }

    public function show($id)
    {
        $empleado = Empleado::find($id);

        return view('empleados.show')->with("empleado", $empleado);
    }

    public function edit($id)
    {
        //Seleccionar el recurso (singleton) con el id del parametro
        $empleado = Empleado::find($id);

        //Pasar ese cliente a la vista para presentarse en el formulario
        return view('empleados.edit')->with('empleado', $empleado);
    }

    public function update(Request $request, $id)
    {
        //Proceso para validar datos (laravel)
        //1. Establecer la reglas de validacion en un arreglo
        $reglas=[
            "nombre" => 'required|alpha|max:10',
            "apellido" => 'required|alpha|max:10',
            "email" => 'required|email'
        ];

        //1.1. Establecer mensajes de validacion
        $mensajes=[
            "required" => "Campo requerido",
            "alpha" => "Solo letras",
            "email" => "Debe ser un email",
            "max" => "Debe tener máximo :max caracteres"
        ];

        //2. Crear el objeto epecial para validacion
        $validador = Validator::make($request->all(), $reglas, $mensajes);

        //3. realizar la validacion utilizando el validador(fails)
        if($validador->fails())//True por que falla
        {
            //zona de fallo
            return redirect("empleados/$id/edit")
            ->withErrors($validador)
            ->withInput();
        }

        //Seleccion del recurso a modificar
        $empleado = Empleado::find($id);

        //actualizo el estado del cliente
        //En virtud de los datos que vengan del formlario
        $empleado->FirstName = $request->input('nombre');
        $empleado->LastName = $request->input('apellido');
        $empleado->Email = $request->input('email');

        $empleado->save();

        return redirect('empleados')
        ->with("mensaje_exito1" , "Empleado actualizado exitosamente");

    }

    public function destroy($id)
    {
        //
    }
}
