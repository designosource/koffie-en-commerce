@extends('layout.master')

@section('title', 'Category Overview')

@section('content')
    <div class="container">
        <h1>Category {{$category->name}}</h1>
        <br>
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
