@extends('layout.master')

@section('title', 'Video Overview')

@section('content')
	<div class="container-fluid">
		<div class="headerlarge">
			<div class="video">
			<header>
				<h1 class="img-responsive" >Videos</h1>
			</header>
			</div>
		</div>
		<div class="tekst">
			<p>Dè bron van inspirerende verhalen en informatie over de zakelijke kant van media. Inhoud creëeren is uitdagend op zich, maar er centen mee verdienen is vaak nog het lastigste van al.
Ontdek de verschillende navigeermogelijkheden om de onderwerpen, verhalen en media-experten waar jouw interesse naar uitgaat te exploreren.</p>
		</div>
		<div class="category">
			@foreach ($categories as $category)
				<a href="#"><span class="namecat">{{$category->name}}</span></a>
			@endforeach
		</div>
		<div class="videos">
			<h2>VIDEO'S</h2>
			@foreach ($videos as $video)
				<h3>{{$video->title}}</h3>
				{{dump($video)}}
				<hr>
				<hr>
			@endforeach
		</div>
	</div>
@endsection
