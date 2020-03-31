@extends('plantillanota')
@section('titulo')
: @lang('messages.lbeditar')
@stop

@section('cuerpo')

	
	<div class="row">
		<div class="col">

			@if($Note)
			<!-- CRSF (Cross-site Request Fogery) -->
			<form action="{{ route('nota.edit') }}" method="post">

				<input type="hidden" name="id" value="{{ $Note->idNot }}" />
				@csrf

				<div class="row">
					<div class="col-sm-4">
						{!! Form::select('idTab',$Table, $Note->idTab, ['class' => 'form-control','id' => 'select']) !!}
					</div>
					<div class="col-sm-4">
					<input class="form-control" type="text" name="texto" autocomplete="off" value="{{$Note->texto}}" required autofocus />
					</div>

					<div class="col-sm-2">
						<button class="btn btn-primary" type="submit">@lang('messages.btguardar')</button>
					</div>
				</div>
			</form>
			@else
			<div class="alert alert-info" role="alert">
		  		{{ __('messages.notableros') }}
			</div>
			@endif
		</div>
	</div>


	@if (!$errors->isEmpty())
	<div class="row mt-2">
		<div class="col-sm-4">
			<div class="alert alert-danger" role="alert">
		  		{{ $errors->first('nom') }}
			</div>
		</div>
	</div>
	@endif

@stop

