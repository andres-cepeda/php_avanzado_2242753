<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
    protected $table = "album";
    protected $primaryKey = "AlbumId";
    public $timestamps = false;

}
