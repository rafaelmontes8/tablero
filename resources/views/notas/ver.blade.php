@extends('plantilla')
@section('titulo')
: notas
@stop

@section('cuerpo')

	<h4>K ase cuerpo?</h4>

	@foreach ($notas as $nota)
		<p>{{$nota->texto}} <strong style="">{{$nota->fecha}}</strong></p>

	@endforeach


@stop

	