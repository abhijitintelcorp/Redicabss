<!-- insert -->

<?php
error_reporting(0);
 	include('includes/config.php');
 	date_default_timezone_set('Asia/Kolkata');
 	if(isset($_POST['feedback_submit']))
	{
		$booking_no=htmlspecialchars($_POST['booking_no']);
		$driver_id=htmlspecialchars($_POST['driver_id']);
		$polite_professional=htmlspecialchars($_POST['polite_professional']);
		$value_money=htmlspecialchars($_POST['value_money']);
		$ontime_pikup=htmlspecialchars($_POST['ontime_pikup']);
		$comfortable_ride=htmlspecialchars($_POST['comfortable_ride']);
		$familiar=htmlspecialchars($_POST['familiar']);

		$status=2;

					$insert_qry="INSERT INTO add_feedback(booking_no,polite_professional,value_money,ontime_pikup,comfortable_ride,familiar,status)VALUES('$booking_no','$polite_professional','$value_money','$ontime_pikup','$comfortable_ride','$familiar','$status')";

		$created_at=htmlspecialchars($_POST['created_at']);
		$status=2;

					$insert_qry="INSERT INTO add_feedback(booking_no,polite_professional,value_money,ontime_pikup,comfortable_ride,familiar,created_at,status)VALUES('$booking_no','$polite_professional','$value_money','$ontime_pikup','$comfortable_ride','$familiar','$created_at','$status')";

					$fn_qry = mysqli_query($conn, $insert_qry);
				} else if(isset($_POST['medium_submit'])){
					$didnot_take_ride=htmlspecialchars($_POST['didnot_take_ride']);
		             $unsafe_ride=htmlspecialchars($_POST['unsafe_ride']);
		             $uncomfortable_ride=htmlspecialchars($_POST['uncomfortable_ride']);
		             $rash_riding=htmlspecialchars($_POST['rash_riding']);
		             $unprofessional_rider=htmlspecialchars($_POST['unprofessional_rider']);
		             $bad_car_condition=htmlspecialchars($_POST['bad_car_condition']);
		             $not_wearing_mask=htmlspecialchars($_POST['not_wearing_mask']);
		             $reason=htmlspecialchars($_POST['reason']);
					 $status=1;

					$insert_qry="INSERT INTO add_feedback(didnot_take_ride,unsafe_ride,uncomfortable_ride,rash_riding,	unprofessional_rider,bad_car_condition,not_wearing_mask,reason,status)VALUES('$didnot_take_ride','$unsafe_ride','$uncomfortable_ride','$rash_riding','$unprofessional_rider','$bad_car_condition','$not_wearing_mask','$reason','$status')";
					$fn_qry = mysqli_query($conn, $insert_qry);
				} else if(isset($_POST['bad_submit'])){
					$d_didnot_take_ride=htmlspecialchars($_POST['d_didnot_take_ride']);
		             $d_unsafe_ride=htmlspecialchars($_POST['d_unsafe_ride']);
		             $uncomfortable_ride=htmlspecialchars($_POST['uncomfortable_ride']);
		             $d_rash_riding=htmlspecialchars($_POST['d_rash_riding']);
		             $d_unprofessional_rider=htmlspecialchars($_POST['d_unprofessional_rider']);
		             $d_bad_car_condition=htmlspecialchars($_POST['d_bad_car_condition']);
		             $d_not_wearing_mask=htmlspecialchars($_POST['d_not_wearing_mask']);
		             $d_reason=htmlspecialchars($_POST['d_reason']);
					 $status=0;

					 $insert_qry="INSERT INTO add_feedback(d_didnot_take_ride,d_unsafe_ride,uncomfortable_ride,d_rash_riding,	d_unprofessional_rider,d_bad_car_condition,d_not_wearing_mask,d_reason,status)VALUES('$d_didnot_take_ride','$d_unsafe_ride','$uncomfortable_ride','$d_rash_riding','$d_unprofessional_rider','$d_bad_car_condition','$d_not_wearing_mask','$d_reason','$status')";
					 $fn_qry = mysqli_query($conn, $insert_qry);
					} else {

						echo "<b stye='color:red;'>Please Try again Later</b>";
					
					if($fn_qry)
					{
						header('location:manage_feedback.php');
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
	
	<title>Redicabs | Feedback</title>

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
	.addbtn{
	background-color: #37a6c4;
	color: white;
	font-size: 18px;
	height: 40px;
	width: 100px;

}

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
					
						<h2 class="page-title">Feedback Form </h2>


						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">

									<div class="panel-heading"><center><b>How's Your Ride???</b></center></div>

							<div class="row">
		
			
										<div class="col-md-4"><h3>Booking Number:#</h3></div>

										<div class="col-md-4"><h3>User Name:</h3></div>

										<div class="col-md-4"><h3>Driver Name:</h3></div>
							</div>
									
									<div class="panel-heading">
										<center><h2><b>How's Your Ride?</b></h2></center></div>

									<div class="panel-body">


									<div class="col-md-12">
											
												
												<div class="col-sm-4">
													
													<img src="img/icon/good2.png">
													<!-- <h3>Good</h3> --><br><br>
													 <button class="addbtn" id="Good1">Good</button>
												</div>

												<div class="col-sm-4">
	
													<img src="img/icon/medium2.png">
													<!-- <h3>Medium</h3> --><br><br>
													 <button class="addbtn" id="Medium1">Medium</button>
		
												</div>
												<div class="col-sm-4">
													
													<img src="img/icon/bad2.png">
													<!-- <h3>Bad</h3> --><br><br>
													 <button class="addbtn" id="Bad1">Bad</button>
												</div>
											
									</div>

									</div>
								</div>
							</div>
							
						</div>
						
			
		<!--Good Area Start-->
					<div class="row" id="Good"  style="display:none">
						<div class="col-md-10">
							<div class="panel panel-default">
								<div class="panel-heading"><h3><center>Good</center></h3></div>
									<div class="panel-body">

						<form action="" method="post" name="feedbak_form" class="form-horizontal" enctype="multipart/form-data" >
																	

							<div class="col-md-12">

									<h4>What Went Well??</h4>

								</div><br>
								<div class="col-md-5">

											<div class="form-group">

											<div class="checkbox checkbox-inline">

												<div class="col-sm-8">
													 <input type="checkbox" id="good1" name="polite_professional" value="Polite and Professional Driver">
											  <label for="good1">Polite and Professional Driver</label>
												</div>
											</div>
									</div>

									<div class="col-md-5">

											<div class="form-group">

											<div class="checkbox checkbox-inline">

												<div class="col-sm-8">
													 <input type="checkbox" id="good2" name="value_money" value="Value of Money">
											  <label for="good2">Value of Money</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">

											<div class="form-group">

											<div class="checkbox checkbox-inline">

												<div class="col-sm-8">
													 <input type="checkbox" id="good3" name="ontime_pikup" value="On Time Pikup">
											  <label for="good3"> On Time Pikup</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">

											<div class="form-group">

											<div class="checkbox checkbox-inline">

												<div class="col-sm-8">
													 <input type="checkbox" id="good4" name="comfortable_ride" value="Comfortable Ride">
											  <label for="good4">Comfortable Ride</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">

											<div class="form-group">

											<div class="checkbox checkbox-inline">

												<div class="col-sm-8">
													 <input type="checkbox" id="good5" name="familiar" value="Driver Familiar With The Route">
											  <label for="good5">Driver Familiar With The Route</label>
												</div>
											</div>
									</div>
									


			 								<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
						
										<button class="btn btn-primary" name="feedback_submit" type="submit">Submit</button>
												</div>
											</div>
								
						</form>

							</div>
						</div>
				</div>
			</div>
			<!--Good Area End-->


					<!--Medium Area Start-->
					<div class="row" id="Medium"  style="display:none">
						<div class="col-md-10">
							<div class="panel panel-default">
								<div class="panel-heading"><h3><center>Medium</center></h3></div>
									<div class="panel-body">

						<form action="" method="post" name="feedback_form" id="" class="form-horizontal" enctype="multipart/form-data">
																	

							<div class="col-md-12">
								
									<h4>Why Wasn't This a Good Ride??</h4>

								</div><br>
								<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="medium1" name="didnot_take_ride" value="Did Not Take This Ride">
											  <label for="medium1"> Did Not Take This Ride</label>
												</div>
											</div>
									</div>

									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="medium2" name="unsafe_ride" value="Unsafe Ride Experience">
											  <label for="medium2">Unsafe Ride Experience</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="medium3" name="uncomfortable_ride" value="  Uncomfortable Ride">
											  <label for="medium3"> Uncomfortable Ride</label>
												</div>
											</div>
									</div>
								<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="medium4" name="rash_riding" value="Rash Riding">
											  <label for="medium4">Rash Riding</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="medium5" name="unprofessional_rider" value="Unprofessional Rider Behaviour">
											  <label for="medium5">Unprofessional Rider Behaviour</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="medium6" name="bad_car_condition" value="Bad Car Condition">
											  <label for="medium6">Bad Car Condition</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="medium7" name="not_wearing_mask" value="The Driver Was Not Wearing Masks">
											  <label for="medium7">The Driver Was Not Wearing Masks</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													<input type="checkbox" name="reason" value="My Reason is Not Listed" onclick="mediumComment()">
													<label>My Reason is Not Listed</label>
													 <textarea type="text"   id="Mcmt" style="display:none"></textarea> 
											  
												</div>
											</div>
									</div>



											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
						
										<button class="btn btn-primary" name="medium_submit" type="submit">Submit</button>
												</div>
											</div>
								
						</form>

							</div>
						</div>
				</div>
			</div>
			<!--Medium Area End-->


					<!--Bad Area Start-->
					<div class="row" id="Bad" style="display:none">
						<div class="col-md-10">
							<div class="panel panel-default">
								<div class="panel-heading"><h3><center>Bad</center></h3></div>
									<div class="panel-body">

						<form action="" method="post" name="feedback_form" id="" class="form-horizontal" enctype="multipart/form-data">
																	

							<div class="col-md-12">
								
									<h4>What Went Wrong??</h4>

								</div><br>
								<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="bad1" name="d_didnot_take_ride" value=" Did Not Take This Ride">
											  <label for="bad1"> Did Not Take This Ride</label>
												</div>
											</div>
									</div>

									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="bad2" name="d_unsafe_ride" value="Unsafe Ride Experience">
											  <label for="bad2">Unsafe Ride Experience</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="bad3" name="d_uncomfortable_ride" value="Uncomfortable Ride">
											  <label for="bad3"> Uncomfortable Ride</label>
												</div>
											</div>
									</div>
								<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="bad4" name="d_rash_riding" value="Rash Riding">
											  <label for="bad4">Rash Riding</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="bad5" name="d_unprofessional_rider" value="Unprofessional Rider Behaviour">
											  <label for="bad5">Unprofessional Rider Behaviour</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="bad6" name="d_bad_car_condition" value="Bad Car Condition">
											  <label for="bad6">Bad Car Condition</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="bad7" name="d_not_wearing_mask" value="The Driver Was Not Wearing Masks">
											  <label for="bad7">The Driver Was Not Wearing Masks</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													<input type="checkbox" name="d_reason" value="My Reason is Not Listed"  onclick="badComment()">
													<label>My Reason is Not Listed</label>
													 <textarea type="text"  id="Bcmt" style="display:none"></textarea> 
											  
												</div>
											</div>
									</div>



											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
						
										<button class="btn btn-primary" name="bad_submit" type="submit">Submit</button>
												</div>
											</div>
								
						</form>

							</div>
						</div>
				</div>
			</div>
			<!--Bad Area End-->



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



<script>
const btn = document.getElementById("Good1");
const btn1 = document.getElementById("Medium1");
const btn2 = document.getElementById("Bad1");
var Good  = document.getElementById("Good");
var Medium = document.getElementById("Medium");
var Bad = document.getElementById("Bad");

btn.onclick = function () {
  if (Good.style.display !== "none") {
    Good.style.display = "none";
    Medium.style.display = "none";
    Bad.style.display = "none";
  } else {
    Good.style.display = "block";
    Medium.style.display = "none";
    Bad.style.display = "none";
  }
};
btn1.onclick = function () {
  if (Medium.style.display !== "none") {
   Good.style.display = "none";
    Medium.style.display = "none";
    Bad.style.display = "none";
  } else {
  	 Good.style.display = "none";
    Medium.style.display = "block";
     Bad.style.display = "none";
  }
};
btn2.onclick = function () {
  if (Bad.style.display !== "none") {
   Good.style.display = "none";
    Medium.style.display = "none";
    Bad.style.display = "none";
  } else {
  	 Good.style.display = "none";
  	 Medium.style.display = "none";
    Bad.style.display = "block";
  }
};
</script>

<!--Good  Comment-->
<!-- <script>
function goodComment() {
  var x = document.getElementById("Gcmt");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script> -->

<!--Medium  Comment-->
<script>
function mediumComment() {
  var y = document.getElementById("Mcmt");
  if (y.style.display === "none") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
  }
}
</script>

<!--BadComment-->
<script>
function badComment() {
  var z = document.getElementById("Bcmt");
  if (z.style.display === "none") {
    z.style.display = "block";
  } else {
    z.style.display = "none";
  }
}
</script>
</body>

</html>
