@extends('layout.master')

@section('title', 'Video Overview')

@section('content')

<div class="container-fluid banner">
  <div class="headerlarge">
      {!! Html::image('image/contact.png' , 'header image', array('class' => 'header_large img-responsive'))!!}
      <header>
          <h1 class="img-responsive">Contacteer ons</h1>
      </header>
  <br>
</div>

<section class="introform">
  <h2>Heb je vragen?</h2>
  <p>Voel je je geïnspireerd door de getuigenissen en onderwerpen van Koffie &amp; Commerce? </p>
  <p>
    Wil je meer weten of misschien samen een probleem onder de loep nemen in verband met de zakelijke kant van media? Vul dan onderstaand formulier in en je komt rechtstreeks in contact met de Thomas More experts More achter dit initiatief.
  </p>
</section>
</div>

@endsection
