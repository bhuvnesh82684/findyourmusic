<?php
	SESSION_START();
	include "dbcon.php";
	$msg="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$sql="SELECT user_id FROM user where name='$user' && password='$pass'";

	if($result=mysqli_query($conn,$sql))
	{	
		if(($row = mysqli_affected_rows($conn))>0)
		{	
			$data=mysqli_fetch_assoc($result);
			$_SESSION['user']=$data['user_id'];
			HEADER('Location: http://localhost/fyp/user.php');
		}
		else
			$msg="Username and password did not match.";
	}
	else
		$msg="Error with server.Please try again later. sorry for inconvenience.";
	
}
mysqli_close($conn);
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<style>
		body{
			overflow-x:hidden;
			overflow-y:hidden;
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
		form{
			margin-top:3vw;
			margin-bottom:3vw;
			width:40vw;
			margin-left:auto;
			margin-right:auto;
			border-top:2px solid #777;
			padding-top:2vw;
		}
		.form-control{
			width:30vw;
			margin-left:auto;
			margin-right:auto;
			
		}
		label{
			margin-left:1vw;
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
					<li class="nav-item "><a class="nav-link" href="">Sign In</a></li>
				</ul>
			</div>
		</nav>
		<div>
			<h2 style="margin-top:2vw;"align="center">Lets Continue from where you left!!!</h2>
			<form action="login.php" method="post">
				<div class="form-group">
							  <label for="user"><b>Username:</b></label>
							  <input type="text" id="user" name ='user' class="form-control" style="border-top:2px solid #B7B7B7;border-left:2px solid #B7B7B7;background:#f1f7ff;" placeholder="username" required="require">
						</div>
				<div class="form-group">
							  <label for="pass"><b>Password:</b></label>
							  <input type="password" id="pass" name ='pass' class="form-control" style="border-top:2px solid #B7B7B7;border-left:2px solid #B7B7B7;background:#f1f7ff;" placeholder="Password" required="require">
						</div>
				<div class="form-group">	
					<input type="submit" value="Login" style="margin-left:18vw;"><br>
				</div><br>
				<b style="color:red;font-size:1vw;padding-left:10vw" ><?php echo $msg;?></b>
				<br>
				<p align="center">If Not Registered Yet</p>
				<a style="margin-left:18.5vw;" href="signup.php">signup</a>
			
			</form>
		
		</div>
		<footer>
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
					<a style="padding-left:11vw;" href="">Login</a><br>
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