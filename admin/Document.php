<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
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
	
	<title>Redicabs | DocumentManagement</title>

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
    padding-top: 10px;
    background: #fff;
    margin-left:50%;
    margin-top:10px;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
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
					
						<h2 class="page-title" >Document Management</h2>
                        <div class="container">	
                        <div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
<div class="panel-heading">
  <button class="tablinks" style="width: 100px;
    color: black;" onclick="openCity(event, 'owner')">owner</button>
  <button class="tablinks"  style="width: 100px;
    color: black;" onclick="openCity(event, 'driver')">driver</button>
  <button class="tablinks"style="width: 100px;
    color: black;" onclick="openCity(event, 'Tokyo')">vehicle</button>
</div>
<div class="panel-body">
<div id="owner" class="tabcontent">
  <h3>owner</h3>
  <?php 
  include('includes/config.php');
$sql ="SELECT * from add_owner";
$query = mysqli_query($conn,$sql);
$results=mysqli_fetch_assoc($query);
$row=mysqli_num_rows($query);
?>
  
											<div class="form-group">
												<label class="col-sm-4 control-label"> Name</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" value="<?php echo $row['owner_name'];?>" name="brand" id="brand" required>
												</div>
											</div>
											<div class="hr-dashed"></div>
											
										<?php ?>
</div>

<div id="driver" class="tabcontent">
  <h3>driver</h3>
  <?php   
  include('includes/config.php');
$sql ="SELECT * from tbldriver";
$query = mysqli_query($conn,$sql);
$results=mysqli_fetch_assoc($query);
$row=mysqli_num_rows($query);
?>
  <div class="form-group">
												<label class="col-sm-4 control-label">Driver</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" value="<?php echo $row['name'];?>" name="driver" id="driver" required>
												</div>
											</div>
                                            <?php ?>
</div>

<div id="vehicle" class="tabcontent">
  <h3>vehicle</h3>
  <?php   
  include('includes/config.php');
$sql ="SELECT * from tblvehicles";
$query = mysqli_query($conn,$sql);
$results=mysqli_fetch_assoc($query);
$row=mysqli_num_rows($query);
?>
  <div class="form-group">
												<label class="col-sm-4 control-label">Vehicles</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" value="<?php echo $row['VehiclesTitle'];?>" name="vehicle" id="vehicle" required>
												</div>
											</div>
                                            <?php ?>
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
