<?php
session_start();
include_once 'dbconnect.php';
include 'header.php'; 
?>

	</div>	
				 <div class="clearfix"></div>
				
	</div>		  
<!---->
<script src="js/lightbox-plus-jquery.min.js"></script>
<div class="gallery pages">
	  <div class="container">
	  		<form>
	  			<div class="form-group">
    				<label for="exampleTextarea">Recipe Name:</label>
    				<input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter Recipe Name">
	  			</div>
	  			<div class="form-group">
    				<label for="exampleTextarea">Recipe Decription:</label>
    				<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
	  			</div>
	  			<div class="form-group">
    				<label for="exampleTextarea">Recipe Image:</label>
    				<input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter Recipe Image Link">
	  			</div>
	  			<button type="submit" class="btn btn-primary">Push to DB</button>
	  		</form>
	  </div>
</div>



		<?php include('modal.php');
		 include('footer.php');
?>
<!----> 
