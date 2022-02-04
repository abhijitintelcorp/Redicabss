// add_owner validation

$(document).ready(function() {
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
        required: "<b style='color:red;'>Please Enter Email Id</b>",
        email: "<b style='color:red;'>The email should be in the format: abc@domain.tld</b>"
      },
      email: {
        required: "<b style='color:red;'>Please Enter Password</b>",
     
      },
    }

  });

});

