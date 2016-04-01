@extends('layout.master')

@section('title', 'User Detail')

@section('content')
	<div class="container">
		<h1>Video Detail</h1>
        <ul>
            <li>
                <a href="{{action('VideoController@index')}}">
                    <b>Video Index</b> /videos
                </a>
            </li>
            <li>
            	<a href="{{action('HomeController@index')}}">
		            <b>Home</b> /
		        </a>
            </li>
        </ul>

        <div class="">
            <ul>
                <li>{{$data->video_id}}</li>
                <li><h2>{{$data->video_title}}</h2></li>
                <li>{{$data->video_description}}</li>
                <li><iframe src="{{$data->video_url}}" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </ul>
        </div>

        <div class="">
            <h3>speaker info</h3>
            <ul>
                <li>{{$speaker->speaker_name}}</li>
                <li>{{$speaker->speaker_description}}</li>
            </ul>
        </div>

        <div class="">
            <h4>Meer videos van {{$speaker->speaker_name}}</h4>
            <ul>
                @if(!empty($speaker->speaker_id))
                    @for($i = 0; $i < count($speaker->speaker_video_id); $i++)
                        {{"hello"}}
                    @endfor
                @endif
            </ul>
        </div>

        <!--categorieen-->
        <div class="">
            <ul>
                <li>
                    <a href="/{{$category->category_id}}"></a>
                </li>
                @if(!empty($subcategory))
                    @foreach($subcategory as $subc)
                        <li>
                            <a href=""></a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        <!--/categorieen-->

	</div>
@endsection