<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaReproduccion extends Model
{
    protected $table = "playlist";
    protected $primaryKey = "PlaylistId";
    public $timestamps = false;

    //RELACION M:N Lista de reproduccion -> sus canciones

    public function canciones()
    {
        //belongsToMany(muchos a muchos:
        //Parametro 1: Modelo a relacionar
        //Parametro 2: Tabla intermedia pivote
        //Parametro 3: FK del modelo actual en la tabla pivote
        //Parametro 4: FK del modelo relacionado en el pivote
        return $this->belongsToMany('App\Cancion',
                             'playlisttrack',
                             'PlaylistId',
                             'TrackId');
    }

}
