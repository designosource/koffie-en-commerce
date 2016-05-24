{{ Form::model($video, array('route' => array('admin_videos_post_edit', $video->id)), 'Selecteer een category') }}
    {{ Form::label('title', 'Titel:', array('class' => 'address')) }}
    {{ Form::text('title') }}

    {{ Form::label('slug', 'slug:', array('class' => 'address')) }}
    {{ Form::text('slug') }}

	@foreach ($categories as $category)
		<div>
			{{ Form::checkbox('categories[]', $category->id, in_array($category->id, $video->categories->pluck('id')->all()), ['id'=>'category-' . $category->id]) }}
			{{ Form::label('category-' . $category->id, $category->name) }}
		</div>
	@endforeach

    {{ Form::submit('Send this form!') }}
{{ Form::close() }}

