@extends('layouts.master')
@section('content')
<div class="container">
    <h2>Editando el pago de {{ $pago->persona->nombre }} en {{ $pago->evento->nombre }}</h2>
    <p>Estado actual:
    @if($pago->pagado)
        Pagado {{ $pago->metodo }}
    @else
        Sin pagar
    @endif
    
    </p>

    {{ Form::model($pago, array('route' => array('pagos.update', $pago->id), 'method' => 'PATCH')) }}

        <div class="form-group">
            {!! Form::label('metodo', 'Método de pago') !!}
            <div class="form-controls">
                <?php 
                    $metodos =  [
                        'ninguno' => 'Ninguno',
                        'transferencia' => 'Por transferencia',
                        'cash' => 'En metálico'
                    ];
                ?>
                {!! Form::select('metodo', $metodos, null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('pagado', 'Ha pagado') !!}
            <div class="form-controls">
                {{ Form::radio('pagado', 1) }} Sí
                {{ Form::radio('pagado', 0) }} No
            </div>
        </div>

        {{ Form::submit('Actualizar pago', array('class' => 'btn btn-primary')) }}
        <a class="btn btn-danger" href="{{ URL::previous() }}">Volver</a>
    {{ Form::close() }}
</div>
@stop