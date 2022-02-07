<?php
include("includes/config.php");
$id = $_GET['id'];
$sel="SELECT tblbooking.id,tblbooking.user_id,tblbooking.BookingNumber,tblbooking.VehicleId,tblbooking.Driverid,tblbooking.BrandId,tblbooking.VehicleNumber,tblbooking.PricePerDay,tblbooking.FuelType,tblbooking.FromDate,tblbooking.ToDate,tblbooking.pickup_time,tblusers.id,tblusers.FullName,tblusers.EmailId,tblusers.ContactNo,tblvehicles.id,tblvehicles.vehreg,tblvehicles.VehiclesTitle,tbldriver.id,tbldriver.name,tbldriver.number FROM tblbooking JOIN tblusers ON tblbooking.user_id=tblusers.id JOIN tblvehicles ON tblbooking.VehicleId=tblvehicles.id JOIN tbldriver ON tblbooking.Driverid=tbldriver.id  WHERE tblbooking.id=$id";
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
    				<h3 style=" border-bottom: 1px solid #00000030;">Booking Status</h3>
					<p>Driver Name: <?php echo $rows['name']; ?></p>
	  				<p>Contact No: <?php echo $rows['number']; ?></p>
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
			<div class="row">
				<div class="col-md-6"></div>
				<div class="col-md-6">
    				<h3 style=" border-bottom: 1px solid #00000030;">Payment</h3>
	  					<p>Total Payment: <?php echo "<b>".$rows['PricePerDay']." Rupees</b>"; ?></p>
    			</div>
            </div>
    		
  	</div>
  	<div><a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="<?php echo $rows['PricePerDay']; ?>" data-id="$id">Go to Payment</a></div>
    </div>
  </div>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_tJ6KDg9rJZDvkH",
    "amount": (1*100), // 2000 paise = INR 20
    "name": "Redicabs",
    "description": "Payment",
    "image": "https://www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
    "handler": function (response){
          $.ajax({
            url: 'http://localhost/razorpay/payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {

               window.location.href = 'http://localhost/razorpay/success.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });

</script>
</body>
</html>
