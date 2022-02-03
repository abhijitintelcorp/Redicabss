<?php
session_start();
error_reporting(0);
include('includes/config.php');

// Code for change password	
if (isset($_POST['submit'])) {
	$name = htmlspecialchars($_POST['name']);
	$number = htmlspecialchars($_POST['number']);
	$email = htmlspecialchars($_POST['email']);
	$location = htmlspecialchars($_POST['location']);
	$adhar = htmlspecialchars($_POST['adhar']);
	$pan = htmlspecialchars($_POST['pan']);
	$licence = htmlspecialchars($_POST['licence']);
	$adhar = $_FILES['adhar']['name'];
	$img_type = $_FILES['adhar']['type'];
	$img_size = $_FILES['adhar']['size'];
	$img_file1 = $_FILES['adhar']['tmp_name'];
	// echo $name." ".$type." ".$size." ".$img_file;
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

	if ($img_type == 'image/jpg' || $img_type == 'image/jpeg' || $img_type == 'image/png' || $img_type == 'image/gif') {
		if ($img_size <= 7000000) { {

				$insert_qry = "INSERT INTO tbldriver(`name`,`number`,`email`,`location`,`adhar`,`pan`,`licence`)VALUES('$name','$number','$email','$location','$adhar','$pan','$licence')";
				$fn_qry = mysqli_query($conn, $insert_qry);
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

	<title>Redicabs | Admin Add Driver</title>

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

						<h2 class="page-title">AddDriver</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">AddDriver</div>
									<div class="panel-body">
										<form method="post" name="chngpwd" id="chngpwd" class="form-horizontal" enctype="multipart/form-data" onSubmit="return valid();">


											<div class="form-group">
												<label class="col-sm-4 control-label">Driver Name</label>
												<div class="col-sm-8">

													<input type="text" class="form-control" name="name" id="name" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label">Contact Number</label>
												<div class="col-sm-8">
													<input type="number" class="form-control" name="number" id="number" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label"> Driver Email</label>
												<div class="col-sm-8">
													<div class="form-group">
														<input type="email" class="form-control" name="email" id="email" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">Driver's Location</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="location" id="location" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">Driver Adhar no.</label>
													<div class="col-sm-8">
														<input type="file" class="form-control" name="adhar" id="adhar" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">Driver pancard no.</label>
													<div class="col-sm-8">
														<input type="file" class="form-control" name="pan" id="pan" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">Driving Licence</label>
													<div class="col-sm-8">
														<input type="file" class="form-control" name="licence" id="licence" required>
													</div>
												</div>

												<div class="hr-dashed"></div>




												<div class="form-group">
													<div class="col-sm-8 col-sm-offset-4">

														<button class="btn btn-primary" value="submit" name="submit" type="submit">Submit</button>
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