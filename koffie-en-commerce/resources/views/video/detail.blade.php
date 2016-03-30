@extends('layout.master')

@section('title', 'User Detail')

@section('content')
	<div class="container">
		<h1>Video Detail</h1>
        <ul>
            <li>
                <a href="{{action('VideoController@index')}}">
                    <b>Video Index</b> /videos
                </a>
            </li>
            <li>
            	<a href="{{action('HomeController@index')}}">
		            <b>Home</b> /
		        </a>
            </li>
        </ul>
        <ul>
        	<li>{{$data->video_id}}</li>
        	<li>{{$data->video_title}}</li>
        	<li>{{$data->video_description}}</li>
        </ul>
	</div>
@endsection