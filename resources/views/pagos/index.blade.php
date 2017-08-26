@extends('layouts.master')
@section('content')
  <section id="pagos">
    <div class="panel with-nav-tabs panel-warning">
        <div class="panel-heading">
          <ul class="nav nav-tabs">
              @foreach ($eventos as $evento)
                <li class="{{ Request::segment(3)==$evento->id ? 'active' : '' }}">
                  <a href="{{ url('pago/evento/'.$evento->id) }}">{{$evento->nombre}}</a>
                </li>
              @endforeach
          </ul>
        </div>
        <div class="panel-body">
          <div class="tab-content">
              @foreach ($pagos as $pago)
              <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <div class="caption {{ $pago->pagado ? 'alert-success' : 'alert-danger' }}">
                      <h3>{{ $pago->persona->nombre }} <i class="glyphicon {{ $pago->pagado ? 'glyphicon-ok' : 'glyphicon-remove' }}"></i></h3>
                      <p class="pagado"><strong>Pagado:</strong> {{ $pago->pagado ? 'Pagado' : 'Todavía no' }}</p>
                      <p class="fecha"><strong>Fecha:</strong> {{ $pago->fecha_pago ? $pago->fecha_pago : 'Quién sabe.'  }}</p>
                      <p class="método"><strong>Método:</strong> {{ $pago->metodo }}</p>
                    </div>
                  </div>
              </div>
              @endforeach
          </div>
        </div>
    </div>    
    <div class="alert {{ $count==$count_pagados ? 'alert-success' : 'alert-info' }}">
      <h4>Han pagado {{ $count_pagados }} donkys de {{ $count }}</h4>
    </div>
  </section>
 @stop