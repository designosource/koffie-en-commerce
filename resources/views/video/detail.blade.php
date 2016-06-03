@extends('layout.master')

@section('title', 'User Detail')

@section('content')

    <div class="container-fluid" style="margin-top: 20px "> {{-- styling weghalen als nav gefixt is --}}

        <div class="m-spreker__header">

            <div class="m-spreker__header-video">
                <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
                <div class='embed-container'><iframe src='{{"https://player.vimeo.com/video/".$video->vimeo}}' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
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
