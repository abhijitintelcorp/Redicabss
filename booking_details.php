<?php
include("includes/config.php");
$id = $_GET['id'];
$sel="SELECT tblbooking.id,tblbooking.user_id,tblbooking.BookingNumber,tblbooking.VehicleId,tblbooking.Driverid,tblbooking.BrandId,tblbooking.VehicleNumber,tblbooking.PricePerDay,tblbooking.FuelType,tblbooking.FromDate,tblbooking.ToDate,tblbooking.pickup_time,tblusers.id,tblusers.FullName,tblusers.EmailId,tblusers.ContactNo,tblvehicles.id,tblvehicles.vehreg,tblvehicles.VehiclesTitle FROM tblbooking JOIN tblusers ON tblbooking.user_id=tblusers.id JOIN tblvehicles ON tblbooking.VehicleId=tblvehicles.id  WHERE tblbooking.id=$id";
$query=mysqli_query($conn,$sel);
$rows=mysqli_fetch_assoc($query);
?>
<!DOCTYPE>
<html lang="en">
<head>
  <title>Booking Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 
</head>
<body>
  <div class="card bg-light text-dark container"  style="margin-bottom: 30px; margin-top: 30px;">
    <div class="card-body">
<div class="container">
  <h2 style=" text-align: center;">Thank You! Your Booking </h2>
  	<h2 style="text-align: center; border-bottom: 1px solid #00000030;">BOOKING NUMBER: #<?php echo $rows['BookingNumber']; ?></h2><br>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<h3 style=" border-bottom: 1px solid #00000030;">Customer Details</h3>
	  					<p>Customer Name: <?php echo $rows['FullName']; ?></p>
	  					<p>Email Id: <?php echo $rows['EmailId']; ?></p>
	  					<p>Contact No: <?php echo $rows['ContactNo']; ?></p>
    			</div>
    			<div class="col-md-6">
    				<h3>Booking Status:</h3>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-6">
    				<h3 style=" border-bottom: 1px solid #00000030;">Vehicle</h3>
	  					<p>Vehicle Name: <?php echo $rows['VehiclesTitle']; ?></p>
	  					<p>Reg. No1: <?php echo $rows['vehreg']; ?></p>
    			</div>
    			<div class="col-md-6">
    				<h3 style=" border-bottom: 1px solid #00000030;">Date</h3>
    			
	  					<p>From: <?php echo $rows['FromDate']; ?></p>
	  					<p>To: <?php echo $rows['ToDate']; ?></p>
						<p>Pickup Time: <?php echo $rows['pickup_time']; ?></p>
	  			
    			</div>
    		</div>
    		
  	</div>
  	<div><center><button>Go to Payment</button></center></div>
    </div>
  </div>
</div>

</body>
</html>
