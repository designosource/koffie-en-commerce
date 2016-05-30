<nav class="mainnavigation">
    <a href="{{action('PageController@index')}}" class="mainnavigation-home">{!! Html::image('image/headerlogo.png') !!}</a>

	<div id="myNav" class="mainnavigation-overlay">
		<a href="javascript:void(0)" class="mainnavigation-overlay-closebtn" onclick="closeNav()">×</a>
		<img class="mainnavigation-overlay-logocup" src="image/kopje.png">
		<div class="mainnavigation-overlay-content">
		    <a href="#">HOME</a>
		    <a href="#">ABOUT US</a>
		    <a href="#">VIDEO'S</a>
		    <a href="#">CONTACT</a>
	  	</div>
	</div>
	<span class="mainnavigation-menu" onclick="openNav()">MENU</span>
</nav>