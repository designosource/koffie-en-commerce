@extends('layout.master')  @section('title', 'User Detail')  @section('content') 
<div class="container"> 
    <div class="">  <h1>Video Detail</h1> 
        <ul> 
            <li>  <a href="{{action('VideoController@index')}}">  <b>Video Index</b> /videos  </a> </li>
             
            <li>  <a href="{{action('PageController@index')}}">  <b>Home</b> /  </a> </li>
             
        </ul>
         
    </div>
      
    <div class=""> 
        <ul> 
            <li><h2>{{$video->title}}</h2></li>
             
            <!--                     autopause	Enables or disables pausing this video when another video is played. Defaults to 1.                     autoplay	Play the video automatically on load. Defaults to 0. Note that this won’t work on some devices.                     badge	    Enables or disables the badge on the video. Defaults to 1.                     byline	    Show the user’s byline on the video. Defaults to 1.                     color	    Specify the color of the video controls. Defaults to 00adef. Make sure that you don’t include the #.                     loop	    Play the video again when it reaches the end. Defaults to 0.                     player_id	A unique id for the player that will be passed back with all Javascript API responses.                     portrait	Show the user’s portrait on the video. Defaults to 1.                     title	    Show the title on the video. Defaults to 1.                 -->
             
            <li> 
                <iframe src="{{"https://player.vimeo.com/video/".$video->vimeo."?portrait=0&color=30D0B1&title=0&controls=0"}}"
                        width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen
                        allowfullscreen></iframe>
                 
            </li>
             
            <li>{{$video->short_description}}</li>
             
        </ul>
         
    </div>
     
    <div class="">  <h3>speaker info</h3> 
        <ul> 
            <li>{{$speaker->name}}</li>
             
            <li>{{$speaker->short_description}}</li>
             
        </ul>
         
    </div>
      
    <div class="">  <h4>Meer videos van {{$video->name}}</h4> 
        <ul>  @if(!empty($video->id)) 
            <li>{{$video->title}}</li>                 @endif             </ul>
         
    </div>
             <!--categorieen of tags--> 
    <div class="">  <h4>Category</h4>  
        <ul>  @foreach($videosSpeaker as $vSpeaker) 
            <li>{{$vSpeaker->title}}</li>                 @endforeach             </ul>
         
    </div>
             <!--/categorieen-->  
</div> @endsection 
