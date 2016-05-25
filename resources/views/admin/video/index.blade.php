@extends('layout.master')

@section('title', 'Video Overview')

@section('content')
	<div class="container admin">
		<h1>ADMIN DASHBOARD</h1>
		<div>
			<h2>VIDEO'S</h2>
			<div class="row">
				@foreach ($videos as $video)
					<div class="col-md-4 admin-video">
						<a href="{{route('admin_videos_edit', $video->id)}}" class="video-thumb">
							<img src="{{ $video->vimeo_thumb != "" ? $video->vimeo_thumb : 'https://placeholdit.imgix.net/~text?txtsize=60&txt=640%C3%97360&w=640&h=360' }}" alt="" id="thumb-{{$video->vimeo}}">
						</a>
						<div>
							<h3 class="title"><a href="{{route('admin_videos_edit', $video->id)}}">{{$video->title}}</a></h3>
							<div class="categories">
								@foreach ($video->categories as $category)
									<a href="#" class="category-item">{{$category->name}}</a>
								@endforeach
							</div>
						</div>						
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection
