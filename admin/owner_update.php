<?php
	include('includes/config.php');
	$user_id = $_GET['id'];
	$u_query = "SELECT * FROM add_owner WHERE id='$user_id'";
	$user_update_query = mysqli_query($conn, $u_query);
	$urows = mysqli_fetch_array($user_update_query);
	 //update
    if (isset($_POST['owner_update_submit'])) {
         $owner_name_update=htmlspecialchars($_POST['owner_name_update']);
		 $owner_mobile_update=htmlspecialchars($_POST['owner_mobile_update']);
		 $owner_email_update=htmlspecialchars($_POST['owner_email_update']);
		 $owner_vehicle_no_update=htmlspecialchars($_POST['owner_vehicle_no_update']);
		 $owner_vehicle_rc_no_update=htmlspecialchars($_POST['owner_vehicle_rc_no_update']);
		 $owner_vehicle_brand_update=htmlspecialchars($_POST['owner_vehicle_brand_update']);
		 $owner_vehicle_name_update=htmlspecialchars($_POST['owner_vehicle_name_update']);
		 $owner_vehicle_color_update=htmlspecialchars($_POST['owner_vehicle_color_update']);
		 $driver_id_update=htmlspecialchars($_POST['driver_id_update']);
     	$front_image_update=$_FILES['front_image_update']['name'];
		 $type=$_FILES['front_image_update']['type'];
		 $size=$_FILES['front_image_update']['size'];
		 $img_file1=$_FILES['front_image_update']['tmp_name'];

		 $back_image_update=$_FILES['back_image_update']['name'];
		 $type=$_FILES['back_image_update']['type'];
		 $size=$_FILES['back_image_update']['size'];
		 $img_file2=$_FILES['back_image_update']['tmp_name'];

		 $side_image_update=$_FILES['side_image_update']['name'];
		 $type=$_FILES['side_image_update']['type'];
		 $size=$_FILES['side_image_update']['size'];
		 $img_file3=$_FILES['side_image_update']['tmp_name'];

		 $path1 = "image/".$back_image_update;
		 $path2 = "image/".$side_image_update;
	     
		    $update_qry = "UPDATE  add_owner SET  owner_name='$owner_name_update',owner_mobile='$owner_mobile_update',owner_email='$owner_email_update',owner_vehicle_no='$owner_vehicle_no_update',owner_vehicle_rc_no='$owner_vehicle_rc_no_update',owner_vehicle_brand='$owner_vehicle_brand_update',owner_vehicle_name='$owner_vehicle_name_update',owner_vehicle_color='$owner_vehicle_color_update',driver_id='$driver_id_update' WHERE id='$user_id'";
        	  $inst_u_fn1_qry = mysqli_query($conn, $update_qry);

        	   if($inst_u_fn1_qry){
        	header("location:manage-owner.php");
        }
		 if($type=='image/jpg' || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif'){		   
		    	if(empty($front_image_update) OR empty($back_image_update) OR empty($side_image_update)) {
            $update_qry = "UPDATE  add_owner SET front_image='$front_image_update',back_image='$back_image_update',side_image='$side_image_update' WHERE id='$user_id'";
            $inst_u_fn_qry = mysqli_query($conn, $update_qry);
             $path = "image/".$front_image_update;
		   if(move_uploaded_file($img_file1, $path)){
            copy($path, "$path");
		   }  
		   $path = "image/".$back_image_update;
		   if(move_uploaded_file($img_file2, $path)){
            copy($path, "$path");
		   } 
		    $path = "image/".$side_image_update;
		   if(move_uploaded_file($img_file3, $path)){
            copy($path, "$path");
		   }   
        } else {
        	 $update_qry = "UPDATE  add_owner SET front_image='$front_image_update',back_image='$back_image_update',side_image='$side_image_update' WHERE id='$user_id'";
            $inst_u_fn_qry = mysqli_query($conn, $update_qry);
			 $path = "image/".$front_image_update;
		   if(move_uploaded_file($img_file1, $path)){
            copy($path, "$path");
		   }  
		   $path = "image/".$back_image_update;
		   if(move_uploaded_file($img_file2, $path)){
            copy($path, "$path");
		   } 
		    $path = "image/".$side_image_update;
		   if(move_uploaded_file($img_file3, $path)){
            copy($path, "$path");
		   }   
        }
        if($inst_u_fn_qry){
        	header("location:manage-owner.php");
        } 
}
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
	
	<title>Redicabs | Admin Edit Owner</title>

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
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>


</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Edit Owner</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Edit Owner</div>
									<div class="panel-body">

					<form action="" method="post" name="add_owner_update" class="form-horizontal" enctype="multipart/form-data">
										
											
  	        <!-- 	<div class="errorWrap"><strong>ERROR</strong></div>
			<div class="succWrap"><strong>SUCCESS</strong></div> -->
									<div class="col-md-5">
											<div class="form-group">
												<label class="col-sm-4 control-label">Owner Name</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="owner_name_update" id="owner_name_update"  value="<?php echo $urows['owner_name']; ?>" required>
												</div>
											</div>
									</div>

									<div class="col-md-5">
											<div class="form-group">
												<label class="col-sm-4 control-label">Mobile</label>
												<div class="col-sm-8">
													<input type="number" class="form-control" name="owner_mobile_update" id="owner_mobile_update" value="<?php echo $urows['owner_mobile']; ?>" required>
												</div>
											</div>
									</div>

										<div class="col-md-5">
											<div class="form-group">
												<label class="col-sm-4 control-label"> Email Id</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="owner_email_update" id="owner_email" value="<?php echo $urows['owner_email']; ?>" required>
												</div>
											</div>
									</div>


									<div class="col-md-5">
											<div class="form-group">
												<label class="col-sm-4 control-label"> Vehicle Number</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="owner_vehicle_no_update" id="owner_vehicle_no_update" value="<?php echo $urows['owner_vehicle_no']; ?>" required>
												</div>
											</div>
									</div>

									<div class="col-md-5">
											<div class="form-group">
												<label class="col-sm-4 control-label">Vehicle RC Number</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="owner_vehicle_rc_no_update" id="owner_vehicle_rc_no_update"  value="<?php echo $urows['owner_vehicle_rc_no']; ?>" required>
												</div>
											</div>
									</div>

									<div class="col-md-5">
											<div class="form-group">
												<label class="col-sm-4 control-label">Vehicle Brand</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="owner_vehicle_brand_update" id="owner_vehicle_brand_update"  value="<?php echo $urows['owner_vehicle_brand']; ?>" required>
												</div>
											</div>
									</div>

									<div class="col-md-5">
											<div class="form-group">
												<label class="col-sm-4 control-label"> Vehicle Name</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="owner_vehicle_name_update" id="owner_vehicle_name_update" value="<?php echo $urows['owner_vehicle_name']; ?>" required>
												</div>
											</div>
									</div>

									<div class="col-md-5">
											<div class="form-group">
												<label class="col-sm-4 control-label"> Vehicle Color</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="owner_vehicle_color_update" id="owner_vehicle_color_update" value="<?php echo $urows['owner_vehicle_color']; ?>" required>
												</div>
											</div>
									</div>

								

									<div class="col-md-5">
										<div class="form-group">
												<label class="col-sm-4 control-label"> Assign Driver</label>
											<div class="col-sm-8">
												<input class="selectpicker" name="driver_id_update" id="driver_id_update"value="<?php echo $urows['driver_id']; ?>"/>
											</div>
										</div>
									</div>


									<div class="form-group">
										<div class="col-sm-12">
										<h4><b>Upload Images</b></h4>
										</div>
									</div>

								<div class="form-group">
									<div class="col-sm-4">
										Front Image
										<img src="image/<?php echo $urows['front_image']; ?>" style="width:20%;">
										 <span style="color:red">*</span><input type="file" name="front_image_update" >

									</div>
									<div class="col-sm-4">
										Back Image 
										<img src="image/<?php echo $urows['back_image']; ?>" style="width:20%;"> 
										<span style="color:red">*</span><input type="file" name="back_image_update" >
									</div>
									<div class="col-sm-4">
										Side Image 
										<img src="image/<?php echo $urows['side_image']; ?>" style="width:20%;">
										 <span style="color:red">*</span><input type="file" name="side_image_update" >
									</div>
								</div>



											<div class="hr-dashed"></div>


											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
						
										<button class="btn btn-primary" name="owner_update_submit" type="submit">Update</button>
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

</body>

</html>
