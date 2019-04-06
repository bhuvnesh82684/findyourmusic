<?php
SESSION_START();
echo $_SESSION['user'];
?>
<!DOCTYPE HTML>

<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/foundation.min.css"/>

		<!--
			Include Resource Javascript

			NOTE: These are for handling things outside of the scope of AmplitudeJS
		-->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/foundation.min.js"></script>

		<!-- Include Amplitude JS -->
		<script type="text/javascript" src="dist/amplitude.js"></script>

		<!--
			Include UX functions JS

			NOTE: These are for handling things outside of the scope of AmplitudeJS
		-->
		<script type="text/javascript" src="js/functions.js"></script>

		<!-- Include Style Sheet -->
		<link rel="stylesheet" type="text/css" href="css/app.css"/>
	<style>
		body{
			overflow-x:hidden;
			
		}
		#id1{
			overflow-x:hidden;
			overflow-y:hidden;
			z-index:-5;
		}
		.navbar
		{
			margin-bottom:0;
		}
		.glyphicon {
			margin-left:auto;
			margin-right:auto;
			font-size: 30px;
			color:white;
		}
		#down:hover
		{
			margin-left:auto;
			margin-right:auto;
			font-size: 35px;
		}
		.im {
		  border-radius: 50%;
			width:15vw;
			height:15vw;
		}
		.center
		{
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		.fon{
			font-size:20px;
		}
		footer{
			background-color:#343a40;
			color:white;
			margin-top:2vw;
			
		}
		footer a{
			text-align:justify;
			color:white;
			font-size:25px;
		}
		footer a:hover{
			text-align:justify;
			color:white;
			text-decoration: none;
			font-size:30px;
		}
		.navbar-brand{
			padding:0px;
			padding-top: 7px;
			
		}
		
	</style>
	
	</head>
	<body>
	<nav style="position:top;"class="navbar navbar-expand-lg navbar-dark bg-dark sidebarNavigation " id="navigation" data-sidebarClass="navbar-dark">
			<a class="navbar-brand ml-4" href="index.html"> <img src="logo.png" alt="FYM" class="img-fluid" style="height:2.8vw;"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
				<ul class="navbar-nav " style="float:right;">
					<li class="nav-item mr-5"><a class="nav-link" href="">Playlist</a></li>
					<li class="nav-item mr-5"><a class="nav-link" href="">Latest</a></li>
					<li class="nav-item mr-5"><a class="nav-link" href="">Popular</a></li>
					<li class="nav-item mr-5"><a class="nav-link" href="">Profile</a></li>
					<li class="nav-item "><a class="nav-link" href="">LogOut</a></li>
				</ul>
			</div>
		</nav>
		<div class="grid-x" id="blue-playlist-container">
			<div class="large-10 medium-12 small-11 large-centered medium-centered small-centered cell" id="amplitude-player">
				<div class="grid-x">
				  <div class="large-6 medium-6 small-12 cell" id="amplitude-left">
				    <img data-amplitude-song-info="cover_art_url"/>
				    <div id="player-left-bottom">
				      <div id="time-container">
				        <span class="current-time">
				          <span class="amplitude-current-minutes" ></span>:<span class="amplitude-current-seconds"></span>
				        </span>
				        <div id="progress-container">
				          <input type="range" class="amplitude-song-slider"/>
				          <progress id="song-played-progress" class="amplitude-song-played-progress"></progress>
				          <progress id="song-buffered-progress" class="amplitude-buffered-progress" value="0"></progress>
				        </div>
				        <span class="duration">
				          <span class="amplitude-duration-minutes"></span>:<span class="amplitude-duration-seconds"></span>
				        </span>
				      </div>

				      <div id="control-container">
				        <div id="repeat-container">
				          <div class="amplitude-repeat" id="repeat"></div>
				          <div class="amplitude-shuffle amplitude-shuffle-off" id="shuffle"></div>
				        </div>

				        <div id="central-control-container">
				          <div id="central-controls">
				            <div class="amplitude-prev" id="previous"></div>
				            <div class="amplitude-play-pause" id="play-pause"></div>
				            <div class="amplitude-next" id="next"></div>
				          </div>
				        </div>

				        <div id="volume-container">
				          <div class="volume-controls">
				            <div class="amplitude-mute amplitude-not-muted"></div>
				            <input type="range" class="amplitude-volume-slider"/>
				            <div class="ms-range-fix"></div>
				          </div>
				          <div class="amplitude-shuffle amplitude-shuffle-off" id="shuffle-right"></div>
				        </div>
				      </div>



				      <div id="meta-container">
				        <span data-amplitude-song-info="name" class="song-name"></span>

				        <div class="song-artist-album">
				          <span data-amplitude-song-info="artist"></span>
				          <span data-amplitude-song-info="album"></span>
				        </div>
				      </div>
				    </div>
				  </div>
				  <div class="large-6 medium-6 small-12 cell" id="amplitude-right">
				    <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="0">
				      <div class="song-now-playing-icon-container">
				        <div class="play-button-container">

				        </div>
				        <img class="now-playing" src="./img/now-playing.svg"/>
				      </div>
				      <div class="song-meta-data">
				        <span class="song-title">Challa</span>
				        <span class="song-artist">Romy, Vivek Hariharan, Shashwat Sachdev</span>
				      </div>
				      <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
				        <img class="bandcamp-grey" src="./img/bandcamp-grey.svg"/>
				        <img class="bandcamp-white" src="./img/bandcamp-white.svg"/>
				      </a>
				      <span class="song-duration">3:27</span>
				    </div>
				    <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="1">
				      <div class="song-now-playing-icon-container">
				        <div class="play-button-container">

				        </div>
				        <img class="now-playing" src="./img/now-playing.svg"/>
				      </div>
				      <div class="song-meta-data">
				        <span class="song-title">Manzar</span>
				        <span class="song-artist">ROMY,Vivek</span>
				      </div>
				      <a href="https://lorn.bandcamp.com/" class="bandcamp-link" target="_blank">
				        <img class="bandcamp-grey" src="./img/bandcamp-grey.svg"/>
				        <img class="bandcamp-white" src="./img/bandcamp-white.svg"/>
				      </a>
				      <span class="song-duration">3:16</span>
				    </div>
				    <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="2">
				      <div class="song-now-playing-icon-container">
				        <div class="play-button-container">

				        </div>
				        <img class="now-playing" src="./img/now-playing.svg"/>
				      </div>
				      <div class="song-meta-data">
				        <span class="song-title">Anvil</span>
				        <span class="song-artist">Lorn</span>
				      </div>
				      <a href="https://lorn.bandcamp.com/" class="bandcamp-link" target="_blank">
				        <img class="bandcamp-grey" src="./img/bandcamp-grey.svg"/>
				        <img class="bandcamp-white" src="./img/bandcamp-white.svg"/>
				      </a>
				      <span class="song-duration">3:32</span>
				    </div>
				    <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="3">
				      <div class="song-now-playing-icon-container">
				        <div class="play-button-container">

				        </div>
				        <img class="now-playing" src="./img/now-playing.svg"/>
				      </div>
				      <div class="song-meta-data">
				        <span class="song-title">I Came Running</span>
				        <span class="song-artist">Ancient Astronauts</span>
				      </div>
				      <a href="https://switchstancerecordings.bandcamp.com/track/i-came-running" class="bandcamp-link" target="_blank">
				        <img class="bandcamp-grey" src="./img/bandcamp-grey.svg"/>
				        <img class="bandcamp-white" src="./img/bandcamp-white.svg"/>
				      </a>
				      <span class="song-duration">3:30</span>
				    </div>
				    <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="4">
				      <div class="song-now-playing-icon-container">
				        <div class="play-button-container">

				        </div>
				        <img class="now-playing" src="./img/now-playing.svg"/>
				      </div>
				      <div class="song-meta-data">
				        <span class="song-title">First Snow</span>
				        <span class="song-artist">Emancipator</span>
				      </div>
				      <a href="https://emancipator.bandcamp.com" class="bandcamp-link" target="_blank">
				        <img class="bandcamp-grey" src="./img/bandcamp-grey.svg"/>
				        <img class="bandcamp-white" src="./img/bandcamp-white.svg"/>
				      </a>
				      <span class="song-duration">5:12</span>
				    </div>
				    <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="5">
				      <div class="song-now-playing-icon-container">
				        <div class="play-button-container">

				        </div>
				        <img class="now-playing" src="./img/now-playing.svg"/>
				      </div>
				      <div class="song-meta-data">
				        <span class="song-title">Terrain</span>
				        <span class="song-artist">pg.lost</span>
				      </div>
				      <a href="https://pglost.bandcamp.com/track/terrain" class="bandcamp-link" target="_blank">
				        <img class="bandcamp-grey" src="./img/bandcamp-grey.svg"/>
				        <img class="bandcamp-white" src="./img/bandcamp-white.svg"/>
				      </a>
				      <span class="song-duration">5:29</span>
				    </div>
				    <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="6">
				      <div class="song-now-playing-icon-container">
				        <div class="play-button-container">

				        </div>
				        <img class="now-playing" src="./img/now-playing.svg"/>
				      </div>
				      <div class="song-meta-data">
				        <span class="song-title">Vorel</span>
				        <span class="song-artist">Russian Circles</span>
				      </div>
				      <a href="https://russiancircles.bandcamp.com/track/vorel" class="bandcamp-link" target="_blank">
				        <img class="bandcamp-grey" src="./img/bandcamp-grey.svg"/>
				        <img class="bandcamp-white" src="./img/bandcamp-white.svg"/>
				      </a>
				      <span class="song-duration">5:29</span>
				    </div>
				    <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="7">
				      <div class="song-now-playing-icon-container">
				        <div class="play-button-container">

				        </div>
				        <img class="now-playing" src="./img/now-playing.svg"/>
				      </div>
				      <div class="song-meta-data">
				        <span class="song-title">Intro / Sweet Glory</span>
				        <span class="song-artist">Jimkata</span>
				      </div>
				      <a href="http://jimkata.bandcamp.com/track/intro-sweet-glory" class="bandcamp-link" target="_blank">
				        <img class="bandcamp-grey" src="./img/bandcamp-grey.svg"/>
				        <img class="bandcamp-white" src="./img/bandcamp-white.svg"/>
				      </a>
				      <span class="song-duration">2:39</span>
				    </div>
				    <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="8">
				      <div class="song-now-playing-icon-container">
				        <div class="play-button-container">

				        </div>
				        <img class="now-playing" src="./img/now-playing.svg"/>
				      </div>
				      <div class="song-meta-data">
				        <span class="song-title">Offcut #6</span>
				        <span class="song-artist">Little People</span>
				      </div>
				      <a href="https://littlepeople.bandcamp.com/track/offcut-6" class="bandcamp-link" target="_blank">
				        <img class="bandcamp-grey" src="./img/bandcamp-grey.svg"/>
				        <img class="bandcamp-white" src="./img/bandcamp-white.svg"/>
				      </a>
				      <span class="song-duration">1:00</span>
				    </div>
				    <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="9">
				      <div class="song-now-playing-icon-container">
				        <div class="play-button-container">

				        </div>
				        <img class="now-playing" src="./img/now-playing.svg"/>
				      </div>
				      <div class="song-meta-data">
				        <span class="song-title">Dusk To Dawn</span>
				        <span class="song-artist">Emancipator</span>
				      </div>
				      <a href="https://emancipator.bandcamp.com/track/dusk-to-dawn-2" class="bandcamp-link" target="_blank">
				        <img class="bandcamp-grey" src="./img/bandcamp-grey.svg"/>
				        <img class="bandcamp-white" src="./img/bandcamp-white.svg"/>
				      </a>
				      <span class="song-duration">5:25</span>
				    </div>
				    <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
				      <div class="song-now-playing-icon-container">
				        <div class="play-button-container">

				        </div>
				        <img class="now-playing" src="./img/now-playing.svg"/>
				      </div>
				      <div class="song-meta-data">
				        <span class="song-title">Anthem</span>
				        <span class="song-artist">Emancipator</span>
				      </div>
				      <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
				        <img class="bandcamp-grey" src="./img/bandcamp-grey.svg"/>
				        <img class="bandcamp-white" src="./img/bandcamp-white.svg"/>
				      </a>
				      <span class="song-duration">5:40</span>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<footer >
		 <div class="row" style="padding-top:2vw;">
				<div class="col-sm-12 col-md-4 col-lg-4 " style="text-align:center">
				
					<p style="font-size:3vw;"> <b>FY♫</b></p>
					
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4 " >
					<p style="font-size:1.5vw;text-align:center"> <b>M♫SIC</b ></p>
					<ul>
					<a style="padding-left:11vw;" href="">Genre</a><br>
					<a style="padding-left:11vw;" href="">Latest</a><br>
					<a style="padding-left:11vw;" href="">Artist</a><br>
					<a style="padding-left:11vw;"  href="">Popular</a><br>
					</ul>
						
					
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4 " >
					<a style="padding-left:11vw;" href="">LogOut</a><br>
					
					<a style="padding-left:11vw;" href="">About Us</a><br>
				
					
				</div>
		 </div>
		 <div>
		 </div>
		 
		 <div style="text-align:center;">
		         <b><i> © 2019, All Rights are Reserved.</i></b>
		 </div>
		 <div >
		 </div>
		</footer>
	
	
		
		
		
	</body>
	<script type="text/javascript">
		Amplitude.init({
			"songs": [
				{
					"name": "Challa",
					"artist": "Romy, Vivek Hariharan, Shashwat Sachdev",
					"album": "URI",
					"url": "songs/challa.mp3",
					"cover_art_url": "image/challa.jpg"
				},
				{
					"name": "Manzar",
					"artist": "Romy, Vivek Hariharan",
					"album": "URI",
					"url": "songs/Manzar.mp3",
					"cover_art_url": "image/challa.jpg"
				},
				{
					"name": "Anvil",
					"artist": "Lorn",
					"album": "Anvil",
					"url": "../songs/LORN - ANVIL.mp3",
					"cover_art_url": "../album-art/anvil.jpg"
				},
				{
					"name": "I Came Running",
					"artist": "Ancient Astronauts",
					"album": "We Are to Answer",
					"url": "../songs/ICameRunning-AncientAstronauts.mp3",
					"cover_art_url": "../album-art/we-are-to-answer.jpg"
				},
				{
					"name": "First Snow",
					"artist": "Emancipator",
					"album": "Soon It Will Be Cold Enough",
					"url": "../songs/FirstSnow-Emancipator.mp3",
					"cover_art_url": "../album-art/soon-it-will-be-cold-enough.jpg"
				},
				{
					"name": "Terrain",
					"artist": "pg.lost",
					"album": "Key",
					"url": "../songs/Terrain-pglost.mp3",
					"cover_art_url": "../album-art/key.jpg"
				},
				{
					"name": "Vorel",
					"artist": "Russian Circles",
					"album": "Guidance",
					"url": "../songs/Vorel-RussianCircles.mp3",
					"cover_art_url": "../album-art/guidance.jpg"
				},
				{
					"name": "Intro / Sweet Glory",
					"artist": "Jimkata",
					"album": "Die Digital",
					"url": "../songs/IntroSweetGlory-Jimkata.mp3",
					"cover_art_url": "../album-art/die-digital.jpg"
				},
				{
					"name": "Offcut #6",
					"artist": "Little People",
					"album": "We Are But Hunks of Wood Remixes",
					"url": "../songs/Offcut6-LittlePeople.mp3",
					"cover_art_url": "../album-art/we-are-but-hunks-of-wood.jpg"
				},
				{
					"name": "Dusk To Dawn",
					"artist": "Emancipator",
					"album": "Dusk To Dawn",
					"url": "../songs/DuskToDawn-Emancipator.mp3",
					"cover_art_url": "../album-art/from-dusk-to-dawn.jpg"
				},
				{
					"name": "Anthem",
					"artist": "Emancipator",
					"album": "Soon It Will Be Cold Enough",
					"url": "../songs/Anthem-Emancipator.mp3",
					"cover_art_url": "../album-art/soon-it-will-be-cold-enough.jpg"
				}
			]
		});
	</script>

</html>