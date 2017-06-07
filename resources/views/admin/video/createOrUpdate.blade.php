@extends('layout.admin')

@section('title', $title.' '.$video->title)

@section('content')
	{{ Form::model($video, array('route' =>	$action, 'class' => 'col-xs-12'), 'Selecteer een category') }}

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

	<div class="col-xs-12 col-md-6">

		<div class="input-group">
			{{ Form::label('title', 'Titel:', array('class' => 'required')) }}
			{{ Form::text('title', $video->title, array('class' => 'form-control')) }}
			<small class="text-muted">De titel van de video. Max 45 karakters.</small>
		</div>

		<div class="input-group">
			{{ Form::label('slug', 'Slug:', array('class' => 'required')) }}
			{{ Form::text('slug', $video->slug, array('class' => 'form-control')) }}
			<small class="text-muted">De leesbare hyperlink van de video.<br/>bv .../videos/<b>example-slug</b></small>
		</div>

		<div class="input-group">
			{{ Form::label('vimeo', 'Vimeo URL:', array('class' => 'address')) }}
			{{ Form::text('vimeo', $video->vimeo, array('class' => 'form-control')) }}
			<small class="text-muted">Het unieke nummer van de video op Vimeo.<br/>bv vimeo.com/<b>123456</b></small>
		</div>

		<div class="input-group">
			{{ Form::label('speaker', 'Spreker:', array('class' => 'address')) }}
			{{ Form::select('speaker', $speakerList, $video->speaker_id, array('class' => 'form-control')) }}
			<small class="text-muted">De spreker in deze video.</small>
		</div>
		<!--
		<div class="tag-list">
			<label>Onderwerp:</label><br/>
			@php
			/*
			@foreach ($categories as $category)
				@if(!$category->parent)
					<div class="parent-tag">
						{{ Form::checkbox('categories[]', $category->id, in_array($category->id, $video->categories->pluck('id')->all()), ['id'=>'category-' . $category->id]) }}
						{{ Form::label('category-' . $category->id, $category->name) }}
					</div>
				@endif
				@if($category->children)
					@foreach($category->children as $child)
						<div class="child-tag">
							{{ Form::checkbox('categories[]', $child->id, in_array($child->id, $video->categories->pluck('id')->all()), ['id'=>'category-' . $child->id]) }}
							{{ Form::label('category-' . $child->id, $child->name) }}
						</div>
					@endforeach
				@endif
			@endforeach
			<small class="text-muted">De categorieën waartoe deze video toebehoort.</small>
			*/
			@endphp
		</div>
		-->
	</div>

	<div class="col-xs-12 col-md-6">
		<div class="input-group">
			{{ Form::label('short_description', 'Korte beschrijving:', array('class' => 'address')) }}
			{{ Form::textarea('short_description', $video->short_description, array('class' => 'form-control')) }}
			<small class="text-muted">Een korte, intrigerende beschrijving van de video. Max 170 karakters.</small>
		</div>
		
		<div class="input-group">
			{{ Form::label('long_description', 'Lange beschrijving:', array('class' => 'address')) }}
			{{ Form::textarea('long_description', $video->long_description, array('class' => 'form-control')) }}
			<small class="text-muted">Een gedetailleerde beschrijving van de video, links worden automatisch gedetecteerd en omgezet wanneer ze voorkomen.Max 250 karakters.</small>
		</div>
	</div>
	<div class="col-xs-12">
		<div class="tag-list col-xs-12">
			<label>Onderwerp / Categorie:</label><br/>
			<small class="text-muted">De categorieën waartoe deze video toebehoort. Er zijn in totaal 6 hoofdcategorieën. Elke hoofdcategorie kan een onbeperkt aantal subcategorieën bevatten.
			Selecteer altijd zowel de hoofdcategorie als een mogelijkse subcategorie.</small>
			@foreach ($categories as $category)
				<div class="col-xs-2">
				@if(!$category->parent)
					<div class="parent-tag">
						{{ Form::checkbox('categories[]', $category->id, in_array($category->id, $video->categories->pluck('id')->all()), ['id'=>'category-' . $category->id]) }}
						{{ Form::label('category-' . $category->id, $category->name) }}
					</div>
				@endif
				@if($category->children)
					@foreach($category->children as $child)
						<div class="child-tag">
							{{ Form::checkbox('categories[]', $child->id, in_array($child->id, $video->categories->pluck('id')->all()), ['id'=>'category-' . $child->id]) }}
							{{ Form::label('category-' . $child->id, $child->name) }}
						</div>
					@endforeach
				@endif
				</div>
			@endforeach
		</div>
		<div class="input-group">
		<br>
			{{ Form::submit('Opslaan', array('class'=>'button')) }}
		</div>
	</div>
	{{ Form::close() }}
@endsection