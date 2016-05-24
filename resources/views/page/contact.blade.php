@extends('layout.master')

@section('title', 'Video Overview')

@section('content')

<div class="container-fluid banner">
  <div class="headerlarge">
      <div class="contact">
      <header>
          <h1 class="img-responsive">Contacteer ons</h1>
      </header>
    </div>
</div>

<section class="introform">
  <h2>Heb je vragen?</h2>
  <p>Voel je je geïnspireerd door de getuigenissen en onderwerpen van Koffie &amp; Commerce? </p>
  <p>
    Wil je meer weten of misschien samen een probleem onder de loep nemen in verband met de zakelijke kant van media? <br>Vul dan onderstaand formulier in en je komt rechtstreeks in contact met de Thomas More experts More achter dit initiatief.
  </p>

  <form>
  <div class="form-group">
    <label for="firstname"></label>
    <input type="firstname" class="form-control" id="firstname" placeholder="Voornaam">
  </div>
  <div class="form-group">
    <label for="name"></label>
    <input type="name" class="form-control" id="name" placeholder="Naam">
  </div>
  <div class="form-group">
    <label for="email"></label>
    <input type="email" class="form-control" id="email" placeholder="Emailadress">
  </div>
  <div>
  <textarea class="form-control" rows="6" placeholder="Stel hier je vraag"></textarea>
</div>
  <button type="submit" class="btn btn-default">Verzenden</button>
</form>
</section>
</div>

@endsection
