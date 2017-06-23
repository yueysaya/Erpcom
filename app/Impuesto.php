<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impuesto extends Model
{
	  protected $table = 'impuesto';

      protected $fillable = [
        'id_cabecera', 'tipo_impuesto', 'base','porcentaje','nro_compr_ret','concepto','tipo_doc','nro_doc',
    ];
}
