<?php
//error_reporting(0);
if(isset($_POST['signup']))
{
$fname=$_POST['fullname'];
$email=$_POST['emailid']; 
$mobile=$_POST['mobileno'];
$password=md5($_POST['password']); 
$confirmpassword=md5($_POST['confirmpassword']); 
$sql="INSERT INTO  tblusers(FullName,EmailId,ContactNo,Password,confirmpassword) VALUES(:fname,:email,:mobile,:password:confirmpassword)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':confirmpassword',$confirmpassword,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Registration successfull. Now you can login');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
?>


<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

<div class="modal fade" id="signupform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Sign Up</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-12 col-sm-6">
              <form  method="post" name="signup" id="signup">
                <div class="form-group">
                  <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name" required>
                </div>
                      <div class="form-group">
                  <input type="number" class="form-control" name="mobileno" id="mobileno"  placeholder="Mobile Number" maxlength="10" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkAvailability()" placeholder="Email Address" required>
                   <span id="user-availability-status" style="font-size:12px;"></span> 
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required>
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required" checked="">
                  <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Sign Up" name="signup" id="submit" class="btn btn-block">
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Already got an account?<a href="#loginform" data-toggle="modal" data-dismiss="modal" style="color:black">Login Here</a></p>
      </div>
    </div>
  </div>
</div>

  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/additional-methods.min.js"></script>
  <script src="assets/js/validation.js"></script>
  <script>
    //registation form validation
    $(document).ready(function() {
$("#signup").validate({
    rules: {
      fullname : {
        required: true,
        minlength: 3
      },
       mobileno : {
        required: true,
        minlength: 10,
        maxlength: 10,
      
    },
      emailid: {
        required: true,
        emailid: true,
      },
      
        password : {
        required: true,
        minlength: 8,
         },
        confirmpassword : {
        required: true,
        minlength: 8,
         }
    },
    messages : {
      fullname: {
        required: "<b style='color:red;'>Please Enter Full Name</b>",
        minlength: "<b style='color:red;'>Name should be at least 3 characters</b>",   
      },
       mobileno: {
        required: "<b style='color:red;'>Please Enter Mobile No</b>",
        minlength: "<b style='color:red;'>Mobile No should be 10 digit number</b>",
        maxlength: "<b style='color:red;'>Mobile No should be 10 digit number</b>",      
      },
       emailid: {
        required: "<b style='color:red;'>Please Enter Email Id</b>",
        emailid: "<b style='color:red;'>The email should be in the format: abc@domain.tld</b>",
      },
      password: {
        required: "<b style='color:red;'>Please Enter Password</b>",
        minlength: "<b style='color:red;'>Password should be minimum 8 characters,letter,no</b>",     
      },
       confirmpassword: {
        required: "<b style='color:red;'>Please Enter Confirm Password</b>",
        minlength: "<b style='color:red;'>Confirmpassword should be similar with password</b>",     
      }, 
    }

  });


});
</script>