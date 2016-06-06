@extends('layout.master')

@section('title', 'User Detail')

@section('content')
<style media="screen">
  .categorien{
    background-image:url("http://placehold.it/350x150");
  }
</style>
<div class="container-fluid banner">
  <div class="headersmall">
      <div class="categorien">
        <header>
          <h1 class="categorieen__title"></h1>
  			</header>
      </div>
  </div>
  <div class="infospreker introduction">
		    <div class="wrapp">
			       <h2 class="infospreker__title">Monika Meysmans</h2>
             <p class="infospreker__function">
                CEO
             </p>
             <p class="infospreker__mail">
              Monikameysmans@thomasmore.be
             </p>
  		         <p class="infospreker__description">
Lucas ipsum dolor sit amet neimoidia tchuukthai gotal hutt boltrunians derlin ismaren y bith skywalker ackbar. Evazan zannah organa conan. Tapani shaak hapan roonan ongree. Kal rishi beru aayla terrik selkath boba. Muunilinst obi-wan mantell solo. Solo drovian shaak kendal balosar chagrian secura moff darth.
Lucas ipsum dolor sit amet neimoidia tchuukthai gotal hutt boltrunians derlin ismaren y bith skywalker ackbar. Evazan zannah organa conan. Tapani shaak hapan roonan ongree. Kal rishi beru aayla terrik selkath boba. Muunilinst obi-wan mantell solo. Solo drovian shaak kendal balosar chagrian secura moff darth.
Lucas ipsum dolor sit amet neimoidia tchuukthai gotal hutt boltrunians derlin ismaren y bith skywalker ackbar. Evazan zannah organa conan. Tapani shaak hapan roonan ongree. Kal rishi beru aayla terrik selkath boba. Muunilinst obi-wan mantell solo. Solo drovian shaak kendal balosar chagrian secura moff darth.
  		            </p>
  		          
		    </div>
  </div>
	<section class="spreker">
					<div>
									<div class="col-xs-12 col-sm-7">

									</div>
									<div class="col-xs-12 col-sm-5">
											<div class="content">
													<h3>Financieren 1</h3>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
															Ipsum has been the industry's standard dummy text ever since the 1500s, when an
															unknown printer took a galley of type and scrambled it to make a type specimen
															book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
																	</p>
																	<ul class="social">
		<li><a href="#" target="_blank" class="social__left">
{!! Html::image('image/twitter.png' , 'twitterbtn', array('class' => 'social__twitter'))!!}
Share on twitter</a></li>
<li><a href="#" target="_blank" class="social__right">
	{!! Html::image('image/facebook.png' , 'facebookbtn', array('class' => 'social__facebook'))!!}
Share on facebook</a></li>
																	</ul>
											</div>
									</div>
								</div>
							</section>

              <section class="back">
                <a href="/videos">
                    <div class="btn">
                        Ga naar overzicht
                    </div>
                </a>
              </section>
</div>
@endsection
