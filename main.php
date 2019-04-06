<!DOCTYPE HTML>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
					<li class="nav-item mr-5"><a class="nav-link" href="">Home</a></li>
					<li class="nav-item mr-5"><a class="nav-link" href="">Latest</a></li>
					<li class="nav-item mr-5"><a class="nav-link" href="">Popular</a></li>
					<li class="nav-item mr-5"><a class="nav-link" href="">Sign Up</a></li>
					<li class="nav-item "><a class="nav-link" href="login.php">Sign In</a></li>
				</ul>
			</div>
		</nav>
		<div id="id1">	
			<img src="pic1.jpg" style="width:100vw; height:95vh;">
			<div style="z-index:5;position:absolute;top:45vh;left:28vw;">
				<p style="color:#D5D000;font-size:6vw;">Find Your M♫sic</p>
			</div>
			<div style="z-index:5;position:absolute;top:90vh;left:49vw;">
				<a href="#id2" ><span id="down" class="glyphicon glyphicon-chevron-down"></span></a>
			</div>
		</div>
		
		
		<div id="id2">
			<h2 style="text-align:center;"> Explore Here!!</h2>
			<div class="row">
				<div class="col-sm-2.1 col-md-2.1 col-lg-3 im5"  >
				    <img src="artist.jpg" class="im center"   >
					<p class="fon"><b>Latest Songs</b></p>
				</div>
				<div class="col-sm-2.1 col-md-2.1 col-lg-3 im5" >
				    <img src="artist.jpg" class="im center"  >
					<p class="fon"><b>Popular Songs</b></p>
				</div>
				<div class="col-sm-2.1 col-md-2.1 col-lg-3 im5" >
					
					<img src="artist.jpg"class="im center">
					<p class="fon"><b>Artists</b></p>
				</div>
				<div class="col-sm-2.1 col-md-2.1 col-lg-3 im5" >
					
					<img src="artist.jpg"class="im center">
					<p class="fon"><b>Genre</b></p>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top:2vw;">
				<div class="col-sm-2.1 col-md-2.1 col-lg-3 im5"  >
				    <img src="artist.jpg" class="im center"   >
					<p class="fon"><b>Year</b></p>
				</div>
				<div class="col-sm-2.1 col-md-2.1 col-lg-3 im5" >
				    <img src="artist.jpg" class="im center"  >
					<p class="fon"><b>Mood</b></p>
				</div>
				<div class="col-sm-2.1 col-md-2.1 col-lg-3 im5" >
					
					<img src="artist.jpg"class="im center">
					<p class="fon"><b>Reccomdenation</b></p>
				</div>
				<div class="col-sm-2.1 col-md-2.1 col-lg-3 im5" >
					
					<img src="artist.jpg"class="im center">
					<p class="fon"><b>playlist</b></p>
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
					<a style="padding-left:11vw;" href="login.php">Login</a><br>
					<a style="padding-left:11vw;" href="">SignUp</a><br>
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

</html>