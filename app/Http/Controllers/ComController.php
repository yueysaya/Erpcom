<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cabecera;
use Auth;
class ComController extends Controller
{
    public function leer(){
    	$uid=Auth::user()->id;
    	$leer = new Cabecera;
    	$mid=DB::selectOne("select id_maestra from permiso_empre where id_users=?",array(Auth::user()->id));



    	$leer = DB::select("select cab.SOPTYPE, cab.SOPNUMBE, 'J000000000', cab.CUSTNMBR, cab.DOCDATE, cab.SUBTOTAL, cab.TAXAMNT, cab.DOCAMNT
			from [TWO].[dbo].[SOP30200] as cab
			where  CAB.SOPTYPE = 3");

    	

    	dd($leer);

    }
}
