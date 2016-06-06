<?php if(isset($quote)){ ?>
<section class="quote">
    {!! Html::image('image/quote.png' , 'quote', array('class' => 'quotesign img-responsive'))!!}
    <p class="citaat">{{$quote->quote}}</p>
    <div class="persooncitaat">
        <p class="name">{{$quote->author}}</p>
    </div>
</section>
<?php } ?>