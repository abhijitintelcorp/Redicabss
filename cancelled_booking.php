<?php
include("includes/config.php");

$id=$_GET['id'];
$upd="UPDATE tblbooking SET Status=2 WHERE id='$id'";
$query = mysqli_query($conn, $upd);
if($query){
    header("location:index.php");
}
?>