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
			<div class="wrapp">
			<p>Dè bron van inspirerende verhalen en informatie over de zakelijke kant van media. Inhoud creëeren is uitdagend op zich, maar er centen mee verdienen is vaak nog het lastigste van al.
Ontdek de verschillende navigeermogelijkheden om de onderwerpen, verhalen en media-experten waar jouw interesse naar uitgaat te exploreren.</p>
		</div>
		</div>
		<div class="category">
			@foreach ($categories as $category)
				<a href="#"><span class="namecat">{{$category->name}}</span></a>
			@endforeach
		</div>
		<section class="gallery clearfix">
		@foreach ($videos as $video)
		<a href="/videos/{{$video->slug}}"
			class="@foreach ($video->categories as $category)tag-{{$category->slug}} @endforeach">
		  <div
		    class="gallery-item col-xs-6 col-sm-4 col-lg-3"
		    style=" background-image: url('{{ empty($video->vimeo_thumb) ? 'http://www.placehold.it/350x350' : $video->vimeo_thumb }}')">
		    <div class="content">
		      <div class="gallery-item-description">
		        <h2>{{$video->title}}</h2>
		        <p>{{$video->short_description}}</p>
		      </div>
		    </div>
		  </div>
		</a>
		@endforeach
		</section>
	</div>
@endsection
