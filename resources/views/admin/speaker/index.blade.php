@extends('layout.admin')

@section('title', 'Speaker Overview')

@section('content')
	<h2>Speaker's</h2>
	<div class="row">
		@foreach ($speakers as $speaker)
			<div class="col-md-4 admin-video">
				<a href="{{route('admin_speakers_edit', $speaker->id)}}" class="speaker-thumb">
					<img src="{{ $speaker->avatar != "" ? '/uploads/'.$speaker->avatar : 'https://placeholdit.imgix.net/~text?txtsize=60&txt=640%C3%97360&w=640&h=360' }}" alt="" id="thumb-{{$speaker->id}}">
				</a>
				<div>
					<h3 class="title"><a href="{{route('admin_speakers_edit', $speaker->id)}}">{{$speaker->name}}</a></h3>
				</div>						
			</div>
		@endforeach
	</div>
@endsection
