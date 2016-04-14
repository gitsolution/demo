<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return  response()->view('home')->cookie('noLanding', 'value');
    }

    public function empresas()
    {
        return response()->view('empresas')->cookie('noLanding', 'value');
    }    

    public function embarques()
    {
        return response()->view('embarques')->cookie('noLanding', 'value');
    }    

    public function perfiles()
    {
        return response()->view('perfiles')->cookie('noLanding', 'value');
    }

    public function rastreo()
    {
        return response()->view('rastreo')->cookie('noLanding', 'value');
    }

    public function ubicaciones()
    {
        return response()->view('ubicaciones')->cookie('noLanding', 'value');
    }

    public function usuarios()
    {
        return response()->view('usuarios')->cookie('noLanding', 'value');
    }

}
