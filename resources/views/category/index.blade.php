@extends('layout.master')

@section('title', 'Category Overview')

@section('content')
    <div class="container">
        <h1>Category {{$category->category_name}}</h1>
        <a href="{{action('HomeController@index')}}">
            <b>Home</b> /
        </a>
        <br>
        @foreach ($videos as $video)
            <p>This is video <a href="{{action('VideoController@detail',['id' => $video->video_id])}}"><b>{{$video->video_title}}</b></a></p>
            <p>Their description is <b>{{$video->video_description}}</b></p>
            <p>category {{$video->category_name}}</p>
            <hr>
        @endforeach
    </div>
@endsection