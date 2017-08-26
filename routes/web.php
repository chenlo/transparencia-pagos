<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    $first_id_evento = Transparencia\Evento::first()->id;
    return redirect('/pago/evento/'.$first_id_evento);
});
Route::get('/pago/evento/{id}', function($id) {
    $eventos = Transparencia\Evento::all();
    $pagos = Transparencia\Pago::where('evento_id', $id)->get();
    $count_pagados = Transparencia\Pago::where('evento_id', $id)->where('pagado','1')->count();
    $count = Transparencia\Pago::where('evento_id', $id)->count();
    return view('pagos.index')->with('eventos', $eventos)->with('pagos', $pagos)->with('count', $count)->with('count_pagados', $count_pagados);
});
Route::get('/pago/evento/{id}/akoki', function($id){
    $eventos = Transparencia\Evento::all();
    $pagos = Transparencia\Pago::where('evento_id', $id)->get();
    $count_pagados = Transparencia\Pago::where('evento_id', $id)->where('pagado','1')->count();
    $count = Transparencia\Pago::where('evento_id', $id)->count();
    return view('pagos.akoki')->with('eventos', $eventos)->with('pagos', $pagos)->with('count', $count)->with('count_pagados', $count_pagados);
});
Route::get('/pago/{id}/edit', function($id){
    $pago = Transparencia\Pago::find($id);
    return view('pagos.edit')->with('pago', $pago);
});
Route::PATCH('/pago/update/{id}', ['as' => 'pagos.update', 'uses' => 'PagoController@update']);