@extends('layout.admin')

@section('title', 'Video Overview')

@section('content')
	<h2>Quotes</h2>
	<div class="row">
		@foreach ($quotes as $quote)
			<blockquote>
				<a href="{{route('admin_quotes_edit', $quote->id)}}">{{$quote->quote}}</a>
			</blockquote>
		@endforeach
	</div>
@endsection
