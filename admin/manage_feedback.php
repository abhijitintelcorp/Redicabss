<?php
 include "includes/config.php";
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
	
	<title>Car Rental Portal |Admin Manage Owner Details   </title>

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
<<<<<<< HEAD
.addbtn{
	margin-left: 1100px;
	margin-bottom: 20px;
	background-color: #37a6c4;
	color: white;
	font-size: 18px;

}
=======

>>>>>>> main
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

						<h2 class="page-title">Manage Feedback</h2>
<<<<<<< HEAD
<a href="add_feedback.php"><button class="addbtn">+ Add Feedback</button></a>
=======
>>>>>>> main
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Feedback Details</div>
							<div class="panel-body">
							
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="border:2px solid #1886bb;">
									<thead>
										<tr>
										<th>Sl.No.</th>
										<th>Booking No.</th>
<<<<<<< HEAD
										<th>Driver Id</th>
										<th>User Id</th>
										<th>Good</th>
										<th>Medium</th>
										<th>Bad</th>
										<th colspan="2">Action</th>
=======
										<th>User Name</th>	
										<th>Driver Name</th>								
										<th>Date of Journey</th>
										<th>Feedback Message</th>
										<th>Status</th>
										<th>Action</th>
>>>>>>> main
										</tr>
									</thead>


<<<<<<< HEAD
	<?php
=======
<?php
>>>>>>> main
         $retrive_qyr="SELECT * FROM add_feedback";
         $retrive_fn_query=mysqli_query($conn,$retrive_qyr);
         $count=0;
         while($row=mysqli_fetch_array($retrive_fn_query)){
         $count++;
     ?>
<<<<<<< HEAD
		
=======
>>>>>>> main
									<tbody>
										<tr>
											<td><?php echo $count;?></td>
											<td></td>
											<td></td>
											<td></td>
<<<<<<< HEAD
											<td><?php echo $row['polite_professional'];?>
												<br><?php echo $row['value_money'];?>
												<br><?php echo $row['ontime_pikup'];?>
												<br><?php echo $row['comfortable_ride'];?>
												<br><?php echo $row['familiar'];?>
											</td>
											<td><?php echo $row['didnot_take_ride'];?>
												<br><?php echo $row['unsafe_ride'];?>
												<br><?php echo $row['uncomfortable_ride'];?>
												<br><?php echo $row['rash_riding'];?>
												<br><?php echo $row['unprofessional_rider'];?>
												<br><?php echo $row['bad_car_condition'];?>
												<br><?php echo $row['not_wearing_mask'];?>
												<br><?php echo $row['reason'];?>
											</td>
											<td><?php echo $row['d_didnot_take_ride'];?>
												<br><?php echo $row['d_unsafe_ride'];?>
												<br><?php echo $row['d_uncomfortable_ride'];?>
												<?php echo $row['d_rash_riding'];?>
												<br><?php echo $row['d_unprofessional_rider'];?>
												<br><?php echo $row['d_bad_car_condition'];?>
												<br><?php echo $row['d_not_wearing_mask'];?>
												<br><?php echo $row['d_reason'];?>
											</td>
											
											<td><a href=""><i class="fa fa-edit"></i></a></td>

											<td><a href="feedback_delete.php?id=<?php echo $row['id'];?>"><i class="fa fa-close"></i></a></td>
										</tr>
									</tbody>
	<?php
       }
     ?>

=======
											<td><?php echo $row['created_at'];?></td>
											<td><?php echo $row['message'];?></td>
											<td><?php echo $row['status'];?></td>
											<td><a href="feedback_delete.php?id=<?php echo $row['id'];?>"><i class="fa fa-close"></i></a></td>
										</tr>
									</tbody>
	
	<?php
       }
     ?>
>>>>>>> main
  						</table>

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