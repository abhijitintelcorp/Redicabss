<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

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

    <title>Car Rental Portal | New Bookings </title>


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
<!--body -->

<body>
    <?php include('includes/header.php');?>

    <div class="ts-main-content">
        <?php include('includes/leftbar.php');?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">New Bookings</h2>

                        <!-- Zero Configuration Table -->
                        <div class="panel panel-default">
                            <div class="panel-heading">Bookings Info

                                <a href="add-booking.php"><span class="pull-right">Add Booking</span></a>
                            </div>
                            <div class="panel-body">

                                <table id="zctb" class="display table table-striped table-bordered table-hover"
                                    cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Booking No.</th>
                                            <th>Vehicle</th>
                                            <th>From Date</th>
                                            <th>To Date</th>
                                            <th>PickUp Time</th>
                                            <th>Status</th>
                                            <th>Posting Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Booking No.</th>
                                            <th>Vehicle</th>
                                            <th>From Date</th>
                                            <th>To Date</th>
                                            <th>PickUp Time</th>
                                            <th>Status</th>
                                            <th>Posting Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
$status=0;
$query = "SELECT tblusers.FullName,tblbrands.BrandName,tblvehicles.VehiclesTitle,tblbooking.FromDate,
tblbooking.ToDate,tblbooking.message,tblbooking.VehicleId as vid,tblbooking.Status,tblbooking.PostingDate,
tblbooking.id,tblbooking.BookingNumber,tblbooking.Time  from tblbooking join tblvehicles on tblvehicles.id=tblbooking.VehicleId 
join tblusers on tblusers.id=tblbooking.user_id join tblbrands on tblvehicles.VehiclesBrand=tblbrands.id
 where tblbooking.Status='$status'";
$query_run = mysqli_query($conn, $query);
$cnt=1;
if(mysqli_num_rows($query_run) > 0)   
{
	while($row = mysqli_fetch_array($query_run))

    {

					?>
                                        <tr>
                                            <td><?php echo htmlentities($cnt);?></td>
                                            <td><?php  echo $row['FullName'];  ?></td>
                                            <td><?php echo $row['BookingNumber'];?></td>
                                            <td><a href="edit-vehicle.php?id=<?php echo htmlentities($row['vid']);?>"><?php echo htmlentities($row['BrandName']);?>
                                                    , <?php echo htmlentities($row['VehiclesTitle']); ?></td>
                                            <td><?php echo htmlentities($row['FromDate']); ?></td>
                                            <td><?php echo htmlentities($row['ToDate']); ?></td>
                                            <td><?php echo htmlentities($row['Time']); ?></td>
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
                                            <td><?php echo $row['PostingDate'];?></td>
                                            <td>


                                                <a href="bookig-details.php?bid=<?php echo $row['id'];?>"> View</a>/
                                                <a href="booking-modify-details.php?bid=<?php echo $row['id'];?>">
                                                    Edit</a>
                                            </td>

                                        </tr>
                                        <?php $cnt=$cnt+1; }} ?>

                                    </tbody>
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
<?php } ?>