@extends('layout.admin')

@section('title', 'Categorieën')

@section('content')
	<ul class="admin-list clearfix category-list">
		@foreach ($categories as $category)
			@if(!$category->parent)
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
					<form class="delete" action="{{ route('admin_categories_delete', $category->id) }}" method="GET">
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token" value="{{ csrf_token() }}" />
						<input type="submit" class="btn btn-danger" value="Verwijderen">
					</form>
				</a>
			</li>
			@endif
			@if($category->children)
					@foreach($category->children as $child)
						<li class="col-xs-12 admin-list-row category_child">
							<a href="{{route('admin_categories_edit', $child->id)}}">
								<div class="col-xs-2 list-thumb"
									 style="background-image:url('{{ $child->image != "" ? '/uploads/'.$child->image : 'https://placehold.it/640x360' }}')">
								</div>
								<div class="col-xs-10 info">
									<h3 class="title"><a href="{{route('admin_categories_edit', $child->id)}}">{{$child->name}}</a><small>{{$child->slug}}</small></h3>
									<div class="description">
										{{$child->description}}
									</div>
									<div class="videos">
										@foreach ($child->videos as $video)
											<a href="{{route('admin_videos_edit', $video->id)}}" class="label label-primary">
												{{$video->title}}
											</a>
										@endforeach
									</div>
								</div>
								<form class="delete" action="{{ route('admin_categories_delete', $category->id) }}" method="GET">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token" value="{{ csrf_token() }}" />
									<input type="submit" class="btn btn-danger" value="Verwijderen">
								</form>
							</a>
						</li>
					@endforeach
			@endif
		@endforeach
			<script>
                $(".delete").on("submit", function(){
                    return confirm("Ben je zeker dat je deze categorie wil verwijderen?");
                });
			</script>
	</ul>
@endsection
