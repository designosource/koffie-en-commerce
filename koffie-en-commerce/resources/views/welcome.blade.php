@extends('layout.master')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h1>Home</h1>
        <pre>{{var_dump($data)}}</pre>
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
    </div>
@endsection