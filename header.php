<!DOCTYPE HTML>
<html>
<head>
<title>iKitchen</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/lightbox.css">
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!-- jQuery (necessary JavaScript plugins) -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

/*! Fades in page on load */
$('body').css('display', 'none');
$('body').fadeIn(500);

});
</script>

<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> 
</head>
<body>

<video autoplay muted loop id="myVideo">
  <source src="images/untitled.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
	

<!-- header -->
<div class="banner banner2">
	 <div class="container">
		 <div class="banner_head_top">
			 <div class="banner-head">
				 <div class="logo">
					 <h1><a href="index.php"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span><span>iKitchen</span></a></h1>
				 </div>
					<div class="headr-right">
						<div class="details">
									<?php if($_SESSION) {
										$id=$_SESSION['usr_id'];
										$query="SELECT * FROM users u, entitlement e WHERE u.id=$id && e.user_id = $id";
										$fire = mysqli_query($con,$query) or die("Cannot fetch the data".mysqli_error($con));
										$row = mysqli_fetch_assoc($fire);
										$Ent=$row['ent_role'];
										?>
									<p align="center" class="navbar-text pro-name"><a href = "accountinfo.php" style="
    color: #777;
    transition: 0.2s ease; font-size:18px;">  Welcome, <?php echo $row['user_name']; 
								}?></a></p>
						</div>
					</div>
				 <div class="clearfix"></div>
			 </div>
			 <div class="top-menu">	 
			 <div class="content white">
				 <nav class="navbar navbar-default">
					 <div class="navbar-header">
						 <button type="button" class="menu" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="icon-bar">MENU</span>							
						</button>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>							
						</button>				
					 </div>
					 <!--/navbar header-->		
					 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						 <ul class="nav navbar-nav">
							 <li><a href="index.php">Home</a></li>
							 <!-- <li><a href="about.html">About</a></li> -->
							 <!-- <li class="dropdown">
								<a href="#" class="scroll dropdown-toggle" data-toggle="dropdown">Top Recipes<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Indian Recipe</a></li>
									<li><a href="#">Continental Recipe</a></li>
									<li><a href="#">Mexican Recipe</a></li>
								</ul>
							 </li>
												  -->
							<?php
							 if($_SESSION){
								 if($Ent=='Restauranter'){?>
									<li> <a href="content.php">Add Recipe</a></li>
								 <?php } 
								 if($Ent == 'Admin'){?>
									<li> <a href="banner.php">Add Banner</a></li>
								 <?php } 
								} 
								?>
							 <li>
							 	<a href="gallery.php">Recipes</a>
							</li>
							 <li>
							 	<a href="subscription.php">Subscription</a>
							</li>
							 	
									
							<li class="dropdown">
							<?php if (isset($_SESSION['usr_id'])) { ?>
							<a href="#" class="scroll dropdown-toggle" data-toggle="dropdown"><img src="https://png.icons8.com/metro/50/000000/administrator-male.png" height="20px" width="20px">Account Info<b class="caret"></b></a>
								<ul class="dropdown-menu">	
							 		<li><a href="logout.php">Logout</a></li>
									 <li><a href="accountinfo.php">Account Settings</a></li>
									 <li><a href="favorite.php">Favorites</a></li>
								</ul>
									<?php } else { ?>
								<li class="nav-link"><a href="login.php" style="font-size:18px;"><img src="https://png.icons8.com/metro/50/000000/administrator-male.png" height="25px" width="25px">&nbsp Login</a>
								</li>
							<!-- <li><a href="register.php">Sign Up</a></li> -->
							<?php } ?></li>
						 </ul>
						</div>
					  <!--/navbar collapse-->
				 </nav>
				  <!--/navbar-->
			 </div>
				 <div class="clearfix"></div>
				<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
			  </div>
		  </div>