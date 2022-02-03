
<?php
session_start();
include("config.php");
?>
<header>
  <div class="default-header" style="padding:0px">
    <div class="container">
      <div class="row">
        <div class="col-sm-2 col-md-2">
          <div class="logo"> <a href="index.php"><img src="./assets/images/redicabs_logo.png" height="180" width="250" alt="image"/></a> </div>
        </div>
        <div class="col-sm-10 col-md-10" >
          <div class="header_info" style="padding: 50px;">
         <?php
         $sql = "SELECT id,EmailId,ContactNo FROM tblcontactusinfo WHERE id=1";
$query =mysqli_query($conn, $sql);
$results=mysqli_fetch_assoc($query);
$email=$results['EmailId'];
$contactno=$results['ContactNo'];

?>   

            <div class="header_widgets" >
              <div class="circle_icon"> <i class="fa fa-envelope" style="color: white" aria-hidden="true"></i> </div>
              <p class="uppercase_text">For Support Mail us : </p>
              <a href="mailto:<?php echo htmlentities($email);?>"><?php echo htmlentities($email);?></a> </div>
            <div class="header_widgets" >
              <div class="circle_icon"> <i class="fa fa-phone" style="color: white"aria-hidden="true"></i> </div>
              <p class="uppercase_text">Service Helpline Call Us: </p>
              <a href="tel:<?php echo htmlentities($contactno);?>"><?php echo htmlentities($contactno);?></a> </div>
            <div class="social-follow">
            
            </div>
   <?php   if(strlen($_SESSION['login'])==0)
  { 
?>

  
 <div class="login_btn " > <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> &nbsp; &nbsp;<a href="Book_car.php" class="btn btn-xs uppercase" >Book a car</a></div>
 <!--  <div class="login_btn " > <a href="car-listing.php" class="btn btn-xs uppercase" >Book a car</a> </div> -->
<?php }
else{ 

echo "<h5 style='color:#1886bb'>Welcome To Car rental portal<h5>";
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded=" false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId='$email'";
$query1=mysqli_query($conn,$sql1);
$results=mysqli_fetch_assoc($query1);
$count=mysqli_num_rows($query1);
if($count > 0)
{
foreach($results as $result)
  {

   echo htmlentities($result->FullName); }}?>
   <i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-booking.php">My Booking</a></li>
            <li><a href="post-testimonial.php">Post a Testimonial</a></li>
          <li><a href="my-testimonials.php">My Testimonial</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="search.php" method="post" id="header-search-form">
            <input type="text" placeholder="Search..." name="searchdata" class="form-control" required="true">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a>    </li>
             
         <!--  <li><a href="page.php?type=aboutus">About Us</a></li> -->
         <li><a href="AboutUs.php">About Us</a></li>
          <li><a href="Book_car.php">Book a car</a>
          <li><a href="page.php?type=faqs">FAQs</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>