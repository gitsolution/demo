<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class historialcontroller extends Controller
{
    public function store()
    {
    }

    public function index()
    {
    	 $empresas=embarques::get();
         return $empresas;
    }
}
