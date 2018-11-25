
<?php
session_start();
include_once 'dbconnect.php';
include 'header.php';
$query="SELECT * FROM banner";
$fire = mysqli_query($con,$query);
$i=2;
//$row = mysqli_fetch_assoc($fire);
?>
<div class="row">
	<div class="col-md-6">
		<div class="banner-info">
			 <h2>Hello</h2>
			 <label></label>
			 <h4>We are iKitchen</h4>
			 <p>This is a new concept of "Fast Food", we filter fresh and high quality recipes. It's a new way of exploring all your favourite ranging from Italian to Indian. Everything at one single place.</p>
			 <!-- <a class="btn-left" href="about.html">Click to know more about us</a>	 -->
			 <a class="btn-right" href="about.php">Read more</a>
		 </div>
	</div>
	<div class="col-md-6 advertisement">
		<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="2000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <img src="images/chinese.jpg" width="100%" height="100%">
      </div>
    </div>
	<?php
	while($row=mysqli_fetch_assoc($fire)){
	?>
    <div class="item slides">
      <div class="slide-<?php $i++; ?>"></div>
      <div class="hero">        
        <img src="images/<?php echo $row['banner_image'];?>" width="100%" height="100%">
      </div>
    </div>
	<?php } ?>
</div>
	</div>
</div>

	 </div>	 
</div>
<!---->
<div class="welcome">
	 <div class="container">
		 <h3>Welcome !</h3>
		 <p>Welcome to the iKitchen, an elite collection of restaurants from across the city that define New York City’s dining scene right now — and that will satisfy the restaurant needs for locals and visitors alike: Find an NYC classic as well as a top-notch neighborhood restaurant, mind-numbingly spicy Chinese, and cutting edge Korean fare.</p>
		 <div class="welcome_pic">
			 <img src="images/wel.png" alt=""/>
		 </div>		 
	</div>
</div>
<div class="company">
	 <div class="container">
		 <h3>Services</h3>
		 <div class="service-grids">
		  <div class="col-md-4 commpany-grid">
				 <div class="grid-pic">
					 <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				 </div>
				 <div class="grid-info">
					 <h4>Quality Control</h4>
					 <p>Total quality search results across the globe. </p>
				 </div>
				 <div class="clearfix"></div>
		  </div>
		  <div class="col-md-4 commpany-grid">
				 <div class="grid-pic">
					<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				 </div>
				 <div class="grid-info">
					 <h4>Best Recipes</h4>
					 <p>Top listed collection of recipes at a single place. </p>
				 </div>
				 <div class="clearfix"></div>
		  </div>
		  <div class="col-md-4 commpany-grid">
				 <div class="grid-pic">
					  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				 </div>
				 <div class="grid-info">
					 <h4>Customer Support</h4>
					 <p>24*7 customer support. </p>
				 </div>
				 <div class="clearfix"></div>
		  </div>
			<div class="clearfix"></div>
			</div>
	  </div>
</div>		 
<!---->
<!-- <div class="special">
	 <div class="container">
		 <h3>Our Specials</h3>
		 <div class="arrival-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <a href="recipes.html"><img src="images/s1.jpg" alt=""/>
					 <h4>Prawns Fry</h4>
					 </a>
				 </li>
				 <li>
					 <a href="recipes.html"><img src="images/s4.jpg" alt=""/>
					 <h4>Chilli Carne</h4>
					 </a>
				 </li>
				 <li>
					 <a href="recipes.html"><img src="images/s3.jpg" alt=""/>
					 <h4>Grill Fry</h4>
					 </a>
				 </li>
				 <li>
					 <a href="recipes.html"><img src="images/s2.jpg" alt=""/>
					 <h4>Prawns Soup</h4>
					 </a>
				 </li>
				 <li>
					 <a href="recipes.html"><img src="images/s4.jpg" alt=""/>
					 <h4>Chilli Carne</h4>
					 </a>
				 </li>
				 <li>
					 <a href="recipes.html"><img src="images/s3.jpg" alt=""/>
					 <h4>Grill Fry</h4>
					 </a>
				 </li>
				</ul>
				<script type="text/javascript">
				 $(window).load(function() {			
				  $("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: false,
					autoPlaySpeed: 3000,    		
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
		  </div>

	 </div>
</div> -->
<!---->
<!-- <div class="latest_news">
	 <div class="container">
	     <div class="news-sec">
			 <div class="col-md-6 news">
					 <div class="news-head">
						 <h3>Latest News</h3>						 
					 </div>
					 <div class="news_grid">
						 <img src="images/l1.jpg" class="img-responsive" alt=""/>
						 <h4><a href="about.html">Mauris hendrerit ex id leo elementum congue.</a></h4>
						 <p class="date">19th June | 10:00 - 12:00</p>
						 <p>Praesent accumsan augue dolor, vel eleifend lorem pellentesque egestas. Ut sit amet iaculis erat. maximus non aliquam a, consequat eget enim. Donec eu magna pellentesque, placerat tortor non,  Cras venenatis sodales nibh non finibus.</p>
						 <a class="read" href="about.html">Read More...</a>
					 </div>
			 </div>
			 <div class="col-md-6 testimonal">
					 <div class="testi-head">
						 <h3>Testimonials</h3>
					 </div>
					 <div class="testi-grids">
						 <div class="testi-grid">
							 <div class="people">
								 <img src="images/t1.jpg" class="img-responsive" alt=""/>
							 </div>
							 <div class="testi-info">
								 <h4>Christopher</h4>
								 <a href="about.html">CEO</a>
								 <p>Nullam viverra porttitor est at vestibulum. Quisque sodales justo eu erat malesuada rutrum. Ut orci velit, dignissim ut dui convallis, sagittis cursus sem.</p>
							 </div>
							 <div class="clearfix"></div>
						 </div>
						 <div class="testi-grid testi2">
							 <div class="people">
								 <img src="images/t2.jpg" class="img-responsive" alt=""/>
							 </div>
							 <div class="testi-info">
								 <h4>Ainsley</h4>
								 <a href="about.html">Manager</a>
								 <p>Nullam viverra porttitor est at vestibulum. Quisque sodales justo eu erat malesuada rutrum. Ut orci velit, dignissim ut dui convallis, sagittis cursus sem.</p>
							 </div>
							 <div class="clearfix"></div>
						 </div>
					 </div>
			  </div>
			  <div class="clearfix"></div>
		 </div>
	 </div>
</div> -->
<!----> 
<?php
include 'footer.php'; 
?>
<!---->  
</body>
</html>