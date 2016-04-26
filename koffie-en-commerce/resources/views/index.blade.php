@extends('layout.master')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h1>Home</h1>
        <ul>
            <li>
                <a href="{{action('VideoController@index')}}">
                    <b>Video Index</b> /videos
                </a>
            </li>
            <li>
                <a href="{{action('SpeakerController@detail',['id' => 1])}}">
                    <b>Speaker Detail</b> /speaker/1
                </a>
            </li>
        </ul>
        <h2>Categories</h2>
        <ul>
            @foreach ($categories as $category)
                <li>
                    <a href="{{action('CategoryController@category',['id' => $category->category_id])}}">
                        {{$category->category_name}} /category/{{$category->category_id}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection