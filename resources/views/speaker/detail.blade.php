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
			<h2 class="infospreker__title">{{$speaker->name}}</h2>
      <p class="infospreker__description">
    {{$speaker->title}}
      </p>
      <p class="infospreker__description">
    {{$speaker->email}}
      </p>
  		<p class="infospreker__description">
  	{{$speaker->short_description}}
  		</p>
  		<p class="infospreker__description">
  	{{$speaker->long_description}}
  		</p>
		</div>
  </div>
	<section class="spreker">
					<div class="">
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
</div>
@endsection
