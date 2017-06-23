<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabecera extends Model
{
	  protected $table = 'cabecera';

      protected $fillable = [
        'tipo', 'nro_doc', 'rif_proveedor','rif_cliente','fecha','subtotal','impuesto','total','id_maestra','id_users',
    ];
}
