@extends('layout.admin')

@section('title', 'Video Overview')

@section('content')
	<h2>Video's</h2>
	<ul class="admin-list clearfix">
		@foreach ($videos as $video)
			<li class="col-xs-12 admin-list-row">
				<a href="{{route('admin_videos_edit', $video->id)}}" class="video-thumb col-xs-2">
					<img src="{{ $video->vimeo_thumb != "" ? $video->vimeo_thumb : 'https://placehold.it/640x360' }}" alt="{{$video->title}}" id="thumb-{{$video->vimeo}}">
				</a>
				<div class="col-xs-10">
					<h3 class="title"><a href="{{route('admin_videos_edit', $video->id)}}">{{$video->title}}</a><small>by&nbsp;{{$video->speaker->name}}</small></h3>
					<div class="description">
						{{$video->long_description}}
					</div>
					<div class="categories">
						@foreach ($video->categories as $category)
							<a href="#" class="category-item">{{$category->name}}</a>
						@endforeach
					</div>
				</div>						
			</li>
		@endforeach
	</ul>
@endsection
