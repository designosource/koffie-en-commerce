<nav class="mainnavigation">
    <a href="{{action('PageController@index')}}" class="home">{!! Html::image('image/headerlogo.png') !!}</a>

	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		<img class="logo_cup" src="image/kopje.png">
		<div class="overlay-content">
		    <a href="#">HOME</a>
		    <a href="#">ABOUT US</a>
		    <a href="#">VIDEO'S</a>
		    <a href="#">CONTACT</a>
	  	</div>
	</div>

	<span class="menu" onclick="openNav()">MENU</span>
</nav>