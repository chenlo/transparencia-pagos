<?php

namespace Transparencia\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

use Transparencia\Evento;
use Transparencia\Pago;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();
        $pagos_primer_evento = Evento::find(1)->pagos;
        return view('pagos.index')->with('eventos', $eventos)->with('pagos', $pagos_primer_evento);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pago = Pago::find($id);
        $pago->metodo = Input::get('metodo');
        $pago->fecha_pago = Carbon::now();
        $pago->pagado = Input::get("pagado") ? 1 : 0;
        if($pago->pagado==0)
            $pago->metodo = "ninguno";
        $pago->save();

        // redirect
        $request->session()->flash('message', 'Pago actualizado!');
        return redirect('pago/evento/'.$pago->evento->id.'/akoki');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
