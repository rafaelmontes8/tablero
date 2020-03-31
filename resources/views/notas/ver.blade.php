@extends('plantilla')

@section('titulo')
: @lang('messages.lbnotas')
@stop

@section('cuerpo')

	<h4>K ase cuerpo?</h4>

	@foreach ($notas as $nota)
		<p>{{$nota->texto}} <strong style="">{{$nota->fecha}}</strong> <a href="{{ route('nota.editview', ['id' => $nota->idNot]) }}"><i class="fas fa-edit"></i> @lang('messages.lbeditar')</a></p>

	@endforeach


@stop

	