@extends('layout.admin')

@section('title', 'New Video')

@section('content')	
	{{ Form::model($speaker, array('route' =>	$action , 'files'=>true), 'Selecteer een speaker') }}
		<div>
			{{ Form::label('name', 'Naam:', array('class' => 'address')) }}
			{{ Form::text('name') }}
		</div>

		<div>
			{{ Form::label('title', 'title:', array('class' => 'address')) }}
			{{ Form::text('title') }}
		</div>

		<div>
			{{ Form::label('email', 'Email:', array('class' => 'address')) }}
			{{ Form::email('email') }}
		</div>

		<div>
			@if($speaker->avatar)
				{{ Html::image('uploads/' . $speaker->avatar) }}
			@endif
			
			{!! Form::file('avatar') !!}
		</div>

		<div>
			{{ Form::label('short_description', 'Korte beschrijving:', array('class' => 'address')) }}
			{{ Form::textarea('short_description') }}
		</div>

		<div>
			{{ Form::label('long_description', 'Lange beschrijving:', array('class' => 'address')) }}
			{{ Form::textarea('long_description') }}
		</div>
		
		<div>
			{{ Form::submit('Send this form!') }}
		</div>
	{{ Form::close() }}
@endsection
