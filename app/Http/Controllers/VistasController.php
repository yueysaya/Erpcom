<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistroEmpreRequest;
use App\Maestra;
use App\PermisoEmpre;
use App\User;
use DB;
use Session;
use Redirect;

class VistasController extends Controller
{
    public function index(){
    	return view('index');
    }
    
    public function rEmpresa(){
    	return view('rEmpresa');
    }
    public function flot(){
        return view('flot');
    }
    public function morris(){
        return view('morris');
    }
    public function historico(){
        $users = User::all();
        return view('historico')->with(['users'=>$users]);
    }
    public function obligaciones(){
        $users = User::all();
        return view('obligaciones')->with(['users'=>$users]);
    }
    public function usuarios(){
        $users = User::all();
        return view('usuarios')->with(['users'=>$users]);
    }
    public function perfil(){
        return view('perfil');
    }

     public function store(RegistroEmpreRequest $request){
        $maestra = new Maestra;
        $permiso = new PermisoEmpre;

        $aux = DB::selectOne("select * from users where cedula = ?",array($request->get('cedula')));
        
        if($aux <> null){
     		$maestra->rif = $request->get('rif');
     		$maestra->nombre = $request->get('nombre');
     		$maestra->correo = $request->get('correo');
     		$maestra->save();
     		$aux2 = DB::selectOne("select id from maestra where rif = ?",array($request->get('rif')));
     		$permiso->id_maestra = $aux2->id;
     		$permiso->id_permiso = 1;
     		$permiso->id_users = $aux->id;
     		$permiso->save();
     		Session::flash('messages','Empresa Registrada');
     		return Redirect::to('/rEmpresa');
        }else{
        	Session::flash('message-error','Usuario No Existe');
        	return Redirect::to('/rEmpresa');
        }
        Session::flash('message-error','hay un error');
        return Redirect::to('/rEmpresa');
    }
    

}
