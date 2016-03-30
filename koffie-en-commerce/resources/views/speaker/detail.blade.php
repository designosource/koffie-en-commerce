@extends('layout.master')

@section('title', 'User Detail')

@section('content')
	<div class="container">
		<h1>User {{$data}}</h1>
		<a href="{{action('HomeController@index')}}">
            <b>Home</b> /
        </a>
	</div>
@endsection