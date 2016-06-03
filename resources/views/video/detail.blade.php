@extends('layout.master')

@section('title', 'User Detail')

@section('content')

    <div class="container-fluid">

        <div class="m-spreker__header">
            <div class="m-spreker__header-video">
                <iframe src="{{"https://player.vimeo.com/video/".$video->vimeo."?portrait=0&color=30D0B1&title=0&controls=0"}}"  width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen  allowfullscreen></iframe>
            </div>

            <div class="m-spreker__header-description">
                <h2>{{$video->title}}</h2>

                {{$video->short_description}}
            </div>

        </div>



        <div class=""><h3>speaker info</h3>
            <ul>
                <li>{{$video->speaker->name}}</li>

                <li>{{$video->speaker->short_description}}</li>

            </ul>

        </div>

        <div class=""><h4>Meer videos van {{$video->name}}</h4>
            <ul>
                @if(!empty($video->id))
                    <li>{{$video->title}}</li>
                @endif
            </ul>
        </div>

        <!--categorieen of tags-->
        <div class=""><h4>Category</h4>
            <ul>
                @foreach($video->speaker->videos as $v)
                    <li>{{$v->title}}</li>
                @endforeach
            </ul>
        </div>
        <!--/categorieen-->
    </div>
@endsection
