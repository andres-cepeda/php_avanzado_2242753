<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table = "artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;

     //Establecer relacion de 1 = Artista - M = Discos
     public function discos()
     {
         //Hasmany: parametros
             //1. Modelo a relacionar
             //2. Clave foranea del artista (papá) en los discos (hijos)
         return $this->hasMany('App\Disco', 'ArtistId');
     }

     public function canciones()
     {
         return $this->hasManyThrough('App\Cancion',
                                      'App\Disco',
                                      'ArtistId',
                                      'AlbumId',
                                      'ArtistId',
                                      'AlbumId');
     }
}
