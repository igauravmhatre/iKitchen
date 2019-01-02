<?php
session_start();
include('dbconnect.php');
include('header.php');

if($_SESSION){
    $id=$_SESSION['usr_id'];
    $query = "SELECT * FROM content,users WHERE users.id=$id";
    $fire = mysqli_query($con,$query) or die("Cannot fetch the data".mysqli_error($con));
	$row = mysqli_fetch_assoc($fire);
    if(isset($_POST['delete'])){
		echo $_POST['recipe'];
		$recipe = $_POST['recipe'];
        $query = "DELETE from content where recipe='$recipe';";
        //$query = "UPDATE `crud` SET `fname`=['$fname'],`lname`=['$lname'],`email`=['$email'],`password`=['$password'] WHERE 1";
        $fire = mysqli_query($con,$query) or die("cannot update the data".mysqli_error($con));
        if(fire) header("Location:accountinfo.php");
    }
}
?>

	</div>	
				 <div class="clearfix"></div>
				
	</div>		  
<!---->
<script src="js/lightbox-plus-jquery.min.js"></script>
<div class="gallery pages">
	  <div class="container">
	  <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pushDBform">
	  			<div class="form-group">
    				<label for="exampleTextarea">Recipe Name:</label>
    				<select name="recipe"> 
    <option value="0">Please Select	</option>
        <?php
            while($row = mysqli_fetch_assoc($fire))
            {
            ?>
            <option value = "<?php echo($row['recipe'])?>">
			<?php echo($row['recipe'])?>
            </option>
            <?php
            }               
        ?>
    </select>
	  			</div>
	  			
	  			
		  			
	  			<button type="submit" name = "delete" class="btn btn-primary">Delete</button>
	  		</form>
	  </div>
</div>



		<?php include('modal.php');
		 include('footer.php');
?>
