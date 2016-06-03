@extends('layout.admin')

@section('title', 'New Video')

@section('content')
	{{ Form::model($video, array('route' =>	$action), 'Selecteer een category') }}
		<div>
			{{ Form::label('title', 'Titel:', array('class' => 'address')) }}
			{{ Form::text('title') }}
		</div>

		<div>
			{{ Form::label('slug', 'slug:', array('class' => 'address')) }}
			{{ Form::text('slug') }}
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
			{{ Form::label('vimeo', 'Video URL:', array('class' => 'address')) }}
			{{ Form::text('vimeo') }}
		</div>

		<div>
			{{ Form::label('speaker', 'Speaker:', array('class' => 'address')) }}
			{{ Form::select('speaker', $speakerList, $video->speaker_id) }}
		</div>

		@foreach ($categories as $category)
			<div>
				{{ Form::checkbox('categories[]', $category->id, in_array($category->id, $video->categories->pluck('id')->all()), ['id'=>'category-' . $category->id]) }}
				{{ Form::label('category-' . $category->id, $category->name) }}
			</div>
		@endforeach

		<div>
			{{ Form::submit('Send this form!') }}
		</div>
	{{ Form::close() }}
@endsection