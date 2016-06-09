@extends('layout.admin')

@section('title', $title.' '.$speaker->name)

@section('content')	
	{{ Form::model($speaker, array('route' =>	$action , 'files'=>true, 'class' => 'col-xs-12'), 'Selecteer een speaker') }}

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
				{{ Form::label('name', 'Naam:', array('class' => 'address')) }}
				{{ Form::text('name', $speaker->name, array('class' => 'form-control')) }}
				<small class="text-muted">Volledige naam van de spreker.</small>
			</div>

			<div class="input-group">
				{{ Form::label('title', 'Titel:', array('class' => 'required')) }}
				{{ Form::text('title', $speaker->title, array('class' => 'form-control')) }}
				<small class="text-muted">De jobtitel van de spreker.</small>
			</div>

			<div class="input-group">
				{{ Form::label('email', 'Email:', array('class' => 'address')) }}
				{{ Form::email('email', $speaker->email, array('class' => 'form-control')) }}
				<small class="text-muted">Het e-mailadres van de spreker.</small>
			</div>

			<div class="input-group">
				{{ Form::label('short_description', 'Korte beschrijving:', array('class' => 'address')) }}
				{{ Form::textarea('short_description', $speaker->short_description, array('class' => 'form-control')) }}
				<small class="text-muted">De beschijving die bij de spreker komt te staan op een video pagina.</small>
			</div>

			<div class="input-group">
				{{ Form::label('long_description', 'Lange beschrijving:', array('class' => 'address')) }}
				{{ Form::textarea('long_description', $speaker->long_description, array('class' => 'form-control')) }}
				<small class="text-muted">De beschrijving die op de pagina van de spreker zelf komt, links worden automatisch gedetecteerd en omgezet wanneer ze voorkomen.</small>
			</div>

		</div>

		<div class="col-xs-12 col-md-6">

			<div class="input-group">
				@if($speaker->avatar)
					{{ Html::image('uploads/' . $speaker->avatar) }}
				@endif
				
				{!! Form::file('avatar') !!}
				<small class="text-muted">Een typerende afbeelding voor de spreker, <b>REQUIREMENTS TO WRITE or FIELD TO ADD</b></small>
			</div>

		</div>

		<div class="col-xs-12">

			<div class="input-group">
				{{ Form::submit('Opslaan', array('class'=>'button')) }}
			</div>

		</div>
		
	{{ Form::close() }}
@endsection
