@extends('layout.admin')

@section('title', 'New Video')

@section('content')	
	{{ Form::model($quote, array('route' =>	$action , 'files'=>true), 'Selecteer een quote') }}
		<div>
			{{ Form::label('quote', 'Quote:', array('class' => 'address')) }}
			{{ Form::text('quote') }}
		</div>

		<div>
			{{ Form::label('author', 'Author:', array('class' => 'address')) }}
			{{ Form::text('author') }}
		</div>
		
		<div>
			{{ Form::submit('Send this form!') }}
		</div>
	{{ Form::close() }}
@endsection
