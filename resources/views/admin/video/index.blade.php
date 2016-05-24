@extends('layout.master')

@section('title', 'Video Overview')

@section('content')
	<div class="container">
		{{dump($user)}}
	
		<div>
			<h2>VIDEO'S</h2>
			@foreach ($videos as $video)
				<a href="{{route('admin_videos_edit', $video->id)}}">{{$video->title}}</a>
			@endforeach
		</div>
	</div>
@endsection
