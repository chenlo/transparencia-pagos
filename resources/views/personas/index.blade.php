@extends('layouts.master')
@section('content')
  <h2>Personas implicadas en la trama</h2>
  @foreach ($personas as $persona)
       <a href="{{ url('personas/'.$persona->id.'/edit') }}" class="btn btn-block btn-info">{{ $persona->nombre }}</h5>
  @endforeach
@stop