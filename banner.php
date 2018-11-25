
<?php
session_start();
include_once 'dbconnect.php';
include 'header.php'; 
$error =false;

if(isset($_POST['add'])){
	$banner_name = mysqli_real_escape_string($con,$_POST['banner_name']);
	$banner_image = mysqli_real_escape_string($con,$_POST['banner_image']);
	$user = $_SESSION['usr_id'];
	if(strlen($banner_name) < 1) {
        $error = true;
        $title_error = "Title Can't be empty";
	}
	if(!$error){
		$fire = mysqli_query($con, "INSERT INTO banner(banner_name,banner_image) VALUES('" . $banner_name . "', '" . $banner_image . "')");
		$successmsg = "Banner Added!";
	}

    }    
?>
</div>	
				 <div class="clearfix"></div>
				
	</div>		  

<div class="gallery pages">
	  <div class="container">
	  <h2>Add Banner</h2>	
		  <div class="col-md-4 col-md-offset-4 well con-add">
	  
	  <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pushDBform">
	  			<div class="form-group">
    				<label for="exampleTextarea">Banner Name:</label>
    				<input type="text" class="form-control" name = 'banner_name' id="" aria-describedby="" placeholder="Enter Recipe Name">
					<span class="text-danger"><?php if (isset($title_error)) echo $title_error; ?></span>
	  			</div>
	  			<div class="form-group content ">
    				<label for="exampleTextarea">Banner Image:</label>
					<input type="file" class="form-control" name = 'banner_image' id="image" aria-describedby="">
	  			</div>
	  			
		  			
	  			<button type="submit" id="add" name = "add" class="btn button-ed">Add</button>
			  </form>
			  <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
			  </div>
	  </div>
</div>
<script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 
<?php 
	include('modal.php');
	include('footer.php');
?>