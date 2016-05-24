@extends('layout.master')

@section('title', 'Category Overview')

@section('content')
    <div class="container">
        <h1>Category {{$category->name}}</h1>
        <br>
        {{dump($videos)}}
        @foreach ($videos as $video)
            {{dump($video)}}
            <p>This is video <a href="{{action('VideoController@detail',['id' => $video->video_id])}}"><b>{{$video->title}}</b></a></p>
            <p>Their description is <b>{{$video->description}}</b></p>
            <p>category {{$video->name}}</p>
            <hr>
        @endforeach
    </div>
@endsection
