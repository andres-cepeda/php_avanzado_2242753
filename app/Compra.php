<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = "invoice";
    protected $primaryKey = "InvoiceId";
    public $timestamps = false;
}
