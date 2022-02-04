<?php
include('includes/config.php');
$user_id = $_GET['id'];
$u_query = "SELECT * FROM tbldriver WHERE id='$user_id'";
$user_update_query = mysqli_query($conn, $u_query);
$urows = mysqli_fetch_array($user_update_query);
//update
if (isset($_POST['upsubmit'])) {
	$name = htmlspecialchars($_POST['name']);
	$number = htmlspecialchars($_POST['number']);
	$email = htmlspecialchars($_POST['email']);
	$location = htmlspecialchars($_POST['location']);


	$adhar = $_FILES['adhar']['name'];
	$type = $_FILES['adhar']['type'];
	$size = $_FILES['adhar']['size'];
	$img_file1 = $_FILES['adhar']['tmp_name'];

	$pan = $_FILES['pan']['name'];
	$img_type = $_FILES['pan']['type'];
	$img_size = $_FILES['pan']['size'];
	$img_file2 = $_FILES['pan']['tmp_name'];

	$licence = $_FILES['licence']['name'];
	$img_type = $_FILES['licence']['type'];
	$img_size = $_FILES['licence']['size'];
	$img_file3 = $_FILES['licence']['tmp_name'];

	$path1 = "image/" . $pan;
	$path2 = "image/" . $licence;



	$update_qry = "UPDATE tbldriver SET  name='$name',number='$number',email='$email',location='$location' WHERE id='$user_id'";
	$inst_u_fn1_qry = mysqli_query($conn, $update_qry);

	if ($inst_u_fn1_qry) {
		header("location:manage-driver.php");
	}

	if ($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif') {

		if (empty($adhar) or empty($pan) or empty($licence)) {
			$update_qry = "UPDATE  tbldriver SET adhar='$adhar',pan='$pan',licence='$licence' WHERE id='$user_id'";
			$inst_u_fn_qry = mysqli_query($conn, $update_qry);
			$path = "image/" . $adhar;
			if (move_uploaded_file($img_file1, $path)) {
				copy($path, "$path");
			}
			$path = "image/" . $pan;
			if (move_uploaded_file($img_file2, $path)) {
				copy($path, "$path");
			}
			$path = "image/" . $licence;
			if (move_uploaded_file($img_file3, $path)) {
				copy($path, "$path");
			}
		} else {
			$update_qry = "UPDATE  tbldriver SET adhar='$adhar',pan='$pan',licence='$licence' WHERE id='$user_id'";
			$inst_u_fn_qry = mysqli_query($conn, $update_qry);
			$path = "image/" . $adhar;
			if (move_uploaded_file($img_file1, $path)) {
				copy($path, "$path");
			}
			$path = "image/" . $pan;
			if (move_uploaded_file($img_file2, $path)) {
				copy($path, "$path");
			}
			$path = "image/" . $licence;
			if (move_uploaded_file($img_file3, $path)) {
				copy($path, "$path");
			}
		}
		if ($inst_u_fn_qry) {
			header("location:manage-driver.php");
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

	<title>Redicabs |Edit-driver</title>

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

						<h2 class="page-title">Update driver</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Update driver</div>
									<div class="panel-body">
										<form method="post" name="chngpwd" id="chngpwd" class="form-horizontal" enctype="multipart/form-data">

											<div class="form-group">
												<label class="col-sm-4 control-label">Driver Name</label>
												<div class="col-sm-8">
													<!-- 													
<input type="hidden" class="form-control" id="id" placeholder="Enter Name" name="id" value="<?php echo $urows['id']; ?>"> -->
													<input type="text" class="form-control" name="name" id="name" value="<?php echo $urows['name']; ?>" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label">Driver Number</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="number" id="number" value="<?php echo $urows['number']; ?>" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label"> Driver Email</label>
												<div class="col-sm-8">
													<div class="form-group">
														<input type="email" class="form-control" name="email" id="email" value="<?php echo $urows['email']; ?>" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">Driver's Location</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="location" id="location" value="<?php echo $urows['location']; ?>" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">Driver Adhar no.</label>
													<div class="col-sm-8">
														<img src="image/<?php echo $urows['adhar']; ?>" style=" width:80px;" required>
														<input type="file" class="form-control" name="adhar" id="adhar">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">Driver pancard no.</label>
													<div class="col-sm-8">
														<img src="image/<?php echo $urows['pan']; ?>" style=" width:80px;">
														<input type="file" class="form-control" name="pan" id="pan" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">Driving Licence</label>
													<div class="col-sm-8">
														<img src="image/<?php echo $urows['licence']; ?>" style=" width:80px;">
														<input type="file" class="form-control" name="licence" id="licence" required>
													</div>
												</div>

												<div class="hr-dashed"></div>


												<div class="form-group">
													<div class="col-sm-8 col-sm-offset-4">

														<button class="btn btn-primary" name="upsubmit" type="submit">Submit</button>
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
	<script src="js/validation.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

</body>

</html>