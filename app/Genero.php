<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = "genre";
    protected $primaryKey = "GenreId";
    public $timestamps = false;

    public function canciones(){
        return $this->hasMany('App\Cancion', 'GenreId');
    }

}
