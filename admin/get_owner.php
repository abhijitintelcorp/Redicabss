<?php
include('includes/config.php');
$owner_vehicle_no = $_POST["owner_vehicle_no"];
$result = mysqli_query($conn,"SELECT * FROM add_owner where owner_vehicle_no = '$owner_vehicle_no'");
?>
<?php
while($row1 = mysqli_fetch_array($result)) {
?>
<input type="text" name="owner_name" id="owner_name" class="form-control" value="<?php  echo $row1['owner_name'];?>
<?php
}
?>