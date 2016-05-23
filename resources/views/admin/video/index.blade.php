@extends('layout.master')

@section('title', 'Video Overview')

@section('content')
	<div class="container">
		<h1>Videos</h1>
		<a href="{{action('PageController@index')}}">
			<b>Home</b> /
		</a>
		<br>
	
		<div>
			<h2>VIDEO'S</h2>
			@foreach ($videos as $video)
				<a href="{{route('admin_videos_edit', $video->id)}}">{{$video->title}}</a>
			@endforeach
		</div>
	</div>
@endsection
