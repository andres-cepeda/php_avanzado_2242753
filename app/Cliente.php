<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "customer";
    protected $primaryKey = "CustomerId";
    public $timestamps = false;

    public function compras()
    {
        return $this->hasMany('App\Compra', 'CustomerId');
    }
}
