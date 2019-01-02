<!DOCTYPE HTML>
<html>
<head>
<title>iKitchen</title>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/lightbox.css">
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>





<!-- jQuery (necessary JavaScript plugins) -->

<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
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
<!-- BEGIN PHP Live! HTML Code -->
<span style="color: #0000FF; text-decoration: underline; line-height: 0px !important; cursor: pointer; position: fixed; bottom: 0px; right: 15px; z-index: 20000000;" id="phplive_btn_1543877586" onclick="phplive_launch_chat_0()"></span>
<script data-cfasync="false" type="text/javascript">

(function() {
var phplive_e_1543877586 = document.createElement("script") ;
phplive_e_1543877586.type = "text/javascript" ;
phplive_e_1543877586.async = true ;
phplive_e_1543877586.src = "https://t2.phplivesupport.com/igauravmhatre/js/phplive_v2.js.php?v=0|1543877586|2|" ;
document.getElementById("phplive_btn_1543877586").appendChild( phplive_e_1543877586 ) ;
})() ;

</script>

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
					 <h1><a href="index.php"><i class="fas fa-utensils"></i><span>iKitchen</span></a></h1>
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
				 <!-- navbar new -->
			<nav class="navbar navbar-expand-lg navbar-default">
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto" id="navi">
							 <li class=""><a href="index.php" class="nav-link">Home</a></li>
							 
							<?php
							 if($_SESSION){
								 if($Ent=='Restauranter'){?>
									<li> <a href="content.php" class="nav-link">Add Recipe</a></li>
								 <?php } 
								 if($Ent == 'Admin'){?>
									<li> <a href="banner.php" class="nav-link">Add Banner</a></li>
								 <?php } 
								} 
								?>
							 <li class="">
							 	<a href="gallery.php" class="nav-link">Recipes</a>
							</li>
							 <li class="">
							 	<a href="subscription.php" class="nav-link">Subscription</a>
							</li>
							 	
									
							<li class="dropdown">
							<?php if (isset($_SESSION['usr_id'])) { ?>
							<a href="#" class="nav-link scroll dropdown-toggle" data-toggle="dropdown"><img src="https://png.icons8.com/metro/50/000000/administrator-male.png" height="20px" width="20px">Account Info</a>
								<ul class="dropdown-menu">	
							 		
									 <li><a class="dropdown-item" href="accountinfo.php">Account Settings</a></li>
									 <li><a class="dropdown-item" href="favorite.php">Favorites</a></li>
									 <li><a class="dropdown-item" href="logout.php">Logout</a></li>
								</ul>
									<?php } else { ?>
								<li class=""><a class="nav-link" href="login.php" style="font-size:18px;"><img src="https://png.icons8.com/metro/50/000000/administrator-male.png" height="25px" width="25px">&nbsp Login</a>
								</li>
							<!-- <li><a href="register.php">Sign Up</a></li> -->
							<?php } ?></li>
						 </ul>
						 <form class="form-inline my-2 my-lg-0" action="search.php" method="GET" name="search" >
							<input class="form-control mr-sm-2" name="searchvalue" type="search" placeholder="Search by ingredient" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" id="submit" type="submit">Search</button>
						</form>

						
					
				</div>
				</nav>						
			<!-- navbar new ends -->
			 </div>
				 <div class="clearfix"></div>
				
			  </div>
		  </div>