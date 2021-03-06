@extends('layout.master')

@section('title', 'Category Overview')

@section('content')

  <div class="container-fluid banner">
    <div class="headersmall">
      <div
        class="categorien"
        style=" background-image: url('{{ empty($category->image) ? 'http://www.placehold.it/999x666' : '/uploads/'.$category->image }}')">
        <header>
          <h1 class="categorieen__title">{{$category->name}}</h1>
        </header>
      </div>
    </div>
    <div class="catego-info">
      <div class="wrapp">
      <p class="catego-info__description">{{$category->description}}</p>
        </div>
    </div>
    <div class="category filter">
      @foreach($category->children as $subCategory)
        <a href="{{$subCategory->slug}}"><span class="filter--name namecat_parent">{{$subCategory->name}}</span></a>
      @endforeach
    </div>
  </div>

  <section class="gallery clearfix">
    @foreach ($videos as $video)
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
    @endforeach
  </section>

@endsection
