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
                    <div class="caption {{ $pago->pagado ? 'alert-success' : 'alert-danger' }} text-center">
                      <h3>{{ $pago->persona->nombre }} <i class="glyphicon {{ $pago->pagado ? 'glyphicon-ok' : 'glyphicon-remove' }}"></i></h3>
                      <h5>{{ $pago->metodo }}</h5>
                      <a href="{{ url('pago/'.$pago->id.'/edit') }}" class="btn btn-block btn-warning">Actualizar pago</a>
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