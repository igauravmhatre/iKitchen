
<?php
session_start();
include_once 'dbconnect.php';
include 'header.php';
$query="SELECT * FROM banner";
$fire = mysqli_query($con,$query);
$i=3;
//$row = mysqli_fetch_assoc($fire);
?>
<div class="row add">
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
<div class="col-md-6">
	 		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" interval="1000">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/chinese.jpg" width="100%" height="100%">
    </div>
    <?php
			while($row=mysqli_fetch_assoc($fire)){
			?>
    <div class="carousel-item<?php $i++; ?>">
      <img src="images/<?php echo $row['banner_image'];?>" width="100%" height="100%">
    </div>
    
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php }?>
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
		 <div class="row service-grids">
		  <div class="col-md-4 commpany-grid">
				 <div class="grid-pic">
					 <i class="fas fa-check-square"></i>
				 </div>
				 <div class="grid-info">
					 <h4>Quality Control</h4>
					 <p>Total quality search results across the globe. </p>
				 </div>
				 <div class="clearfix"></div>
		  </div>
		  <div class="col-md-4 commpany-grid">
				 <div class="grid-pic">
					<i class="fas fa-check-square"></i>
				 </div>
				 <div class="grid-info">
					 <h4>Best Recipes</h4>
					 <p>Top listed collection of recipes at a single place. </p>
				 </div>
				 <div class="clearfix"></div>
		  </div>
		  <div class="col-md-4 commpany-grid">
				 <div class="grid-pic">
					  <i class="fas fa-check-square"></i>
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


			<?php 
include 'footer.php';
?>