<!-- insert -->
<?php
 	include('includes/config.php');
 	date_default_timezone_set('Asia/Kolkata');

	if(isset($_POST['owner_submit']))
	 {
		 $owner_name=htmlspecialchars($_POST['owner_name']);
		 $owner_mobile=htmlspecialchars($_POST['owner_mobile']);
		 $owner_email=htmlspecialchars($_POST['owner_email']);
		 $owner_vehicle_no=htmlspecialchars($_POST['owner_vehicle_no']);
		 $owner_vehicle_rc_no=htmlspecialchars($_POST['owner_vehicle_rc_no']);
		 $owner_vehicle_jcc_no=htmlspecialchars($_POST['owner_vehicle_jcc_no']);
		 $owner_vehicle_brand=htmlspecialchars($_POST['owner_vehicle_brand']);
		 $owner_vehicle_name=htmlspecialchars($_POST['owner_vehicle_name']);
		 $owner_vehicle_color=htmlspecialchars($_POST['owner_vehicle_color']);
		 $driver_id=htmlspecialchars($_POST['driver_id']);
		 $front_image=$_FILES['front_image']['name'];
		 $type=$_FILES['front_image']['type'];
		 $size=$_FILES['front_image']['size'];
		 $img_file1=$_FILES['front_image']['tmp_name'];
		 $back_image=$_FILES['back_image']['name'];
		 $type=$_FILES['back_image']['type'];
		 $size=$_FILES['back_image']['size'];
		 $img_file2=$_FILES['back_image']['tmp_name'];
		 $side_image=$_FILES['side_image']['name'];
		 $type=$_FILES['side_image']['type'];
		 $size=$_FILES['side_image']['size'];
		 $img_file3=$_FILES['side_image']['tmp_name'];
		 $adhar_front=$_FILES['adhar_front']['name'];
		 $type=$_FILES['adhar_front']['type'];
		 $size=$_FILES['adhar_front']['size'];
		 $img_file4=$_FILES['adhar_front']['tmp_name'];
		 $adhar_back=$_FILES['adhar_back']['name'];
		 $type=$_FILES['adhar_back']['type'];
		 $size=$_FILES['adhar_back']['size'];
		 $img_file5=$_FILES['adhar_back']['tmp_name'];

		 $path1 = "image/".$back_image;
		 $path2 = "image/".$side_image;
		 $path3 = "image/".$adhar_front;
		 $path4 = "image/".$adhar_back;

		 $created_at=date('Y-m-d');

  
		 if($type=='image/jpg' || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif'){
		    if($size<=7000000){
         $insert_qry = "INSERT INTO add_owner(owner_name,owner_mobile,owner_email,owner_vehicle_no,owner_vehicle_rc_no,owner_vehicle_jcc_no,owner_vehicle_brand,owner_vehicle_name,owner_vehicle_color,driver_id,front_image,back_image,side_image,adhar_front,adhar_back,created_at) VALUES('$owner_name','$owner_mobile','$owner_email','$owner_vehicle_no','$owner_vehicle_rc_no', '$owner_vehicle_jcc_no','$owner_vehicle_brand','$owner_vehicle_name','$owner_vehicle_color','$driver_id','$front_image','$back_image', '$side_image','$adhar_front','$adhar_back','$created_at')";
         $res_query=mysqli_query($conn, $insert_qry);
		 }  
		  $path = "image/".$front_image;
		   if(move_uploaded_file($img_file1, $path)){
            copy($path, "$path");
		   }  
		   $path = "image/".$back_image;
		   if(move_uploaded_file($img_file2, $path)){
            copy($path, "$path");
		   } 
		    $path = "image/".$side_image;
		   if(move_uploaded_file($img_file3, $path)){
            copy($path, "$path");
		   } 
		    $path = "image/".$adhar_front;
		   if(move_uploaded_file($img_file4, $path)){
            copy($path, "$path");
		   } 
		    $path = "image/".$adhar_back;
		   if(move_uploaded_file($img_file5, $path)){
            copy($path, "$path");
		   }     

		}
		if( $res_query){
			header('location:manage-owner.php');
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
	
	<title>Redicabs | Admin Add Owner</title>

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
					
						<h2 class="page-title">Add Owner</h2>


						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Add Owner</div>
									<div class="panel-body">

					<form action="" method="post" name="add_owner" id="add_owner" class="form-horizontal" enctype="multipart/form-data">
										
											
  	        <!-- 	<div class="errorWrap"><strong>ERROR</strong></div>
			<div class="succWrap"><strong>SUCCESS</strong></div> -->
									<div class="col-md-5">
											<div class="form-group">
												<label for="owner_name" class="col-sm-4 control-label">Owner Name <span style="color:red">*</span></label>

												<div class="col-sm-8">
													<input type="text" class="form-control" name="owner_name" id="owner_name"  placeholder="Enter  Name" required>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<label for="owner_mobile" class="col-sm-4 control-label">Mobile  <span style="color:red">*</span></label>
												<div class="col-sm-8">
													<input type="number" class="form-control" name="owner_mobile" id="owner_mobile" placeholder="Mobile Number" required>
												</div>
											</div>
									</div>

										<div class="col-md-5">
											<div class="form-group">
												<label for="owner_email" class="col-sm-4 control-label"> Email Id  <span style="color:red">*</span></label>
												<div class="col-sm-8">
													<input type="email" class="form-control" name="owner_email" id="owner_email" placeholder="Email Id" required>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<label for="owner_vehicle_no" class="col-sm-4 control-label"> Vehicle Number<span style="color:red">*</span></label>
												<div class="col-sm-8">
													<input type="text" class="form-control"  name="owner_vehicle_no" id="owner_vehicle_no" placeholder=" Vehicle Number" required>
												</div>
											</div>
									</div>


								<!-- 	<div class="col-md-5">
											<div class="form-group">
												<label for="owner_vehicle_no" lass="col-sm-4 control-label"> Vehicle Number <span style="color:red">*</span> </label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="owner_vehicle_no" id="owner_vehicle_no" placeholder=" Vehicle Number" required>
												</div>
											</div>
									</div> -->

									<div class="col-md-5">
											<div class="form-group">
												<label  for="owner_vehicle_rc_no"class="col-sm-4 control-label">Vehicle RC Number  <span style="color:red">*</span></label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="owner_vehicle_rc_no" id="owner_vehicle_rc_no" placeholder="Vehicle RC Number" required>
												</div>
											</div>
									</div>

									<div class="col-md-5">
											<div class="form-group">
												<label  for="owner_vehicle_jcc_no"class="col-sm-4 control-label">Vehicle Jcc Number  <span style="color:red">*</span></label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="owner_vehicle_jcc_no" id="owner_vehicle_jcc_no" placeholder=" Vehicle Jcc Number" required>
												</div>
											</div>
									</div>


									<div class="col-md-5">
											<div class="form-group">
												<label for="owner_vehicle_brand" class="col-sm-4 control-label">Vehicle Brand  <span style="color:red">*</span></label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="owner_vehicle_brand" id="owner_vehicle_brand" placeholder="Vehicle Brand" required>
												</div>
											</div>
									</div>

									<div class="col-md-5">
											<div class="form-group">
												<label for="owner_vehicle_name"class="col-sm-4 control-label"> Vehicle Name  <span style="color:red">*</span></label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="owner_vehicle_name" id="owner_vehicle_name" placeholder="Vehicle Name" required>
												</div>
											</div>
									</div>

									<div class="col-md-5">
											<div class="form-group">
												<label for="owner_vehicle_color" class="col-sm-4 control-label"> Vehicle Color  <span style="color:red">*</span></label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="owner_vehicle_color" id="owner_vehicle_color" placeholder=" Vehicle Color">
												</div>
											</div>
									</div>


																

									<div class="col-md-5">
										<div class="form-group">
												<label class="col-sm-4 control-label"> Assign Driver  <span style="color:red">*</span></label>
											<div class="col-sm-8">
												<select class="selectpicker" name="driver_id" id="driver_id" >
													<option value=""> Select </option>
													

		<?php										
			$qry = "SELECT id, name from tbldriver";
		  	$exe = mysqli_query($conn, $qry); 
		  	while ($row = mysqli_fetch_array($exe)) 
		  	{
		  ?>
  <option  value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?>
  </option>
 
  <?php
	}
  ?>
   </select>
											</div>
										</div>
									</div>


									<div class="form-group">
										<div class="col-sm-12">
										<h4><b>Upload Vehicle Images</b></h4>
										</div>
									</div>

								<div class="form-group">
									<div class="col-sm-4">
										Front Image <span style="color:red">*</span><input type="file" name="front_image" id="front_image"required>
									</div>
									<div class="col-sm-4">
										 Back Image <span style="color:red">*</span><input type="file" name="back_image" id="back_image"required>
									</div>
									<div class="col-sm-4">
										 Side Image <span style="color:red">*</span><input type="file" name="side_image" id="side_image"required>
									</div>
								</div>
								<div class="form-group">
										<div class="col-sm-12">
										<h4><b>Upload Documents</b></h4>
										</div>
									</div>
								<div class="form-group">
									<div class="col-sm-4">
										Adhar Front Image <span style="color:red">*</span><input type="file" name="adhar_front" id="adhar_front" required>
									</div>
									<div class="col-sm-4">
										Adhar Back Image <span style="color:red">*</span><input type="file" name="adhar_back" id="adhar_back" required>
									</div>
								
								</div>




											<div class="hr-dashed"></div>


											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
						
										<button class="btn btn-primary" name="owner_submit" type="submit">Submit</button>
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
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/additional-methods.min.js"></script>
	<script src="js/validation.js"></script>

	


</body>

</html>
