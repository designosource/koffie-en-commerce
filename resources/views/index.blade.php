    @extends('layout.master')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="bgimage">
            {!! Html::image('image/imageheader.jpg' , 'header image', array('class' => 'header_image'))!!}
            {!! Html::image('image/logo_nav.png' , 'Logo above the fold', array('class' => 'headerlogo'))!!}
            <h1>Verhalen over de zakelijke kant van media</h1>
        </div>
        <section class="introduction">
            <div class="wrapp">
                <h2>Koffie &amp; Commerce</h2>
                <p>
                    Welkom bij Koffie &amp; Commerce. Dè bron van inspirerende verhalen en informatie over de zakelijke kant van media. Inhoud creëeren is uitdagend op zich, maar er centen mee verdienen is vaak nog het lastigste van al. Ontdek de verschillende navigeermogelijkheden om de onderwerpen, verhalen en media-experten waar jouw interesse naar uitgaat te exploreren. Een film- of TV-project financieren? Advertentie inkomsten uit digitale publicaties? U wagen aan branded content? En wat met rechten of internationalisatie? … Behalve boeiende clips over deze onderwerpen waar je met een koffietje rustig kan naar kijken, vind je telkens ook de nodige bronnen en informatie om zelf aan de slag te gaan met de onderwerpen die door de experten aangehaald worden.
                </p>
            </div>
        </section>
        <section class="grid categories">
            <div class="grid-row">
                <div class="col-xs-12 col-sm-5">
                    
                </div>
                <div class="col-xs-12 col-sm-7">
                    <div class="content">
                        <h3>Title</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="button">
                            Button
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <hr>
        <h1>DEBUG</h1>
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
        <h1>Categories</h1>
        <ul>
            @foreach ($categories as $category)
                <li>
                    <a href="{{action('CategoryController@category',['id' => $category->id])}}">
                        {{$category->name}} /category/{{$category->id}}
                    </a>
                </li>
            @endforeach
        </ul>
        <hr>
        <hr>
    </div>
@endsection
