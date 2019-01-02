<?php
session_start();
include_once 'dbconnect.php';
include 'header.php'; 
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.js"></script> 
										<script src="js/rm.js"></script> 
	</div>	
				 <div class="clearfix"></div>
				
	</div>		  
<!---->

<div class="gallery pages">
	  <div class="container">
		 <h2>Recipes</h2>	
		 <?php 
		 if($_SESSION){
		 $id = $_SESSION['usr_id'];
		 $query= "SELECT * FROM sub_del where `user_id`= $id";
		 $fire1 = mysqli_query($con,$query) or die(mysql_error());;
		 $row1 = mysqli_fetch_assoc($fire1);
		 $sub = $row1['sub_status'];
		 if (isset($_GET['del'])){
			$id = $_GET['del'];
			$query = "DELETE FROM content WHERE content_id = $id";
			$fire2 = mysqli_query($con,$query) or die("Cannot delete data from database".mysqli_error($con));
			$query = "DELETE FROM favorite WHERE content_id = $id";
			$fire2 = mysqli_query($con,$query) or die("Cannot delete data from database".mysqli_error($con));
		}
		if (isset($_GET['add'])){
			$content_id = $_GET['add'];
			$query = "INSERT INTO FAVORITE (user_id,content_id) VALUES ('" . $_SESSION['usr_id'] . "','" . $content_id . "')";
			$fire2 = mysqli_query($con,$query) or die("Cannot delete data from database".mysqli_error($con));
		}
		if (isset($_GET['search'])){
			$ingredient = $_GET['searchvalue'];
			$query = "SELECT * FROM content WHERE `content_protein` = $ingredient";
			$fire3=mysqli_query($con,$query) or die("Cannot get data from database".mysqli_error($con));
		}
		if (isset($_GET['modal'])){
			$content_id = $_GET['modal'];
			$query = "SELECT * FROM content WHERE content_id=$content_id";
			$fire3=mysqli_query($con,$query) or die("Cannot get data from database".mysqli_error($con));
			$result=mysqli_fetch_assoc($fire3);
		}
		 if($sub==1){
		 	//$id=$_SESSION['usr_id'];
			$query = "SELECT * FROM content";
			$fire3 = mysqli_query($con,$query) or die("Cannot fetch the data".mysqli_error($con));						    
		?>
		 <div class="gallery-bottom">
				<div class="gallery-1">
					<div class="gallery-grid">
					<form role="form" action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="delete">
						<?php
							while($row3 = mysqli_fetch_assoc($fire3)){
						?>
						<div class="row looping">
								<div class="col-md-3"><div><img src = "images/<?php echo $row3['image'];?>"></div></div>
								<div class="col-md-9">
									<div>
										<div class="row">
											<div class="col-md-3"><span><?php echo $row3['title'];?></span></div>
											<div class="col-md-9 ed-buttons"><?php
										if($row3['user_id'] == $_SESSION['usr_id']){
										?>
										
										<a class="btn btn-sm btn-danger" href="<?php $_SERVER['PHP_SELF']?>?del=<?php echo $row3['content_id']?>">Delete</a> 
										<?php
										}
										?>
										<?php
											$query1 = "SELECT * FROM favorite where content_id = $row3[content_id] && user_id = $_SESSION[usr_id]";
											$fire4 = mysqli_query($con,$query1);
											if(!$row4 = mysqli_fetch_assoc($fire4)){
										?>
											<a class="btn btn-sm btn-primary" href="<?php $_SERVER['PHP_SELF']?>?add=<?php echo $row3['content_id']?>">Add to favorites</a> 
											<?php
											}
											else{
												?>
												<a class="btn btn-sm btn-primary" href="favorite.php"><p>Click to view favorite recipe</p></a>
												<?php
											}
											?>
										</div>
										</div>
										<span class="rc-head">Recipe Details :</span>
										<span class="rc-info">
											<section id="demo">
												<article class="slide"><p><?php echo $row3['des'];?></p></article>
											</section>

											</span>
										

										<script>
										    $('article').readmore({maxHeight: 100});
										  </script>
										
									</div>
								</div>					
						</div>
					
					<?php }?>		
					
			</form>
		 </div>
	 </div>
</div>
</div>
		 <?php }
		 else{?>
			<div class="card-body  text-center" style="
			padding: 30px;
			">
		<p class="card-text" style="padding: 15px; ">Click below to Subscribe.</p> 
		<p class="card-text" style="padding: 15px; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
		<a href="#" class="btn btn-primary btn btn-success" data-toggle="modal" data-target="#exampleModalLong">Paynow</a>
	</div>

</div>	
</div><?php
		 }
		}else{
			?>
			<div class="card-body text-center" style="
			padding: 30px;
			">
		<p class="card-text" style="padding: 15px; ">You need to Login And Subscribe</p> 
		<p class="card-text" style="padding: 15px; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
		<a href="login.php" class="btn btn-primary btn btn-success" >Login</a>
	</div>


</div>
		</div><?php
		}
		include('modal.php');
		 include('footer.php');
?>
<!----> 
