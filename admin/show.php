<!doctype html>
<html lang="en" class="no-js">

<head>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
</head>
<?php
include('includes/config.php');
$brand=$_GET["brand"];
if($brand!=""){
$query="SELECT id,VehiclesTitle from tblvehicles WHERE VehiclesBrand='$brand'";
$query_run = mysqli_query($conn, $query);
echo "<select> ";
while($row = mysqli_fetch_array($query_run)){
echo "<option>"; echo $row['VehiclesTitle']; echo "</option>";
}
echo "</select>";
}
?>