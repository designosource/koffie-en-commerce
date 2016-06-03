@extends('layout.master')

@section('title', 'Category Overview')

@section('content')
	<div class="container admin">
		<h1>ADMIN DASHBOARD</h1>
		<div>
			<h2>CATEGORIEËN</h2>
			<div class="row">
				@foreach ($categories as $category)
					<div class="col-md-4 admin-video">
						<a href="{{route('admin_categories_edit', $category->id)}}" class="category-thumb">
							<img src="{{ $category->thumb != "" ? $category->thumb : 'https://placeholdit.imgix.net/~text?txtsize=60&txt=640%C3%97360&w=640&h=360' }}" alt="" id="thumb-{{$category->vimeo}}">
						</a>
						<div>
							<h3 class="title"><a href="{{route('admin_categories_edit', $category->id)}}">{{$category->name}}</a></h3>
						</div>						
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection
