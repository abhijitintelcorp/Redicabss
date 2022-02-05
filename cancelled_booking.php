<?php
include("includes/config.php");

$id=$_GET['id'];
$user_id=$_GET['user_id'];
$upd="UPDATE tblbooking SET Status=2 WHERE id='$id' AND user_id='$user_id'";
$query = mysqli_query($conn, $upd);
if($query){
    header("location:my-booking.php?user_id=$user_id");
}
?>