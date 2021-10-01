<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
/*     declaramos nuestros campos de nuestra tabla tags*/    
    protected $fillable = [
        'nombre',
    ];
}
