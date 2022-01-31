<?php
include('includes/config.php');
$owner_vehicle_no = $_POST["owner_vehicle_no"];
$result = mysqli_query($conn,"SELECT * FROM add_owner where owner_vehicle_no = '$owner_vehicle_no'");
?>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<input type="text" name="owner_vehicle_rc_no" id="owner_vehicle_rc_no" class="form-control" value="<?php  echo $row['owner_vehicle_rc_no'];?>">

<div class="row">
<div class="col-sm-12"> 
<label class="control-label">Owner Name<span style="color:red">*</span></label>
<input type="text" name="owner_name" id="owner_name" class="form-control" value="<?php  echo $row['owner_name'];?>">
  </div>

  <div class="col-sm-12">
<label class="control-label">Owner Mobile<span style="color:red">*</span></label>
<input type="text" name="owner_mobile" id="owner_mobile" class="form-control" value="<?php  echo $row['owner_mobile'];?>">
  </div>
</div>
<div class="row">
   <div class="col-sm-12">
<label class="control-label">Vehicle Jcc No<span style="color:red">*</span></label>
<input type="text" name="owner_vehicle_jcc_no" id="owner_vehicle_jcc_no" class="form-control" value="<?php  echo $row['owner_vehicle_jcc_no'];?>">
  </div>
</div>
<?php
}
?>