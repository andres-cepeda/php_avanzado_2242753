<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    protected $table = "track";
    protected $primaryKey = "TrackId";
    public $timestamps = false;
}
