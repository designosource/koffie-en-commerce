@extends('layout.master')

@section('title', 'Category Overview')

@section('content')
<style media="screen">
  .categorien{
    background-image:url("http://placehold.it/350x150");
  }
</style>
<div class="container-fluid banner">
  <div class="headersmall">
      <div class="categorien">
        <header>
          <h1 class="categorieen__title">{{$category->name}}</h1>
  			</header>
      </div>
  </div>
<div class="catego-info">
<p class="catego-info__description">{{$category->description}}</p>
</div>

        @foreach ($videos as $video)
            <p>This is video <a href="{{action('VideoController@detail',['id' => $video->slug])}}"><b>{{$video->title}}</b></a></p>
            <p>Their short description is <b>{{$video->short_description}}</b></p>
            <p>Their long description is <b>{{$video->long_description}}</b></p>
            <p>category</p>
            {{dump($video->categories())}}
            <hr>
        @endforeach
    </div>
@endsection
