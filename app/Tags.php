<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    //declaramos nustro campos de tabla tags
    protected $fillable = [
        'nombre',
    ];
}
