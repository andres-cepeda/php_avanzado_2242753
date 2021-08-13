<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "employee";
    protected $primaryKey = "EmployeeId";
    public $timestamps = false;


    public function compras(){
        return $this->hasManyThrough('App\Compra' ,
                                     'App\Cliente',
                                     'SupportRepId',
                                     'CustomerId' ,
                                     'EmployeeId' ,
                                     'CustomerId');
    }

    public function clientes()
    {
        //Hasmany: parametros
            //1. Modelo a relacionar
            //2. Clave foranea del artista (papá) en los discos (hijos)
        return $this->hasMany('App\Cliente', 'SupportRepId');
    }
}
