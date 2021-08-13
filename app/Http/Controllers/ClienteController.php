<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    public function index()
    {
        //seleccion de recursos
        $clientes = Cliente::paginate(6);
        //retorna recursos
        return view('clientes.index')->with("clientes", $clientes);
    }

    public function create()
    {
        return view('clientes.create');
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
            return redirect('clientes/create')
            ->withErrors($validador)
            ->withInput();
        }


        //Traer el maxio Id que este en la tabla cliente
        $maxcliente = Cliente::all()->max('CustomerId');
        $maxcliente++;
        //Crear el nuevo recurso
        $nuevocliente = new Cliente();
        $nuevocliente->CustomerId = $maxcliente;
        $nuevocliente->FirstName = $request->input("nombre");
        $nuevocliente->LastName = $request->input("apellido");
        $nuevocliente->email = $request->input("email");
        $nuevocliente->save();

        //Redireccionamiento a una ruta especifica
        //Solo se hace para rutas get
        //with: crear varaibles de sesion de duracion corta(flash)
        return redirect('clientes')
               ->with("mensaje_exito" , "Cliente registrado exitosamente");
    }

    public function show($id)
    {
        $cliente = Cliente::find($id);

        return view('clientes.show')->with("cliente", $cliente);
    }

    public function edit($id)
    {
        //Seleccionar el recurso (singleton) con el id del parametro
        $cliente = Cliente::find($id);

        //Pasar ese cliente a la vista para presentarse en el formulario
        return view('clientes.edit')->with('cliente', $cliente);
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
            return redirect("clientes/$id/edit")
            ->withErrors($validador)
            ->withInput();
        }

        //Seleccion del recurso a modificar
        $cliente = Cliente::find($id);

        //actualizo el estado del cliente
        //En virtud de los datos que vengan del formlario
        $cliente->FirstName = $request->input('nombre');
        $cliente->LastName = $request->input('apellido');
        $cliente->Email = $request->input('email');

        $cliente->save();

        return redirect('clientes')
               ->with("mensaje_exito" , "Cliente actualizado exitosamente");

    }

    public function destroy($id)
    {
        //
    }
}
