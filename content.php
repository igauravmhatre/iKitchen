
<?php
session_start();
include_once 'dbconnect.php';
include 'header.php'; 
$error =false;

if(isset($_POST['add'])){
	$title = mysqli_real_escape_string($con,$_POST['title']);
	$des = mysqli_real_escape_string($con,$_POST['des']);
	$image = mysqli_real_escape_string($con,$_POST['image']);
	$protein = mysqli_real_escape_string($con,$_POST['protein']);
	$user = $_SESSION['usr_id'];
	if(strlen($title) < 1) {
        $error = true;
        $title_error = "Title Can't be empty";
	}
	if(strlen($des) < 1) {
        $error = true;
        $des_error = "Description Can't be empty";
	}
	if(strlen($protein) < 1) {
        $error = true;
        $des_error = "Protein not selected";
    }
	if(!$error){
		$fire = mysqli_query($con, "INSERT INTO content(title,des,image,content_protein,user_id) VALUES('" . $title . "', '" . $des . "', '" . $image . "','" . $protein ."','" . $user . "')");
		$successmsg = "Recipe Added!";
	}

    }    
?>
</div>	
				 <div class="clearfix"></div>
				
	</div>		  

<div class="gallery pages">
	  <div class="container">
	  <h2>Add Recipe</h2>	
		  <div class="col-md-6 offset-md-3 well con-add">
	  
	  <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pushDBform">
	  			<div class="form-group">
    				<label for="exampleTextarea">Recipe Name:</label>
    				<input type="text" class="form-control" name = 'title' id="" aria-describedby="" placeholder="Enter Recipe Name">
					<span class="text-danger"><?php if (isset($title_error)) echo $title_error; ?></span>
				  </div>
				  <div class="form-group">
    				<label for="exampleTextarea">Type of Protein</label>
                        <select name="protein">
                          <option value="Pork">Pork</option>
						  <option value="Steak">Steak</option>
						  <option value="Chicken">Chicken</option>
						  <option value="Fish">Fish</option>
						  <option value="Veg">Veg</option>
                        </select>
					<span class="text-danger"><?php if (isset($protein_error)) echo $protein_error; ?></span>
	  			</div>
	  			<div class="form-group">
    				<label for="exampleTextarea">Recipe Decription:</label>
    				<textarea class="form-control" name = 'des' id="exampleTextarea" rows="3"placeholder="Enter Recipe Description"></textarea>
					<span class="text-danger"><?php if (isset($des_error)) echo $des_error; ?></span>
	  			</div>
	  			<div class="form-group content ">
    				<label for="exampleTextarea">Recipe Image:</label>
					<input type="file" class="form-control" name = 'image' id="image" aria-describedby="">
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
	
	include('footer.php');
?>