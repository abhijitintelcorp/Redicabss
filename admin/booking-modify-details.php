<?php
session_start();
error_reporting(0);
include('includes/config.php');
$user_id = $_GET['bid'];
	$u_query = "SELECT tblusers.*,tblbrands.BrandName,tblvehicles.VehiclesTitle,tblbooking.FromDate,
	tblbooking.ToDate,tblbooking.message,tblbooking.VehicleId as vid,tblbooking.Status,tblbooking.PostingDate,
	tblbooking.id,tblbooking.BookingNumber,
	DATEDIFF(tblbooking.ToDate,tblbooking.FromDate) as totalnodays,tblbooking.PricePerDay,,tblbooking.Time
	from tblbooking join tblvehicles on tblvehicles.id=tblbooking.VehicleId join tblusers on 
    tblusers.id=tblbooking.user_id join tblbrands on tblvehicles.VehiclesBrand=tblbrands.id
     where tblbooking.id='$user_id'";
	$user_update_query = mysqli_query($conn, $u_query);
	$urows = mysqli_fetch_array($user_update_query);
   if (isset($_POST['owner_update_submit'])) {
         
         $priceperday=htmlspecialchars($_POST['priceperday']);
         $name=htmlspecialchars($_POST['name']);
         $number=htmlspecialchars($_POST['number']);
         $time=htmlspecialchars($_POST['time']);

		 $update_qry= "UPDATE tblbooking SET PricePerDay='$priceperday',Driverid='$name',
         Time='$time',DriverNo='$number' WHERE tblbooking.id='$user_id'";
       
		   
        	  $inst_u_fn1_qry = mysqli_query($conn, $update_qry);

        	   if($inst_u_fn1_qry){
        	header("location:new-bookings.php");
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

    <title>RediCabs | New Bookings </title>

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
    <?php include('includes/header.php');?>

    <div class="ts-main-content">
        <?php include('includes/leftbar.php');?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Booking Details</h2>

                        <!-- Zero Configuration Table -->
                        <div class="panel panel-default">
                            <div class="panel-heading">Bookings Info</div>
                            <div class="panel-body">


                                <div id="print">
                                    <table border="1" class="display table table-striped table-bordered table-hover"
                                        cellspacing="0" width="100%">

                                        <tbody>
                                            <form method="post">
                                                <?php 
	extract($_POST);
	$bid=intval($_GET['bid']);
	$query = "SELECT tblusers.*,tblbrands.BrandName,
    tblvehicles.VehiclesTitle,tblbooking.FromDate,tblbooking.Driverid,tblbooking.DriverNo,
	tblbooking.ToDate,tblbooking.message,tblbooking.VehicleId as vid,tblbooking.Status,tblbooking.PostingDate,
	tblbooking.id,tblbooking.BookingNumber,	DATEDIFF(tblbooking.ToDate,tblbooking.FromDate) 
    as totalnodays,tblbooking.PricePerDay,tblbooking.Time
	from tblbooking join tblvehicles on tblvehicles.id=tblbooking.VehicleId 
     join tblusers on tblusers.id=tblbooking.user_id 
    join tblbrands on tblvehicles.VehiclesBrand=tblbrands.id  where tblbooking.id='$bid'";
	$query_run = mysqli_query($conn, $query);
	$cnt=1;
	if(mysqli_num_rows($query_run) > 0)   
	{
	while($row = mysqli_fetch_array($query_run))
    {
	?> <form action="booking-update-details.php" method="post">
                                                    <h3 style="text-align:center; color:red">
                                                        #<?php echo $row['BookingNumber'];?> Booking Details </h3>

                                                    <tr>
                                                        <th colspan="4" style="text-align:center;color:blue">User
                                                            Details
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Booking No.</th>
                                                        <td><input type="text" class="form-control" name="bookingno"
                                                                id="bookingno" readonly="readonly"
                                                                value="<?php echo $row['BookingNumber'];?>" required>
                                                        </td>
                                                        <th>Name</th>
                                                        <td><input type="text" class="form-control" name="fname"
                                                                id="fname" readonly="readonly"
                                                                value="<?php echo $row['FullName'];?>" required></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email Id</th>
                                                        <td><input type="text" class="form-control" name="email"
                                                                id="email" readonly="readonly"
                                                                value="<?php echo $row['EmailId'];?>" required></td>
                                                        <th>Contact No</th>
                                                        <td><input type="text" class="form-control" name="contactno"
                                                                id="contactno" readonly="readonly"
                                                                value="<?php echo $row['ContactNo'];?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Address</th>
                                                        <td><input type="text" class="form-control" name="address"
                                                                id="address" readonly="readonly"
                                                                value="<?php echo $row['Address'];?>" required>
                                                        </td>
                                                        <th>City</th>
                                                        <td><input type="text" class="form-control" name="city"
                                                                id="city" readonly="readonly"
                                                                value="<?php echo $row['City'];?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Country</th>
                                                        <td colspan="3"><input type="text" class="form-control"
                                                                name="country" id="country" readonly="readonly"
                                                                value="<?php echo $row['Country'];?>" required>
                                                        </td>
                                                    </tr>







                                                    <tr>
                                                        <th colspan="4" style="text-align:center;color:blue">Booking
                                                            Details
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Vehicle Name</th>
                                                        <td><input type="text" class="form-control" name="vehiclestitle"
                                                                id="vehiclestitle" readonly="readonly"
                                                                value="<?php echo $row['VehiclesTitle'];?>" required>
                                                        </td>
                                                        <th>Booking Date</th>
                                                        <td><input type="text" class="form-control" name="postingdate"
                                                                id="postingdate" readonly="readonly"
                                                                value="<?php echo $row['PostingDate'];?>" required></td>
                                                    </tr>
                                                    <tr>
                                                        <th>From Date</th>
                                                        <td><input type="text" class="form-control" name="fromdate"
                                                                id="fromdate" readonly="readonly"
                                                                value="<?php echo $row['FromDate'];?>" required>
                                                        </td>
                                                        <th>To Date</th>
                                                        <td><input type="text" class="form-control" name="todate"
                                                                id="todate" readonly="readonly"
                                                                value="<?php echo $row['ToDate'];?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>PickUp Date</th>
                                                        <td><input type="time" class="form-control" name="time"
                                                                id="todate" value="<?php echo $row['Time'];?>" required>

                                                    </tr>
                                                    <tr>
                                                        <th>Total Days</th>
                                                        <td><input type="text" class="form-control" name="totalnodays"
                                                                id="totalnodays" readonly="readonly"
                                                                value="<?php echo htmlentities($tdays=$row['totalnodays'])+1;?>"
                                                                required>
                                                        </td>
                                                        <th>Rent Per Days</th>
                                                        <td><input type="text" class="form-control" name="priceperday"
                                                                id="priceperday" onkeyup="add()"
                                                                value="<?php echo htmlentities($ppdays=$row['PricePerDay']);?>"
                                                                required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="3" style="text-align:center">Grand Total</th>
                                                        <td><input type="text" class="form-control" name="total"
                                                                id="total" readonly="readonly"
                                                                value="<?php echo htmlentities(($tdays)*$ppdays);?>"
                                                                required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Booking Status</th>
                                                        <td><?php 
if($row['Status']==0)
{
echo htmlentities('Not Confirmed yet');
} else if ($row['Status']==1) {
echo htmlentities('Confirmed');
}
 else{
 	echo htmlentities('Cancelled');
 }
										?></td>
                                                        <th>Last updation Date</th>
                                                        <td><?php echo htmlentities($row['UpdationDate']);?></td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="4" style="text-align:center;color:blue">Assign
                                                            Driver
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Driver Name</th>
                                                        <td><select name="name" id="name" type="text"
                                                                class="selectpicker">
                                                                <option value="">Select Driver</option>
                                                                <?php              
  $qry1 = "SELECT * from tbldriver";
  $exe = mysqli_query($conn, $qry1); 
  while ($row1 = mysqli_fetch_array($exe)) 
  {
	  $number = $row1['number'];
      $drivername = $row1['name'];
  ?>
                                                                <option number="<?php echo $row1['number']; ?>"
                                                                    value="<?php echo $row1['id'] ?>">
                                                                    <?php echo $row1['name'] ?>
                                                                </option>

                                                                <?php }  ?>

                                                            </select>
                                                        </td>
                                                        <th>Phone Number</th>
                                                        <td><input class="form-control white_bg"
                                                                placeholder="Driver Number" name="number" id="number"
                                                                value="<?php echo $row1['number'];?>" type="text"
                                                                readonly="readonly"></td>
                                                    </tr>


                                                    <?php if($row['Status']==0){ ?>
                                                    <tr>
                                                        <td style="text-align:center" colspan="4">
                                                            <button class="btn btn-primary" name="owner_update_submit"
                                                                type="submit">Update</button>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                    <?php $cnt=$cnt+1; }} ?>
                                                </form>
                                        </tbody>
                                    </table>


                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script>
        function add() {
            var x = parseInt(document.getElementById("totalnodays").value);
            var y = parseInt(document.getElementById("priceperday").value)
            document.getElementById("total").value = x * y;
        }
        </script>
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
        <script language="javascript" type="text/javascript">
        function f3() {
            window.print();
        }
        </script>
        <script>
        $(document).ready(function() {
            $('select[name="name"]').change(function() {
                var number = $('option:selected', this).attr('number');
                $("#number").val(number);
            });
        });
        </script>
</body>

</html>