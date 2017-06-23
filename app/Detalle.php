<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
	  protected $table = 'detalle';

      protected $fillable = [
        'id_cabecera', 'tipo', 'nro_doc','nro_linea','nro_articulo','unidad','cantidad','precio','tot_precio','nom_articulo',
    ];
}
