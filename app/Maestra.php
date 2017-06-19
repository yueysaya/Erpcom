<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestra extends Model
{
	  protected $table = 'maestra';

      protected $fillable = [
        'rif', 'nombre', 'correo',
    ];
}
