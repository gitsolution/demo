<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class movimientocontroller extends Controller
{
    public function index(Request $request){
		embarques::create([
			'embarques_id'=>$request['codigoControl'],	
			'usuarios_id'=>1,
			'materiales_id'=>1,
			'ubicaciones_id'=>1,
			'peso'=>$request['peso'],
			'fechalocal'=>$request['fecha'],
			'fecha'=>$request['fecha'],
			'codigocontrol'=>$request['idUbicacion'],
			'cancelado'=>$request['nombreUbicacion'],
			]);
	}   

	public function store()
	{
		return "";
	}
}
