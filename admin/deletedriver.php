<?php
      include('includes/config.php'); 
        $id=$_GET['id'];
        $delete = mysqli_query($conn, "DELETE FROM tbldriver WHERE id='$id'");
        if ($delete) {
          header("Location:manage-driver.php");
        }   
?>