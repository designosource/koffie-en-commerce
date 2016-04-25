@extends('layout.master')

@section('title', 'Video Overview')

@section('content')
	<div class="container">
		<h1>Videos</h1>
		<a href="{{action('HomeController@index')}}">
            <b>Home</b> /
        </a>
        <br>
        @foreach ($categories as $filter)
			<br/><a href="?filter={{$filter->category_id}}">{{$filter->category_name}}</a>
		@endforeach
		@foreach ($data as $video)
		    <p>This is video <a href="{{action('VideoController@detail',['id' => $video->video_id])}}"><b>{{$video->video_title}}</b></a></p>
		    <p>Their description is <b>{{$video->video_description}}</b></p>
		    <p>Their category is <b>{{$video->video_category_id}}</b></p>
		    <hr>
		@endforeach
	</div>
@endsection