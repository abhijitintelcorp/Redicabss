<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 

if(isset($_POST['submit']))
  {
	$fname=$_POST['fullname'];
	$email=$_POST['emailid']; 
	$mobile=$_POST['mobileno'];
	$password=md5($_POST['password']); 
	$confirmpassword=md5($_POST['confirmpassword']);
	$dob=$_POST['dob'];
$adress=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate']; 
$message=$_POST['message'];
$status=0;
$vhid=$_GET['vhid'];
$bookingno=mt_rand(100000000, 999999999);
$query="SELECT * FROM tblbooking where ('$fromdate' BETWEEN date(FromDate) and date(ToDate) || 
'$todate' BETWEEN date(FromDate) and date(ToDate) || date(FromDate) BETWEEN '$fromdate' and '$todate') 
and VehicleId='$vhid'";
$query_run = mysqli_query($conn,$query);
if(mysqli_num_rows($query_run) > 0)
{
	$query1="INSERT INTO  tblusers(FullName,EmailId,ContactNo,Password,confirmpassword,dob,Address,City,Country) 
	VALUES('$fname','$email','$mobile','$password','$confirmpassword','$dob','$adress','$city','$country');
	INSERT INTO  tblbooking(BookingNumber,userEmail,VehicleId,FromDate,ToDate,message,Status) 
	VALUES('$bookingno','$email','$vhid','$fromdate','$todate','$message','$status')";
$query_run1 = mysqli_query($conn,$query1);
$lastInsertId = lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Booking successfull.');</script>";
echo "<script type='text/javascript'> document.location = 'my-booking.php'; </script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
 echo "<script type='text/javascript'> document.location = 'car-listing.php'; </script>";
} }  else{
 echo "<script>alert('Car already booked for these days');</script>"; 
 echo "<script type='text/javascript'> document.location = 'car-listing.php'; </script>";
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

    <title>Car Rental Portal | Admin Post Vehicle</title>

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
    <script>
    function checkAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url: "check_availability.php",
            data: 'emailid=' + $("#emailid").val(),
            type: "POST",
            success: function(data) {
                $("#user-availability-status").html(data);
                $("#loaderIcon").hide();
            },
            error: function() {}
        });
    }
    </script>
    <?php include('includes/header.php');?>
    <div class="ts-main-content">
        <?php include('includes/leftbar.php');?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Book A Car</h2>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Basic Info</div>
                                    <?php if($error){?><div class="errorWrap">
                                        <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
                                    </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

                                    <div class="panel-body">
                                        <form name="frm" action="" method="post" class="form-horizontal"
                                            enctype="multipart/form-data">




                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">Name<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" name="fullname"
                                                        placeholder="Full Name" required="required">
                                                </div>
                                                <label class="col-sm-1 control-label">Mobile No<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" name="mobileno"
                                                        placeholder="Mobile Number" maxlength="10" required="required">
                                                </div>
                                                <label class="col-sm-1 control-label">Email Id<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input type="email" class="form-control" name="emailid" id="emailid"
                                                        onBlur="checkAvailability()" placeholder="Email Address"
                                                        required="required">
                                                </div>
                                            </div>
                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">Password<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input type="password" class="form-control" name="password"
                                                        placeholder="Password" required="required">
                                                </div>
                                                <label class="col-sm-1 control-label">ConfirmPwd<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input type="password" class="form-control" name="confirmpassword"
                                                        placeholder="Confirm Password" required="required">
                                                </div>
                                                <label class="col-sm-1 control-label">Date of Birth<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" name="dob"
                                                        placeholder="dd/mm/yyyy" id="birth-date" type="text">
                                                </div>
                                            </div>
                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">Your Address<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <textarea class="form-control white_bg" name="address"
                                                        placeholder="address" rows="4"></textarea>
                                                </div>
                                                <label class="col-sm-1 control-label">Country<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" id="country"
                                                        placeholder="country" name="country" type="text">
                                                </div>
                                                <label class="col-sm-1 control-label">City<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" id="city" placeholder="city"
                                                        name="city" value="<?php echo htmlentities($result->City);?>"
                                                        type="text">
                                                </div>
                                            </div>





                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">Select Brand<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <select id="brandId" onChange="change_brand()" name="brand"
                                                        type="text" class="form-control">
                                                        <option>Select Brand</option>
                                                        <?php
                                                        $query = "SELECT id,BrandName From tblbrands";
                                                        $query_run=mysqli_query($conn,$query);
                                                        while($row=mysqli_fetch_array($query_run)){
                                                            ?>
                                                        <option value="<?php echo $row['id'];?>">
                                                            <?php echo $row['BrandName']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <label class=" col-sm-1 control-label">Select Vehicle<span
                                                        style="color:red">*</span></label>
                                                <div id="vehicle" class="col-sm-3">
                                                    <select type="text" class="form-control">
                                                        <option>Select Vehicle</option>
                                                    </select>
                                                </div>
                                            </div>






                                            <div class=" hr-dashed">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">Search Vehicle<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" placeholder="Give Car Id No"
                                                        name="id" type="text">
                                                </div>
                                                <button class="btn btn-primary" name="search"
                                                    type="submit">Search</button>
                                            </div>

                                            <?php
if(isset($_POST['search']))
  {
	$id=$_POST['id'];
	$QUERY2 = "SELECT * from tblvehicles where id='$id'";
	$query_run2 = mysqli_query($conn, $query2);
	if(mysqli_num_rows($query_run2) > 0)        
	 {
		 while($row = mysqli_fetch_array($query_run2))
		 {
	 ?>



                                            <div class="hr-dashed"></div>
                                            <div class="form-group">

                                                <label class="col-sm-1 control-label">VehicleType<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" " placeholder=" Fuel Type"
                                                        name="vehicletitle" value="<?php echo $row['VehiclesTitle'];?>"
                                                        type="text">
                                                </div>
                                                <label class="col-sm-1 control-label">Vehicle No<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" " placeholder=" Fuel Type"
                                                        name="vehno" value="<?php echo $row['vehno'];?>" type="text">
                                                </div>
                                                <label class="col-sm-1 control-label">Price Per Day<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" placeholder="Price per Day"
                                                        name="priceperday" type="text"
                                                        value="<?php echo $row['PricePerDay']?>" required>
                                                </div>
                                            </div>



                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">FuelType<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" placeholder=" Fuel Type"
                                                        name="city" value="<?php echo $row['FuelType'];?>" type="text">
                                                </div>
                                                <label class="col-sm-1 control-label">Model Year<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" placeholder="Model Year"
                                                        name="modelyear" value="<?php echo $row['ModelYear'];?>"
                                                        type="text">
                                                </div>
                                                <label class="col-sm-1 control-label">Seating Capacity<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" placeholder="Seating Capacity"
                                                        name="seatingcapacity"
                                                        value="<?php echo $row['SeatingCapacity'];?>" type="text">
                                                </div>
                                            </div>
                                            <?php $cnt=$cnt+1; }} }?>

                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">From Date:<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input type="date" class="form-control" id="datepicker"
                                                        name="fromdate" placeholder="From Date" required>
                                                </div>
                                                <label class="col-sm-1 control-label">To Date:<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input type="date" class="form-control" id="datepicker"
                                                        name="todate" placeholder="To Date" required>
                                                </div>
                                                <label class="col-sm-1 control-label">Message:<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <textarea rows="4" class="form-control" name="message"
                                                        placeholder="Message" required></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <button class="btn btn-default" type="reset">Cancel</button>
                                                    <button class="btn btn-primary" name="submit" type="submit">Save
                                                        changes</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
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
    <script type="text/javascript">
    function change_brand() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "show.php?brand=" + document.getElementById("brandId").value, false);
        xmlhttp.send(null);
        document.getElementById("vehicle").innerHTML = xmlhttp.responseText;
    }
    </script>
</body>

</html>
<?php } ?>