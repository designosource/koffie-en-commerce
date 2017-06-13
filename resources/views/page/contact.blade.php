@extends('layout.master')

@section('title', 'Contact')

@section('content')
<div class="container-fluid banner">
  <div class="headerlarge">
      <div class="contact">
        <header>
          <h1>Contacteer Ons</h1>
  			</header>
      </div>
  </div>
  @if (session('message'))
    <div class="alert alert-success">
      {{ session('message') }}
    </div>
  @endif
<section class="introform">
  <div class="wrapp">
  <h2>Heb je vragen?</h2>
  <p>Voel je je geïnspireerd door de getuigenissen en onderwerpen van Koffie &amp; Commerce? </p>
  <p>
    Wil je meer weten of misschien samen een probleem onder de loep nemen in verband met de zakelijke kant van media? <br>Vul dan onderstaand formulier in en je komt rechtstreeks in contact met de Thomas More experts More achter dit initiatief.
  </p>
    @if($errors)
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
    @endif
    {!! Form::open(array('route' => 'contact_email', 'class' => 'form')) !!}
    <div class="form-group">
      {!! Form::text('voornaam', null,
          array('required',
                'class'=>'form-control',
                'placeholder'=>'Voornaam')) !!}
    </div>
    <div class="form-group">
      {!! Form::text('naam', null,
          array('required',
                'class'=>'form-control',
                'placeholder'=>'Naam')) !!}
    </div>
    <div class="form-group">
      {!! Form::text('email', null,
          array('required',
                'class'=>'form-control',
                'placeholder'=>'Emailadres')) !!}
    </div>
    <div class="form-group">
      {!! Form::textarea('message', null,
          array('required',
                'class'=>'form-control',
                'size' =>'30x5',
                'placeholder'=>'Stel hier je vraag')) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Verzenden',
        array('class'=>'btn btn-default')) !!}
    </div>
    {!! Form::close() !!}

</div>
</section>
</div>

@endsection
