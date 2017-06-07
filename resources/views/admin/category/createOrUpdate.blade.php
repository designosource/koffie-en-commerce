@extends('layout.admin')

@section('title', $title.' '.$category->name)

@section('content')	
	{{ Form::model($category, array('route' =>	$action , 'files'=>true, 'class' => 'col-xs-12'), 'Selecteer een category') }}
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
				{{ Form::label('name', 'Naam:', array('class' => 'required')) }}
				{{ Form::text('name', $category->name, array('class' => 'form-control')) }}
				<small class="text-muted">Naam van de categorie.</small>
			</div>

			<div class="input-group">
				{{ Form::label('slug', 'Slug:', array('class' => 'required')) }}
				{{ Form::text('slug', $category->slug, array('class' => 'form-control')) }}
				<small class="text-muted">De leesbare hyperlink van de video. <br/>bv .../categorieen/<b>example-slug</b></small>
			</div>

			<div class="input-group">
				{{ Form::label('description', 'Beschrijving:', array('class' => 'address')) }}
				{{ Form::textarea('description', $category->description, array('class' => 'form-control')) }}
				<small class="text-muted">Een beschrijving van de categorie. Max 250 karakters.</small>
			</div>

			<div class="input-group">
				{{ Form::label('parent', 'Parent:', array('class' => 'address')) }}
				{{ Form::select('parent', array_merge([0=>'Geen Parent'], $categories->toArray()), $category->parent_id, array('class' => 'form-control')) }}
				<small class="text-muted">De parent van deze category. Zonder parent wordt dit veld als een hoofdcategorie beschouwd.</small>
			</div>

		</div>

		<div class="col-xs-12 col-md-6">

			<div class="input-group">
				@if($category->image)
					{{ Html::image('uploads/' . $category->image) }}
				@endif
				
				{!! Form::file('image') !!}
				<small class="text-muted">Een typerende afbeelding voor deze categorie.<br>Deze afbeeldingen hebben een minimumresolutie van <b>1800x400</b></small>
			</div>

		</div>

		<div class="col-xs-12">

			<div class="input-group">
				{{ Form::submit('Opslaan', array('class'=>'button')) }}
			</div>

		</div>

		
	{{ Form::close() }}
@endsection
