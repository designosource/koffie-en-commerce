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
			<h2>Categories</h2>
			@foreach ($categories as $category)
				<br/><a href="{{action('VideoController@category',['slug' => $category->slug])}}">{{$category->name}}</a>
			@endforeach
		</div>
	
		<div>
			<h2>VIDEO'S</h2>
			@foreach ($videos as $video)
				{{dump($video)}}
			@endforeach
		</div>
	</div>
@endsection
