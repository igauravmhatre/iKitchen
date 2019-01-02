<?php session_start();
include 'dbconnect.php';
$id=$_SESSION['usr_id'];
$query= "SELECT * FROM sub_del where `user_id`= $id";
    $fire=mysqli_query($con,$query) or die(mysql_error());;
    $row = mysqli_fetch_assoc($fire);
if($row['sub_status']!=1){
    $id=$_SESSION['usr_id'];
    $query = "UPDATE sub_del SET sub_status = 1 WHERE user_id = $id";
    $fire = mysqli_query($con,$query) or die("cannot update the data".mysqli_error($con));
    header('Location:subscription.php');
}
else{
    $query = "UPDATE sub_del SET sub_status = 0 WHERE user_id = $id";
    $fire = mysqli_query($con,$query) or die("cannot update the data".mysqli_error($con));
    header('Location:subscription.php');
}
?>
