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
		<div class="category col-xs-12">
			<h4>Klik op één van de categorieën om een overzicht van alle videos van die categorie te krijgen.</h4>
			<br>
			@foreach ($categories as $category)
				<div class="col-xs-12 col-md-2">
					@if(!$category->parent)
						<div class="name_cat_container col-xs-12">
							<a href="categorieen/{{$category->slug}}"><span class="namecat_parent">{{$category->name}}</span></a>
						</div>
					@endif
					@if($category->children)
						@foreach($category->children as $child)
							<div class="col-xs-12">
								<a href="categorieen/{{$child->slug}}"><span class="namecat_child">{{$child->name}}</span></a>
							</div>
						@endforeach
					@endif
				</div>
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
