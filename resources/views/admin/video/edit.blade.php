{{ Form::model($video, array('route' => array('admin_videos_edit', $video->id))) }}
    {{ Form::label('title', 'Titel:', array('class' => 'address')) }}
    {{ Form::text('title') }}

    {{ Form::label('slug', 'slug:', array('class' => 'address')) }}
    {{ Form::text('slug') }}

	{{ Form::label('category', 'Categorie:', array('class' => 'address')) }}
    {{ Form::select('category', $categories) }}

    {{ Form::submit('Send this form!') }}
{{ Form::close() }}
