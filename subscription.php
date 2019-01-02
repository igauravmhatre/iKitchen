
<?php session_start();
include_once 'dbconnect.php';
include 'header.php'; 
?>

			 </div>
				 <div class="clearfix"></div>
			  </div>


            <div class="gallery pages">
            		<div class="container">
                    <h2>Subscription</h2>
            		<div class="col-md-6 offset-md-3 card text-center">
                        <div class="card-header">
                                <?php
                                if($_SESSION){
                                    $id=$_SESSION['usr_id'];
                                    $query= "SELECT * FROM sub_del where `user_id`= $id";
                                    $fire=mysqli_query($con,$query) or die(mysql_error());;
                                    $row = mysqli_fetch_assoc($fire);
                                    //$id=$row['id'];
                                    $sub=$row['sub_status'];
                                    if($sub!=0){
                                        ?>
                                        Thank you for Subscribing</div>
                                        <p class="card-text" style="padding: 15px; "> Hello.!!</p><p> You are now accessible to the recipe section. Allowed to add/remove recipes (Only Restauranter's& admin). </p>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio ad a facere minus vitae voluptatem commodi repellat et, consectetur reiciendis inventore, dolor tempora neque modi explicabo. Aperiam maiores ab debitis?</p>
                                        <a class="btn btn-sm btn-warning" href="subscribe.php">Unsubscribe</a>
                                                        </div>
                                    <?php
                                    }
                                    else{
                                        ?>
                                        <div class="card-body" style="
                                padding: 30px;
                                ">
                            <p class="card-text" style="padding: 15px; ">Instruction to Register</p> 
                            <p class="card-text" style="padding: 15px; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                            <a href="#" class="btn btn-primary btn btn-success" data-toggle="modal" data-target="#exampleModalLong">Paynow</a>
                        </div>
                    </div>
                </div>	
</div>
<?php
        }
    }
                    else{ ?>
        <div class="card-body" style="
                                padding: 30px;
                                ">
                            <p class="card-text" style="padding: 15px; ">Login to Subscribe</p> 
                            <p class="card-text" style="padding: 15px; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                            <a href="login.php" class="btn btn-primary btn btn-success">Login</a>
                        </div>
                    </div>
                </div>	
</div>

<?php

    }?>
</div>
</div>
<?php
 include('modal.php');
include("footer.php");
?>