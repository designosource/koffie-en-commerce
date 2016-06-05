@extends('layout.master')

@section('title', 'User Detail')

@section('content')

    <div class="container-fluid" style="margin-top: 20px "> {{-- styling weghalen als nav gefixt is --}}

        <div class="l-video__equal-height-container m-video-header">

            <div class="m-video-header__item m-video-header__video l-video__equal-height__item">
                <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
                <div class='embed-container'><iframe src='{{"https://player.vimeo.com/video/".$video->vimeo}}' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
            </div>

            <div class="m-video-header__item m-video-header__description-block l-video__equal-height__item">
                <h2 class="m-video-header__title">{{$video->title}}</h2>
                <p class="m-video-header__description">{{$video->short_description}} lorem</p>

                <div class="m-video-header__social-media">
                    <ul>
                        <li><a href="#">{!! Html::image('image/twitter.png' , 'Logo above the fold')!!} Share on twitter</a></li>
                        <li><a href="#">{!! Html::image('image/Facebook.png' , 'Logo above the fold')!!} Share on fb</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="m-video-info">

            <div class="m-video-info__avatar m-video-info__item">
                <img src="" alt="">   {{-- width:224px; height: 215px; --}}
            </div>

            <div class="m-video-info__description-block m-video-info__item">
                <div class=" m-video-info__name">
                    <h2>{{$video->speaker->name}}</h2>
                </div>

                <div class="m-video-info__description">
                    <p>{{$video->speaker->short_description}}</p>
                </div>

                <div class="button m-video-info__button">
                    Bekijk meer video's
                </div>
            </div>

        </div>

        <div class="m-video-related">

            <div class="m-video-related__title">
                <h2>Gerelateerde video's</h2>
            </div>

            <div class="m-video-related__videos">

                <ul class="m-video-related__videos-list">
                    @foreach($video->speaker->videos as $v)
                        <li> <span>{{$v->title}}</span> </li>
                    @endforeach
                </ul>

                <div class="m-video-related__button">
                    <div class="button">
                        Bekijk video's
                    </div>
                </div>

            </div>

        </div>

        {{--<!--categorieen of tags-->--}}
        {{--<div class="">--}}
            {{--<h4>Category</h4>--}}
            {{--<ul>--}}
                {{--@foreach($video->speaker->videos as $v)--}}
                    {{--<li>{{$v->title}}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}

        {{--<div class="">--}}
            {{--<h4>Category</h4>--}}
            {{--<ul>--}}
                {{--@foreach($video->speaker->videos as $v)--}}
                    {{--<li>{{$v->title}}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}

        {{--<ul>--}}
            {{--@if(!empty($video->id))--}}
                {{--<li>{{$video->title}}</li>--}}
            {{--@endif--}}
        {{--</ul>--}}
        {{--<!--/categorieen-->--}}
    </div>
@endsection
