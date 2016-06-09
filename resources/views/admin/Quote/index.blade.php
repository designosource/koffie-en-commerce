@extends('layout.admin')

@section('title', 'Citaten')

@section('content')
<div class="admin-list">
    @foreach ($quotes as $quote)
        <a href="{{route('admin_quotes_edit', $quote->id)}}" class="quote">
            <blockquote>
                {{$quote->quote}}
                <footer>{{$quote->author}}</footer>
            </blockquote>
        </a>
    @endforeach
</div>
@endsection
