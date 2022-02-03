<?php
$include('includes/config.php');

if(isset($_POST['owner_vehicle_no']))
    {
        $owner_vehicle_no = $_POST['owner_vehicle_no'];
        $find=mysqli_query($conn, "select * from add_owner  where owner_vehicle_no=$owner_vehicle_no");
        while($row=mysql_fetch_array($find))
  {
    $row1[]=$row;
  }
  die(json_encode($row1));
    }
?>