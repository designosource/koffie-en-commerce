@extends('layout.admin')

@section('title', 'Video Overview')

@section('content')
	<ul class="admin-list clearfix">
		@foreach ($videos as $video)
			<li class="col-xs-12 admin-list-row">
				<a href="{{route('admin_videos_edit', $video->id)}}">
					<div class="col-xs-2 list-thumb"
						style="background-image:url('{{ $video->vimeo_thumb != "" ? $video->vimeo_thumb : 'https://placehold.it/640x360' }}')">
					</div>
					<div class="col-xs-10">
						<h3 class="title"><a href="{{route('admin_videos_edit', $video->id)}}">{{$video->title}}</a><small>by&nbsp;{{$video->speaker->name}}</small></h3>
						<div class="description">
							{{$video->long_description}}
						</div>
						<div class="categories">
							@foreach ($video->categories as $category)
								<span class="label label-primary">{{$category->name}}</span>
							@endforeach
						</div>
					</div>
				</a>					
			</li>
		@endforeach
	</ul>
@endsection
