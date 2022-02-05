

$(document).ready(function() {
//login form validation
$("#login_form").validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
       password: {
        required: true,
      },          
    },
    messages : {
       email: {
        required: "<b style='color:red;'>Please Enter Register Email Id</b>",
        email: "<b style='color:red;'>The email should be in the format: abc@domain.tld</b>"
      },
      email: {
        required: "<b style='color:red;'>Please Enter Password</b>",
     
      },
    }   
  });

//registation form validation
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

