<!-- insert -->

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

						<form action="" method="post" name="" class="form-horizontal" enctype="multipart/form-data" >
																	

							<div class="col-md-12">
								
									<h4>What Went Well??</h4>

								</div><br>
								<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="good1" name="good1" value="good">
											  <label for="good1"> Polite and Professional Driver</label>
												</div>
											</div>
									</div>

									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="good2" name="good2" value="good">
											  <label for="good2">Value of Money</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="good3" name="good3" value="good">
											  <label for="good3"> On Time Pikup</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="good4" name="good4" value="good">
											  <label for="good4">Comfortable Ride</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="good5" name="good5" value="good">
											  <label for="good5">Driver Familiar With The Route</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group" >
												<div class="col-sm-8">
													 <input type="checkbox" onclick="goodComment()">
													<label>My Reason is Not Listed</label>
													 <textarea type="text"  name="good6" id="Gcmt" style="display:none"></textarea> 
											  
												</div>
											</div>
									</div>



											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
						
										<button class="btn btn-primary" name="" type="submit">Submit</button>
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

						<form action="" method="post" name="" id="" class="form-horizontal" enctype="multipart/form-data">
																	

							<div class="col-md-12">
								
									<h4>Why Wasn't This a Good Ride??</h4>

								</div><br>
								<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="medium1" name="medium1" value="medium">
											  <label for="medium1"> Did Not Take This Ride</label>
												</div>
											</div>
									</div>

									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="medium2" name="medium2" value="medium">
											  <label for="medium2">Unsafe Ride Experience</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="medium3" name="medium3" value="medium">
											  <label for="medium3"> Uncomfortable Ride</label>
												</div>
											</div>
									</div>
								<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="medium4" name="medium4" value="medium">
											  <label for="medium4">Rash Riding</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="medium5" name="medium5" value="medium">
											  <label for="medium5">Unprofessional Rider Behaviour</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="medium6" name="medium6" value="medium">
											  <label for="medium6">Bad Car Condition</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="medium7" name="medium7" value="medium">
											  <label for="medium7">The Driver Was Not Wearing Masks</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													<input type="checkbox" onclick="mediumComment()">
													<label>My Reason is Not Listed</label>
													 <textarea type="text"  name="medium8" id="Mcmt" style="display:none"></textarea> 
											  
												</div>
											</div>
									</div>



											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
						
										<button class="btn btn-primary" name="" type="submit">Submit</button>
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

						<form action="" method="post" name="" id="" class="form-horizontal" enctype="multipart/form-data">
																	

							<div class="col-md-12">
								
									<h4>What Went Wrong??</h4>

								</div><br>
								<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="bad1" name="bad1" value="bad">
											  <label for="bad1"> Did Not Take This Ride</label>
												</div>
											</div>
									</div>

									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="bad2" name="bad2" value="bad">
											  <label for="bad2">Unsafe Ride Experience</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="bad3" name="bad3" value="bad">
											  <label for="bad3"> Uncomfortable Ride</label>
												</div>
											</div>
									</div>
								<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="bad4" name="bad4" value="bad">
											  <label for="bad4">Rash Riding</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="bad5" name="bad5" value="bad">
											  <label for="bad5">Unprofessional Rider Behaviour</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="bad6" name="bad6" value="bad">
											  <label for="bad6">Bad Car Condition</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													 <input type="checkbox" id="bad7" name="bad7" value="bad">
											  <label for="bad7">The Driver Was Not Wearing Masks</label>
												</div>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<div class="col-sm-8">
													<input type="checkbox" onclick="badComment()">
													<label>My Reason is Not Listed</label>
													 <textarea type="text"  name="bad8" id="Bcmt" style="display:none"></textarea> 
											  
												</div>
											</div>
									</div>



											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
						
										<button class="btn btn-primary" name="" type="submit">Submit</button>
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
<script>
function goodComment() {
  var x = document.getElementById("Gcmt");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

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
