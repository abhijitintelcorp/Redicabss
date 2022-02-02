<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
}
// else{
if (isset($_POST['submit'])) {
	// extract($_POST); 
	$owner_name = htmlspecialchars($_POST['owner_name']);
	$owner_mobile = htmlspecialchars($_POST['owner_mobile']);
	$owner_email = htmlspecialchars($_POST['owner_email']);
	$owner_vehicle_no = htmlspecialchars($_POST['owner_vehicle_no']);
	$owner_vehicle_rc_no = htmlspecialchars($_POST['owner_vehicle_rc_no']);
	$owner_vehicle_jcc_no = htmlspecialchars($_POST['owner_vehicle_jcc_no']);
	$vehicletitle = htmlspecialchars($_POST['vehicletitle']);
	$brand = htmlspecialchars($_POST['brand']);
	$vehicalorcview = htmlspecialchars($_POST['vehicalorcview']);
	$priceperday = htmlspecialchars($_POST['priceperday']);
	$fueltype = htmlspecialchars($_POST['fueltype']);
	$modelyear = htmlspecialchars($_POST['modelyear']);
	$seatingcapacity = htmlspecialchars($_POST['seatingcapacity']);
	$img1 = $_FILES['img1']['name'];
	$type = $_FILES['img1']['type'];
	$size = $_FILES['img1']['size'];
	$img_file1 = $_FILES['img1']['tmp_name'];
	$img3 = $_FILES['img3']['name'];
	$type = $_FILES['img3']['type'];
	$size = $_FILES['img3']['size'];
	$img_file2 = $_FILES['img3']['tmp_name'];
	$img2 = $_FILES['img2']['name'];
	$type = $_FILES['img2']['type'];
	$size = $_FILES['img2']['size'];
	$img_file3 = $_FILES['img2']['tmp_name'];
	$img4 = $_FILES['img4']['name'];
	$type = $_FILES['img4']['type'];
	$size = $_FILES['img4']['size'];
	$img_file3 = $_FILES['img4']['tmp_name'];
	$path1 = "image/" . $img3;
	$path2 = "image/" . $img2;
	$path3 = "image/" . $img4;

	if ($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif') {
		if ($size <= 7000000) {

			$sql = "INSERT INTO tblvehicles(ownname,ContactNo,email,vehno,VehRCno,vehreg,vehchas,VehiclesTitle,VehiclesBrand,VehiclesOverview,PricePerDay,FuelType,ModelYear,SeatingCapacity,Vimage1,Vimage2,Vimage3,Vimage4,AirConditioner,PowerDoorLocks,AntiLockBrakingSystem,BrakeAssist,PowerSteering,DriverAirbag,PassengerAirbag,PowerWindows,CDPlayer,CentralLocking,CrashSensor,LeatherSeats) VALUES('$owner_name','$owner_mobile','$owner_email','$owner_vehicle_no','$owner_vehicle_rc_no','$vehreg','$owner_vehicle_jcc_no','$vehicletitle','$brand','$vehicalorcview','$priceperday','$fueltype','$modelyear','$seatingcapacity','$img1','$img2','$img3','$img4','$airconditioner','$powerdoorlocks','$antilockbrakingsys','$brakeassist','$powersteering','$driverairbag','$passengerairbag','$powerwindow','$cdplayer','$centrallocking','$crashcensor','$leatherseats')";
			$res = mysqli_query($conn, $sql);
		}
		$path = "image/" . $img1;
		if (move_uploaded_file($img_file1, $path)) {
			copy($path, "$path");
		}
		$path = "image/" . $img2;
		if (move_uploaded_file($img_file2, $path)) {
			copy($path, "$path");
		}
		$path = "image/" . $img3;
		if (move_uploaded_file($img_file3, $path)) {
			copy($path, "$path");
		}
		$path = "image/" . $img4;
		if (move_uploaded_file($img_file4, $path)) {
			copy($path, "$path");
		}
	}
	if ($res) {
		$msg = "<b class='succWrap'>Vehicle posted Successfully</b>";
	} else {
		$msg = "<b class='errorWrap'>Vehicle  Failed</b>";
	}
	// }
}

?>


<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>Redicabs | Admin Post Vehicle</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="css/fileinput.min.css">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    .errorWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #dd3d36;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }

    .succWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }
    </style>

</head>

<body>
    <?php include('includes/header.php'); ?>
    <div class="ts-main-content">
        <?php include('includes/leftbar.php'); ?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Post A Vehicle</h2>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Basic Info</div>
                                    <?php echo $msg . "<br><br>"; ?>
                                    <div class="panel-body">
                                        <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Select Brand<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <select class="selectpicker" name="brand" id="brand" required>
                                                        <option value=""> Select </option>
                                                        <?php
														$qry = "SELECT id,BrandName from tblbrands";
														$exe = mysqli_query($conn, $qry);
														while ($row = mysqli_fetch_array($exe)) {
														?>
                                                        <option value="<?php echo $row['id'] ?>">
                                                            <?php echo $row['BrandName'] ?>
                                                        </option>
                                                        <?php }  ?>

                                                    </select>
                                                </div>
                                                <label class="col-sm-2 control-label">Vehicle Name<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="vehicletitle" class="form-control"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Select Vehicle No<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <select class="selectpicker" name="owner_vehicle_no"
                                                        id="owner_vehicle_no">
                                                        <option value=""> Select </option>
                                                        <?php
														$qry = "SELECT * from add_owner";
														$exe = mysqli_query($conn, $qry);
														while ($row = mysqli_fetch_array($exe)) {
															$owner_vehicle_rc_no = $row['owner_vehicle_rc_no'];
															$owner_name = $row['owner_name'];
															$owner_mobile = $row['owner_mobile'];
															$owner_vehicle_jcc_no = $row['owner_vehicle_jcc_no'];
														?>
                                                        <option
                                                            owner_vehicle_rc_no="<?php echo $row['owner_vehicle_rc_no']; ?>"
                                                            owner_name="<?php echo $row['owner_name']; ?>"
                                                            owner_mobile="<?php echo $row['owner_mobile']; ?>"
                                                            owner_email="<?php echo $row['owner_email']; ?>"
                                                            owner_vehicle_jcc_no="<?php echo $row['owner_vehicle_jcc_no']; ?>"
                                                            value="<?php echo $row['owner_vehicle_no'] ?>">
                                                            <?php echo $row['owner_vehicle_no'] ?>
                                                        </option>
                                                        <?php }  ?>
                                                    </select>
                                                </div>
                                                <label class="col-sm-2 control-label">Vehicle RC No<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="owner_vehicle_rc_no"
                                                        id="owner_vehicle_rc_no" class="form-control"
                                                        value="<?php echo $row['owner_vehicle_rc_no']; ?>">
                                                    <div class="col-sm-4">
                                                        Upload<span style="color:red"></span><input type="file"
                                                            name="img4">
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Owner Name<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="owner_name" id="owner_name"
                                                        class="form-control" value="<?php echo $row['owner_name']; ?>">
                                                </div>
                                                <label class="col-sm-2 control-label">Owner Mobile No.<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="owner_mobile" id="owner_mobile"
                                                        class="form-control"
                                                        value="<?php echo $row['owner_mobile']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Owner Email<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="owner_email" id="owner_email"
                                                        class="form-control" value="<?php echo $row['owner_email']; ?>">
                                                </div>
                                                <label class="col-sm-2 control-label">Vehicle JCC No<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="owner_vehicle_jcc_no"
                                                        id="owner_vehicle_jcc_no" class="form-control"
                                                        value="<?php echo $row['owner_vehicle_jcc_no']; ?>">
                                                </div>
                                            </div>

                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Vehical Overview<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="vehicalorcview" rows="3"
                                                        required></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Price Per Day(in USD)<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="priceperday" class="form-control" required>
                                                </div>
                                                <label class="col-sm-2 control-label">Select Fuel Type<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <select class="selectpicker" name="fueltype" required>
                                                        <option value=""> Select </option>

                                                        <option value="Petrol">Petrol</option>
                                                        <option value="Diesel">Diesel</option>
                                                        <option value="CNG">CNG</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Model Year<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="modelyear" class="form-control" required>
                                                </div>
                                                <label class="col-sm-2 control-label">Seating Capacity<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="seatingcapacity" class="form-control"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="hr-dashed"></div>


                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <h4><b>Upload Images</b></h4>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    FrontImage <span style="color:red">*</span><input type="file"
                                                        name="img1" required>
                                                </div>
                                                <div class="col-sm-4">
                                                    SideImage<span style="color:red">*</span><input type="file"
                                                        name="img2" required>
                                                </div>
                                                <div class="col-sm-4">
                                                    BackImage<span style="color:red"></span><input type="file"
                                                        name="img3">
                                                </div>
                                            </div>


                                            <!-- <div class="form-group">
<div class="col-sm-4">
Image 4<span style="color:red"></span><input type="file" name="img4" >
</div> -->


                                    </div>
                                    <div class="hr-dashed"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Accessories</div>
                                <div class="panel-body">


                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="airconditioner" name="airconditioner"
                                                    value="1">
                                                <label for="airconditioner"> Air Conditioner </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="powerdoorlocks" name="powerdoorlocks"
                                                    value="1">
                                                <label for="powerdoorlocks"> Power Door Locks </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="antilockbrakingsys" name="antilockbrakingsys"
                                                    value="1">
                                                <label for="antilockbrakingsys"> AntiLock Braking System </label>
                                            </div>
                                        </div>
                                        <div class="checkbox checkbox-inline">
                                            <input type="checkbox" id="brakeassist" name="brakeassist" value="1">
                                            <label for="brakeassist"> Brake Assist </label>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="powersteering" name="powersteering"
                                                    value="1">
                                                <input type="checkbox" id="powersteering" name="powersteering"
                                                    value="1">
                                                <label for="inlineCheckbox5"> Power Steering </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="driverairbag" name="driverairbag" value="1">
                                                <label for="driverairbag">Driver Airbag</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="passengerairbag" name="passengerairbag"
                                                    value="1">
                                                <label for="passengerairbag"> Passenger Airbag </label>
                                            </div>
                                        </div>
                                        <div class="checkbox checkbox-inline">
                                            <input type="checkbox" id="powerwindow" name="powerwindow" value="1">
                                            <label for="powerwindow"> Power Windows </label>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="cdplayer" name="cdplayer" value="1">
                                                <label for="cdplayer"> CD Player </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="checkbox h checkbox-inline">
                                                <input type="checkbox" id="centrallocking" name="centrallocking"
                                                    value="1">
                                                <label for="centrallocking">Central Locking</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="crashcensor" name="crashcensor" value="1">
                                                <label for="crashcensor"> Crash Sensor </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="leatherseats" name="leatherseats" value="1">
                                                <label for="leatherseats"> Leather Seats </label>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button class="btn btn-default" type="reset">Cancel</button>
                                            <button class="btn btn-primary" name="submit" type="submit">Save
                                                changes</button>
                                        </div>
                                    </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
    </div>

    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>
    <script>
    // 		$(document).ready(function(){
    //    $('#vehicleno').change(function(){
    //    var vehicleno = $(this).val();
    //    var data_String;
    //     data_String = 'vehicleno='+vehicleno;
    //     $.post('post-avehical.php',data_String,function(data){
    //           var data= jQuery.parseJSON(data);
    //            $('#vehreg').val(data.vehreg)
    //        });
    //    });
    //  });

    <
    script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" >
    </script>
    <script>
    $(document).ready(function() {
        $('select[name="owner_vehicle_no"]').change(function() {
            var owner_vehicle_rc_no = $('option:selected', this).attr('owner_vehicle_rc_no');
            $("#owner_vehicle_rc_no").val(owner_vehicle_rc_no);
            var owner_name = $('option:selected', this).attr('owner_name');
            $("#owner_name").val(owner_name);
            var owner_mobile = $('option:selected', this).attr('owner_mobile');
            $("#owner_mobile").val(owner_mobile);
            var owner_email = $('option:selected', this).attr('owner_email');
            $("#owner_email").val(owner_email);
            var owner_vehicle_jcc_no = $('option:selected', this).attr('owner_vehicle_jcc_no');
            $("#owner_vehicle_jcc_no").val(owner_vehicle_jcc_no);
        });
    });
    </script>

</body>

</html>