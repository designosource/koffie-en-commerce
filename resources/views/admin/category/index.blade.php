@extends('layout.admin')

@section('title', 'Categorieën')

@section('content')
	<ul class="admin-list clearfix category-list">
		@foreach ($categories as $category)
			<li class="col-xs-12 admin-list-row">
				<a href="{{route('admin_categories_edit', $category->id)}}">
					<div class="col-xs-2 list-thumb"
						style="background-image:url('{{ $category->image != "" ? '/uploads/'.$category->image : 'https://placehold.it/640x360' }}')">
					</div>
					<div class="col-xs-10 info">
						<h3 class="title"><a href="{{route('admin_categories_edit', $category->id)}}">{{$category->name}}</a><small>{{$category->slug}}</small></h3>
						<div class="description">
							{{$category->description}}
						</div>
						<div class="videos">
							@foreach ($category->videos as $video)
								<a href="{{route('admin_videos_edit', $video->id)}}" class="label label-primary">
									{{$video->title}}
								</a>
							@endforeach
						</div>
					</div>
				</a>
			</li>
		@endforeach
	</ul>
@endsection
