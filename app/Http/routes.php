<?php
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/embarques', function () {
    return view('embarques');
});

Route::get('/rastreo', function () {
    return view('rastreo');
});


Route::get('/empresas', function () {
    return view('empresas');
});

Route::get('/perfiles', function () {
    return view('perfiles');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/ubicaciones', function () {
    return view('ubicaciones');
});

Route::get('RESTService/historial','historialcontroller@index');
Route::get('RESTService/historial/{id}',"historialcontroller@show");
Route::post('RESTService/historial/','historialcontroller@store'); 
Route::put('RESTService/historial/{id}','historialcontroller@update'); 
Route::delete('RESTService/historial/{id}','historialcontroller@destroy'); 
Route::get('RESTService/login/{id}/{pass}','logincontroller@index');
Route::resource('RESTService/login','logincontroller@store');


Route::get('RESTService/movimientos/{id}/{movimiento}','movimientocontroller@index');
Route::resource('RESTService/movimientos','movimientocontroller');

Route::get('RESTService/movimientos/{id}/{movimiento}','sincronizarcontroller@index');
Route::resource('RESTService/movimientos','movimientocontroller');




