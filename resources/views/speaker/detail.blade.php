@extends('layout.master')

@section('title', 'User Detail')

@section('content')
<div class="container-fluid banner">
  <div class="headersmall">
      <div class="categorien"
        style=" background-image: url('{{ empty($speaker->avatar) ? 'http://www.placehold.it/999x666' : '/uploads/'.$speaker->avatar }}')">
        <header>
          <h1 class="categorieen__title"></h1>
  			</header>
      </div>
  </div>
  <div class="infospreker introduction">
    <div class="wrapp">
      <h2 class="infospreker__title"> {{$speaker->name}} </h2>
      <p class="infospreker__function"> {{$speaker->title}} </p>
      <p class="infospreker__mail"> {{$speaker->email}} </p>
      <p class="infospreker__description">
        <?php
            $url = '@(http)?(s)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
            $parsed = preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0">$0</a>', $speaker->long_description);
            echo $parsed;
        ?>
      </p>
    </div>
  </div>
  @if($top_video)
  <section class="spreker">
    <div>
      <div class="col-xs-12 col-sm-7"
        style=" background-image: url('{{ empty($top_video->vimeo_thumb) ? 'http://www.placehold.it/350x350' : $top_video->vimeo_thumb }}')">
      </div>
      <div class="col-xs-12 col-sm-5">
        <div class="content">
          <h3>{{$top_video->title}}</h3>
          <p>
            {{$top_video->short_description}}
          </p>
          <ul class="social">
            <li><a href="#" target="_blank" class="social__left">
              {!! Html::image('image/twitter.png' , 'twitterbtn', array('class' => 'social__twitter'))!!} Share on twitter
            </a></li>
            <li><a href="#" target="_blank" class="social__right">
              {!! Html::image('image/facebook.png' , 'facebookbtn', array('class' => 'social__facebook'))!!} Share on facebook
            </a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  @endif

  @if(!empty($all_videos[0]))
  <div class="gallery clearfix">
    @foreach ($all_videos as $video)
    @if ($video->id != $top_video->id)
    <a href="/videos/{{$video->slug}}">
      <div
        class="gallery-item col-xs-6 col-sm-4 col-lg-3"
        style=" background-image: url('{{ empty($video->vimeo_thumb) ? 'http://www.placehold.it/350x350' : $video->vimeo_thumb }}')">
        <div class="content">
          <div class="gallery-item-description">
            <h2>{{$video->title}}</h2>
            <p>{{$video->short_description}}</p>
          </div>
        </div>
      </div>
    </a>
    @endif
    @endforeach
  </div>
  @else
    <p class="emptystate">
        Deze gebruik heeft nog geen videos toegevoegd.
    </p>
  @endif
  <section class="back">
    <a href="/videos">
    <div class="btn">
    Ga naar overzicht
    </div>
    </a>
  </section>
</div>
@endsection
