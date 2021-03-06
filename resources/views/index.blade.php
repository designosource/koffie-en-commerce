@extends('layout.master')

@section('title', 'Home')

@section('content')
    <div class="container-fluid banner">
        <div class="bgimage">
            <header>
                {!! Html::image('image/headerlogo.png' , 'Logo above the fold', array('class' => 'headerlogo'))!!}
                <h1 class="img-responsive">Verhalen over de zakelijke kant van media</h1>
            </header>
            <a id="tm_logo" href="http://thomasmore.be"></a>
        </div>
        <section class="introduction">
            <div class="wrapp">
                <h2>Koffie &amp; Commerce</h2>
                <p>
                    Welkom bij Koffie &amp; Commerce. Dè bron van inspirerende verhalen en informatie over de zakelijke
                    kant van media. Inhoud creëeren is uitdagend op zich, maar er centen mee verdienen is vaak nog het
                    lastigste van al. Ontdek de verschillende navigeermogelijkheden om de onderwerpen, verhalen en
                    media-experten waar jouw interesse naar uitgaat te exploreren. Een film- of TV-project financieren?
                    Advertentie inkomsten uit digitale publicaties? U wagen aan branded content? En wat met rechten of
                    internationalisatie? </p>
                <p>… Behalve boeiende clips over deze onderwerpen waar je met een koffietje rustig kan naar kijken, vind
                    je telkens ook de nodige bronnen en informatie om zelf aan de slag te gaan met de onderwerpen die
                    door de experten aangehaald worden.
                </p>
            </div>
        </section>

        <section class="grid categories">
            @foreach ($categories_start as $category)
                <div class="grid-row">
                    @if($category->id % 2 != 0)
                        <div class="col-xs-12 col-sm-5"
                            style=" background-image: url('{{ empty($category->image) ? 'http://www.placehold.it/999x666' : '/uploads/'.$category->image }}')">
                        </div>
                        <div class="col-xs-12 col-sm-7">
                            <div class="content">
                                <h3>{{$category->name}}</h3>
                                <p>{{$category->description}}</p>
                                <a href="categorieen/{{$category->slug}}">
                                    <div class="button">
                                        Bekijk video's
                                    </div>
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="col-xs-12 col-sm-5">
                            <div class="content">
                                <h3>{{$category->name}}</h3>
                                <p>{{$category->description}}</p>
                                <a href="categorieen/{{$category->slug}}">
                                    <div class="button">
                                        Bekijk video's
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7"
                            style=" background-image: url('{{ empty($category->image) ? 'http://www.placehold.it/999x666' : '/uploads/'.$category->image }}')">
                        </div>
                    @endif
                </div>
            @endforeach
            @include('layout.quote')
            @foreach ($categories_end as $category)
                <div class="grid-row">
                    @if($category->id % 2 != 0)
                        <div class="col-xs-12 col-sm-5"
                            style=" background-image: url('{{ empty($category->image) ? 'http://www.placehold.it/999x666' : '/uploads/'.$category->image }}')">
                        </div>
                        <div class="col-xs-12 col-sm-7">
                            <div class="content">
                                <h3>{{$category->name}}</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.</p>
                                <a href="categorieen/{{$category->slug}}">
                                    <div class="button">
                                        Bekijk video's
                                    </div>
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="col-xs-12 col-sm-5">
                            <div class="content">
                                <h3>{{$category->name}}</h3>
                                <p>TestLucas. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.</p>
                                <a href="categorieen/{{$category->slug}}">
                                    <div class="button">
                                        Bekijk video's
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7"
                            style=" background-image: url('{{ empty($category->image) ? 'http://www.placehold.it/999x666' : '/uploads/'.$category->image }}')">
                        </div>
                    @endif
                </div>
            @endforeach
        </section>
    </div>
@endsection
