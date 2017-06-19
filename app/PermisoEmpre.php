<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermisoEmpre extends Model
{
	protected $table = 'permiso_empre';

    protected $fillable = [
        'id_maestra', 'id_permiso', 'id_users',
    ];
}
