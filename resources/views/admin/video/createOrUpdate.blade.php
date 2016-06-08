@extends('layout.admin')

@section('title', 'New Video')

@section('content')
	{{ Form::model($video, array('route' =>	$action, 'class' => 'col-xs-12'), 'Selecteer een category') }}
	<div class="col-xs-12 col-md-6">
		<div class="input-group">
			{{ Form::label('title', 'Titel:', array('class' => 'address')) }}
			{{ Form::text('title', '', array('class' => 'form-control')) }}
			<small class="text-muted">De hoofding van de video.</small>
		</div>

		<div class="input-group">
			{{ Form::label('slug', 'Slug:', array('class' => 'address')) }}
			{{ Form::text('slug', '', array('class' => 'form-control')) }}
			<small class="text-muted">De leesbare hyperlink van de video.<br/>bv .../videos/<b>example-url</b></small>
		</div>

		<div class="input-group">
			{{ Form::label('vimeo', 'Vimeo URL:', array('class' => 'address')) }}
			{{ Form::text('vimeo', '', array('class' => 'form-control')) }}
			<small class="text-muted">Het unieke nummer van de video op Vimeo.<br/>bv vimeo.com/<b>123456</b></small>
		</div>

		<div class="input-group">
			{{ Form::label('speaker', 'Spreker:', array('class' => 'address')) }}
			{{ Form::select('speaker', $speakerList, $video->speaker_id, array('class' => 'form-control')) }}
			<small class="text-muted">De spreker in deze video.</small>
		</div>

		<div class="tag-list">
			@foreach ($categories as $category)
				<div class="tag">
					{{ Form::checkbox('categories[]', $category->id, in_array($category->id, $video->categories->pluck('id')->all()), ['id'=>'category-' . $category->id]) }}
					{{ Form::label('category-' . $category->id, $category->name) }}
				</div>
			@endforeach
			<small class="text-muted">De categorieën waartoe deze video toebehoort.</small>
		</div>
	</div>

	<div class="col-xs-12 col-md-6">
		<div class="input-group">
			{{ Form::label('short_description', 'Korte beschrijving:', array('class' => 'address')) }}
			{{ Form::textarea('short_description', '', array('class' => 'form-control')) }}
			<small class="text-muted">Instructions</small>
		</div>
		
		<div class="input-group">
			{{ Form::label('long_description', 'Lange beschrijving:', array('class' => 'address')) }}
			{{ Form::textarea('long_description', '', array('class' => 'form-control')) }}
			<small class="text-muted">Instructions</small>
		</div>
	</div>

	<div class="col-xs-12">
		<div class="input-group">
			{{ Form::submit('Opslaan', array('class'=>'button')) }}
		</div>
	</div>
	{{ Form::close() }}
@endsection