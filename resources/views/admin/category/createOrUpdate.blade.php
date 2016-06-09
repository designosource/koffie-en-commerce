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

		<div class="input-group">
			{{ Form::label('parent', 'Parent:', array('class' => 'address')) }}
			{{dump($categories)}}
			{{ Form::select('parent', array_merge([null=>'Geen parent'], $categories->toArray()), $category->parent_id, array('class' => 'form-control')) }}
			<small class="text-muted">De parent van deze category.</small>
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
