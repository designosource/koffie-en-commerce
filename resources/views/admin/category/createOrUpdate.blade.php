@extends('layout.admin')

@section('title', 'New Video')

@section('content')	
	{{ Form::model($category, array('route' =>	$action , 'files'=>true), 'Selecteer een category') }}
		<div>
			{{ Form::label('name', 'Naam:', array('class' => 'address')) }}
			{{ Form::text('name') }}
		</div>

		<div>
			{{ Form::label('slug', 'slug:', array('class' => 'address')) }}
			{{ Form::text('slug') }}
		</div>

		<div>
			{{ Form::label('description', 'Beschrijving:', array('class' => 'address')) }}
			{{ Form::textarea('description') }}
		</div>

		<div>
			@if($category->image)
				{{ Html::image('uploads/' . $category->image) }}
			@endif
			
			{!! Form::file('image') !!}
		</div>
		
		<div>
			{{ Form::submit('Send this form!') }}
		</div>
	{{ Form::close() }}
@endsection
