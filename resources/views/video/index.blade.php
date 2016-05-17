@extends('layout.master')

@section('title', 'Video Overview')

@section('content')
	<div class="container">
		<h1>Videos</h1>
		<a href="{{action('PageController@index')}}">
            <b>Home</b> /
        </a>
        <br>

        @foreach ($categories as $category)
			<br/><a href="{{action('VideoController@category',['slug' => $category->slug])}}">{{$category->name}}</a>
		@endforeach

	</div>
@endsection
