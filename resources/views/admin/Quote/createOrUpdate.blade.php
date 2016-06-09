@extends('layout.admin')

@section('title', $title.' '.$quote->author)

@section('content')	
	{{ Form::model($quote, array('route' =>	$action , 'files'=>true, 'class' => 'col-xs-12'), 'Selecteer een quote') }}

		<div class="col-xs-12 col-md-6 col-md-offset-3">

			@if ($errors->has())
			    <div class="alert alert-danger">
			        @foreach ($errors->all() as $error)
			            {{ $error }}<br>        
			        @endforeach
			    </div>
			@endif

			@if(Session::has('message'))
			    <div class="alert alert-info">
			    	{!! session('message') !!}
			    </div>
			@endif

		</div>

		<div class="col-xs-12">

			<div class="input-group">
				{{ Form::label('quote', 'Quote:', array('class' => 'required')) }}
				{{ Form::textarea('quote', $quote->quote, array('class' => 'form-control')) }}
				<small class="text-muted">De inhoud van het citaat.</small>
			</div>

			<div class="input-group">
				{{ Form::label('author', 'Author:', array('class' => 'address')) }}
				{{ Form::text('author', $quote->author, array('class' => 'form-control')) }}
				<small class="text-muted">Naam van de auteur.</small>
			</div>

			<div class="input-group">
				{{ Form::submit('Opslaan', array('class'=>'button')) }}
			</div>

		</div>

	{{ Form::close() }}
@endsection
