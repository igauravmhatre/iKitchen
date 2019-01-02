<?php
session_start();
include 'header.php';

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $Ent = mysqli_real_escape_string($con, $_POST['Ent']);
    
    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
        $query = "SELECT * FROM users WHERE user_email = '$email'";
        $fire = mysqli_query($con,$query) or die("cannot update the data".mysqli_error($con));
        $row=mysqli_fetch_assoc($fire);

        if($row!=null){
            if($row['_delete']==1){
            $query = "UPDATE users SET _delete=0,user_name='$name',user_pass = '" . md5($password) . "' WHERE user_email='$email'";
            $fire=mysqli_query($con,$query) or die("cannot update the data".mysqli_error($con));
            header("Location: login.php");
            }
            else{
                $errormsg="User Account Already exists";
        }
    }
        else {
            $fire=mysqli_query($con, "INSERT INTO users(user_name,user_email,user_pass) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')");
            $query = "SELECT id FROM users WHERE user_email = '$email'";
            $fire=mysqli_query($con,$query);
            $row=mysqli_fetch_assoc($fire);
            $user_id = $row['id'];
            $fire=mysqli_query($con,"INSERT INTO entitlement(ent_role,user_id) VALUES('" . $Ent . "','" . $user_id ."')");
            $fire=mysqli_query($con,"INSERT INTO sub_del(user_id) VALUES('" . $user_id ."')");
            $successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
            header("Location: login.php");
        } 
    }    
    else {
            $errormsg = "Error in registering...Please try again later!";
            }     
    }
?>


<div class="custom-login">
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3  well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <fieldset>
                    <legend>Sign Up</legend>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $name; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Account Type </label>
                        <select name="Ent">
                          <option value="Customer">Customer</option>
                          <option value="Restauranter">Restauranter</option>
                        </select>
                    </div>
                   
                                   
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>

                    <div class="form-group" style="text-align:center;">
                        <input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
  
        <div class="col-md-6 offset-md-3  text-center" style="color:#fff";>    
        Already Registered? <a href="login.php" style="color:#fff";>Login Here</a>
        </div>
    
</div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
<div class="copywrite">
	<div class="container">
		<p> © iKitchen. All rights reserved</p>
	</div>
</div>
</body>
</html>