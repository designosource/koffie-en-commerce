@extends('layout.admin')

@section('title', 'Sprekers')

@section('content')
	<ul class="admin-list clearfix">
		@foreach ($speakers as $speaker)
			<li class="col-xs-12 admin-list-row">
				<a href="{{route('admin_speakers_edit', $speaker->id)}}">
					<div class="col-xs-2 list-thumb"
						style="background-image:url('{{ $speaker->avatar != "" ? '/uploads/'.$speaker->avatar : 'https://placehold.it/640x360' }}')">
					</div>
					<div class="col-xs-10 info">
						<h3 class="title"><a href="{{route('admin_speakers_edit', $speaker->id)}}">{{$speaker->name}}</a><small>{{$speaker->title}}</small></h3>
						<div class="description">
							{{$speaker->short_description}}
						</div>
						<div class="categories">
							@foreach ($speaker->videos as $video)
								<a href="{{route('admin_videos_edit', $video->id)}}" class="label label-primary">
									{{$video->title}}
								</a>
							@endforeach
						</div>
					</div>
					<form class="delete" action="{{ route('admin_speakers_delete', $speaker->id) }}" method="GET">
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token" value="{{ csrf_token() }}" />
						<input type="submit" class="btn btn-danger" value="Verwijderen">
					</form>
				</a>					
			</li>
		@endforeach
			<script>
                $(".delete").on("submit", function(){
                    return confirm("Ben je zeker dat je deze spreker wil verwijderen?");
                });
			</script>
	</ul>
@endsection
