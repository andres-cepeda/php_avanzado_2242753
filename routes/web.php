<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('variables' , function(){
    $mensaje = 20;
    /*Funcion nativa de php: analixar el contenido de una
    variable: tipo de dato, datos contenidos*/
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = "Hola 2242753";
    var_dump($mensaje);
} );

Route::get('arreglos' , function(){
    //Definir un arreglo en PHP
     // Tamaño del arreglo estudiantes es 3
    $estuadiantes = [ "AN" => "Ana" ,
                      2 => "Valeria" ,
                      "Jo" => "Jorge" ];
    echo "<pre>";
    print_r($estuadiantes);
    echo "<pre>";
});

Route::get('paises', function()
{
    $paises = [
        "Colombia" => [
            "capital" => "Bogotá D.C",
            "moneda" => "Peso",
            "poblacion" => 51
        ],
        "Peru" => [
            "capital" => "Lima",
            "moneda" => "Sol",
            "poblacion" => 33.19
        ],
        "Paraguay" => [
            "capital" => "Asuncion",
            "moneda" => "Guarani",
            "poblacion" => 7
        ],
        "Argentina" => [
            "capital" => "Buenos Aires",
            "moneda" => "Peso argentino",
            "poblacion" => 44.94
        ],
        "Brasil" => [
            "capital" => "Brasilia",
            "moneda" => "Real brasileño",
            "poblacion" => 211
        ]
    ];

    //Mostrar la vista de paises
    //Llevamdo el arreglo
    return view('paises')->with("naciones" , $paises);

});

Route::get ('mostrar_formulario' , 'MetabuscadorController@mostrar_formulario');

Route::post ('buscar_termino' , 'MetabuscadorController@buscar_termino');

Route::resource('clientes','ClienteController');
Route::resource('empleados','EmpleadoController');

//Ruta de prueba platilla

Route::get('plantilla', function(){
    return view('templates.template');
});

