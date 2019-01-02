<?php session_start();

include 'dbconnect.php';

?>
<?php
            if($_SESSION){
                $id=$_SESSION['usr_id'];
                $query= "SELECT * FROM users where `id`= $id";
                $fire=mysqli_query($con,$query) or die(mysql_error());;
                $row = mysqli_fetch_assoc($fire);
                $id=$row['id'];
                if(isset($_POST['update'])){
                    $name = $_POST['name'];
                    $email = $row['user_email'];
                    $password = md5($_POST['password']);
                    $query = "UPDATE users SET user_name = '$name', user_email = '$email', user_pass = '$password' WHERE id = '$id'";
                    //$query = "UPDATE `crud` SET `fname`=['$fname'],`lname`=['$lname'],`email`=['$email'],`password`=['$password'] WHERE 1";
                    $fire = mysqli_query($con,$query) or die("cannot update the data".mysqli_error($con));
                    // if($fire) header("Location:accountinfo.php");
                }
                include 'header.php';
                // echo $id;?>
			 </div>
				 <div class="clearfix"></div>
			  </div>
<div class="gallery account-info pages">
	  <div class="container">
		 <h2>Account Settings</h2>	


                <div class="row">
                <div class="col-md-8 offset-md-2">


                <div class="info-content">
                    <div class="row pro-details">
                        <div class="col-md-3"> 
                        <div id="mtabs">
                        <ul>
                            <li class="active"><a href="#bio" rel="tab1">Profile</a></li>
                            <li class=""><a href="#privacy" rel="tab2">Edit Profile</a></li>
                        </ul>
                    </div>
                        </div>
                        <div class="col-md-9">
                        <div id="mtabs_content_container">
                        <div id="bio" class="mtab_content" style="display: block;">
                        <legend>My Profile</legend>
                        <div class="pro-photo"><img src="images/t1.jpg" height="100%" width="100%" alt=""></DIV>
                        <div>
                            <label for="name">Name: </label>
                            <?php echo $row['user_name'];?>   
                                <a href="editinfo.php?upd=<?php echo $row['id']?>" >
                                </a>
                        </div>
                        <div>
                            <label for="name">Email: </label><?php echo $row['user_email'];?>
                        </div>
                <?php
            }
            else{
            echo "Account Deleted Successfully";
            }
            ?> 
            <a class="btn btn-sm btn-danger" href="del_account.php?upd=<?php echo $row['id']?>">Delete Account</a>
                        <!-- <p><a id="simulate" href="#mtabs_wrapper#mtabs_content_container#tab2">bio</a></p>  -->
                        </div>
                        <div id="privacy" class="mtab_content"style="display: none;" > 
                        <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <fieldset>
                    <legend>Edit Profile</legend>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Enter Full Name" value="<?php echo $row['user_name']?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="New Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm New Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="update" value="Update Info" class="btn btn-primary"/>
                    </div>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
                        </div>
                    
                        </div>
                        </div>
                    </div>
            </div>
</div>
		 </div>
	 </div>
</div>


	<script type="text/javascript">
$(document).ready(function(){
    //  When user clicks on tab, this code will be executed
    $("#mtabs li").click(function() {
        //  First remove class "active" from currently active tab
        $("#mtabs li").removeClass('active');
 
        //  Now add class "active" to the selected/clicked tab
       $(this).addClass("active");
 
        //  Hide all tab content
        $(".mtab_content").hide();
 
        //  Here we get the href value of the selected tab
        var selected_tab = $(this).find("a").attr("href");
 
        //  Show the selected tab content
        $(selected_tab).fadeIn();
 
        //  At the end, we add return false so that the click on the link is not executed
        return false;
    });
  $("#simulate").click(function(){
    $('a[rel="tab2"]').trigger("click");
  });
});


	</script>


<?php

include 'footer.php';
?>