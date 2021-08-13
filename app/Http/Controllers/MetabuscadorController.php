<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //Controlador esta compuesto de acciones
    //cada accion estar vinculada a su correspondiente ruta

    public function mostrar_formulario()
    {
        //Mostrar la vista del metabuscador
        return view('metabuscador');
    }

    //realizar la busqueda por motor

    public function buscar_termino()
    {
        //realizar la busqueda
        $termino = $_POST["termino"];
        $motor = $_POST["motores"];

        //La busquedad se realiza acorde al motor de busquedad elegido

        switch($motor)
        {
            case 1: return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2: return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3: return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                break;
            case 4: return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 5: return redirect()->to("https://www.ask.com/web?q=$termino");
                break;
            case 6: return redirect()->to("https://twitter.com/search?q=$termino");
                break;
            case 7: return redirect()->to("https://co.pinterest.com/search/pins/?q=$termino");
                break;
            case 8: return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;
            case 9: return redirect()->to("https://yandex.com/search/?text=$termino");
                break;
            case 10: return redirect()->to("https://search.aol.com/aol/search;_ylt=AwrJ4NaOCa1gk4kA23NjCWVH?q=$termino");
                break;
        }
    }
}
