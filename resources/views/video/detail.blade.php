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
                <p class="m-video-header__description">
                <?php
                    $url = '@(http)?(s)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
                    $parsed = preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0">$0</a>', $video->long_description);
                    echo $parsed;
                ?>
                </p>
                <h4>Categorieën:</h4>@if(!empty($video->categories[0]))
                    @foreach ($video->categories as $v)
                        <a href="/categorieen/{{$v->slug}}"><p>{{$v->slug}}</p></a>
                    @endforeach
                @endif
                <div class="m-video-header__social-media">
                    <ul>
                        <li><a href="https://twitter.com/intent/tweet?url={{ urlencode($uri) }}">{!! Html::image('image/twitter.png' , 'Logo above the fold')!!} Share on twitter</a></li>
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($uri)}}">{!! Html::image('image/Facebook.png' , 'Logo above the fold')!!} Share on fb</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="m-video-info">

            <div class="m-video-info__avatar m-video-info__item">
                <img src="/uploads/{{$video->speaker->avatar}}" alt="">   {{-- width:224px; height: 215px; --}}
            </div>

            <div class="m-video-info__description-block m-video-info__item">
                <div class=" m-video-info__name">
                    <h2>{{$video->speaker->name}}</h2>
                </div>

                <div class="m-video-info__description">
                    <p>{{$video->speaker->short_description}}</p>
                </div>

                <a href="/sprekers/{{$video->speaker->id}}">
                    <div class="button m-video-info__button">
                        Bekijk meer van {{$video->speaker->name}}
                    </div>
                </a>
                
            </div>

        </div>
        <h3>Gerelateerde videos:</h3>
        @if(!empty($video->categories[0]))
        <div class="gallery clearfix">
            @foreach ($video->categories->first()->videos as $rel_video)
                @if($video->id != $rel_video->id)
                <a href="/videos/{{$rel_video->slug}}">
                  <div
                    class="gallery-item col-xs-6 col-sm-4 col-lg-3"
                    style=" background-image: url('{{ empty($rel_video->vimeo_thumb) ? 'http://www.placehold.it/350x350' : $rel_video->vimeo_thumb }}')">
                    <div class="content">
                      <div class="gallery-item-description">
                        <h2>{{$rel_video->title}}</h2>
                        <p>{{$rel_video->short_description}}</p>
                      </div>
                    </div>
                  </div>
                </a>
                @else
                <p class="emptystate">
                    Deze categorie heeft geen andere videos.
                </p>
                @endif
            @endforeach
        </div>
        @endif

        <section class="back">
            <a href="/videos">
                <div class="btn">
                    Ga naar overzicht
                </div>
            </a>
        </section>

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
