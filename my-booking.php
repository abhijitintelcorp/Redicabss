<?php
session_start();
include("includes/config.php");
error_reporting(0);
$user_id = $_GET['user_id'];
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
?><!DOCTYPE HTML>
<html lang="en">
<head>

<title>RediCabs - My Booking</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<style>
  .btn-danger {
    background-color:red;
  }
  </style>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]--> 
<?php

// if $eid= $_GET['eid']; 
if(isset($_REQUEST['eid']))
  {
$eid=intval($_GET['eid']);
$status="2";
$sql = "UPDATE tblbooking SET Status='$status' WHERE  id='$eid'";
$query = mysqli_query($conn,$sql);

$msg="Booking Successfully Cancelled";
}

?>
</head>
<body>


<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!--Page Header-->
<!-- /Header --> 

<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>My Booking</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>My Booking</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<?php 
$useremail=$_SESSION['login'];
$sql = "SELECT * from tblusers where EmailId='$useremail'";
$query = mysqli_query($conn,$sql);
$results=mysqli_fetch_assoc($query);
$cnt=mysqli_num_rows($query);
if($cnt > 0)
{
 ?>
<section class="user_profile inner_pages">
  <div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40">
      <div class="upload_user_logo"> <img src="assets/images/dealer-logo.jpg" alt="image">
      </div>

      <div class="dealer_info">
        <h5><?php echo htmlentities($results['FullName']);?></h5>
        <p><?php echo htmlentities($results['Address']);?><br>
          <?php echo htmlentities($results['City']);?>&nbsp;<?php echo htmlentities($results['Country']); }?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-3">
       <?php include('includes/sidebar.php');?>
   
      <div class="col-md-8 col-sm-9">
        <div class="profile_wrap">
          <h5 class="uppercase underline">My Bookings</h5>
          <div class="my_vehicles_list">
            <ul class="vehicle_listing">
<?php 
$useremail=$_SESSION['login'];
$sql= "SELECT tblvehicles.id,tblvehicles.Vimage1,tblvehicles.VehiclesTitle,tblvehicles.PricePerDay,tblbrands.id,tblbrands.BrandName,tblusers.id,tblusers.FullName,tblbooking.id,tblbooking.user_id,tblbooking.BookingNumber,tblbooking.VehicleId,tblbooking.FromDate,tblbooking.ToDate,tblbooking.message,tblbooking.Status  FROM tblbooking JOIN tblvehicles ON tblbooking.VehicleId=tblvehicles.id JOIN tblbrands ON tblbooking.BrandId=tblbrands.id JOIN tblusers ON tblbooking.user_id=tblusers.id WHERE tblbooking.user_id=$user_id AND tblbooking.status=0 ORDER BY tblbooking.id DESC";
$query = mysqli_query($conn,$sql);
$resultss=mysqli_fetch_assoc($query);
$cnt=mysqli_num_rows($query);
if($cnt > 0)
{
 ?>

<li>
    <h4 style="color:red">Booking No #<?php echo $resultss['BookingNumber'];?></h4>
                <div class="vehicle_img"> <a href="vehical-details.php?vhid=<?php echo $resultss['id'];?>"><img src="admin/img/vehicleimages/<?php echo $resultss['Vimage1'];?>" alt="image"></a> </div>
                <div class="vehicle_title">

                  <h6><a href="vehical-details.php?vhid=<?php echo $resultss['id'];?>"> <?php echo $resultss['BrandName'];?> , <?php echo $resultss['VehiclesTitle'];?></a></h6>
                  <p><b>From </b> <?php echo $resultss['FromDate'];?> <b>To </b> <?php echo $resultss['ToDate'];?></p>
                  <div style="float: left"><p><b>Message:</b> <?php echo $resultss['message'];?> </p></div>
                </div>
                <?php if($resultss['Status']==1)
                { ?>
                <div class="vehicle_status"> <a href="#" class="btn outline btn-xs active-btn">Confirmed</a>
                <div class="clearfix"></div>
 

        </div>

        <div class="vehicle_status"> <a href="booking_details.php?id=<?php echo $resultss['id'];?>" class="btn outline btn-xs active-btn" style="margin-top: 50px;">View Details</a></div>

<!-- <div class="vehicle_status"> <a href="#" class="btn outline btn-xs active-btn">Cancel it</a></div>
<div class="clearfix"></div> -->

              <?php } else if($resultss['Status']==2) { ?>
 <div class="vehicle_status"> <a href="#" class="btn outline btn-xs">Cancelled</a>
            <div class="clearfix"></div>
        </div>
             
                <?php } else { ?>
 <div class="vehicle_status"> <a href="#" class="btn outline btn-xs">Not Confirm yet</a><br> 
            <div class="clearfix"></div>
</div><br><br>
<div class="vehicle_status"> <a href="cancelled_booking.php?id=<?php echo $resultss['id'];?>?user_id=<?php echo $resultss['user_id'];?>"><button type="button" class="btn btn-danger">Cancel</button></a></div>
 <div class="vehicle_status"> <a href="booking_details.php?id=<?php echo $resultss['id'];?>" class="btn outline btn-xs active-btn" style="margin-top: 50px;">View Details</a></div>


            
             <!-- <div class="vehicle_status"> <a href="my-booking.php?eid=<?php echo $resultss['id'];?>" class="btn outline btn-xs">cancell it</a>
        </div> -->
                <?php } ?>
       
              </li>
<!-- 
<h5 style="color:blue">Invoice</h5>
<table>
  <tr>
    <th>Car Name</th>
    <th>From Date</th>
    <th>To Date</th>
    <th>Total Days</th>
    <th>Rent / Day</th>
  </tr>
  <tr>
    <td><?php echo $resultss['VehiclesTitle'];?>, <?php echo $resultss['BrandName'];?></td>
     <td><?php echo $resultss['FromDate'];?></td>
      <td> <?php echo $resultss['ToDate'];?></td>
       <td><?php echo $tds=$resultss['totaldays'];?></td>
        <td> <?php echo $ppd=$resultss['PricePerDay'];?></td>
  </tr>
  <tr>
    <th colspan="4" style="text-align:center;"> Grand Total</th>
    <th><?php echo $tds*$ppd;?></th>
  </tr>
</table>
<hr /> -->
          <?php }   else { ?>
                <h5 align="center" style="color:red">No booking yet</h5>
              <?php } ?>
             
         
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/my-vehicles--> 
<?php include('includes/footer.php');?>

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>
</body>
</html>