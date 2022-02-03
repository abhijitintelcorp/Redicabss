// add_owner validation

$(document).ready(function() {
  $("#add_owner").validate({
    rules: {
      owner_name : {
        required: true,
        minlength: 3
      },
       owner_mobile : {
        required: true,
        minlength: 10,
        maxlength: 10,
      
    },
      owner_email: {
        required: true,
        owner_email: true,
      }


      
    },
    messages : {
      owner_name: {
        required: "<b style='color:red;'>Please Enter Owner Name</b>",
        minlength: "<b style='color:red;'>Name should be at least 3 characters</b>",   
      },
       owner_mobile: {
        required: "<b style='color:red;'>Please Enter Mobile No</b>",
        minlength: "<b style='color:red;'>Mobile No should be 10 digit number</b>",
        maxlength: "<b style='color:red;'>Mobile No should be 10 digit number</b>",      
      },
       owner_email: {
        required: "<b style='color:red;'>Please Enter Email Id</b>",
        owner_email: "<b style='color:red;'>The email should be in the format: abc@domain.tld</b>"
      },
      owner_vehicle_no: {
        required: "<b style='color:red;'>Please Enter Vehicle No</b>"
      },
       owner_vehicle_rc_no: {
        required: "<b style='color:red;'>Please Enter Vehicle Rc No</b>"
      },
      owner_vehicle_jcc_no: {
        required: "<b style='color:red;'>Please Enter Vehicle Jcc No</b>"
      },
      owner_vehicle_brand: {
        required: "<b style='color:red;'>Please Enter Vehicle Brand</b>"
      },
       owner_vehicle_name: {
        required: "<b style='color:red;'>Please Enter Vehicle Name</b>"
      },
      //  owner_vehicle_color: {
      //   required: "<b style='color:red;'>Please Enter Vehicle Color</b>"
      // },
        driver_id: {
        required: "<b style='color:red;'>Select Driver </b>"
      },
         front_image: {
        required: "<b style='color:red;'>Upload Front Image </b>"
      },
       back_image: {
        required: "<b style='color:red;'>Upload Back Image </b>"
      },
       side_image: {
        required: "<b style='color:red;'>Upload Side Image </b>"
      },

    }


  });

  //add_owner_update

  $("#add_owner_update").validate({
    rules: {
      owner_name : {
        required: true,
        minlength: 3
      },
       owner_mobile : {
        required: true,
        minlength: 10,
        maxlength: 10,
      
    },
      owner_email: {
        required: true,
        owner_email: true
      }


      
    },
    messages : {
      owner_name: {
        required: "<b style='color:red;'>Please Enter Owner Name</b>",
        minlength: "<b style='color:red;'>Name should be at least 3 characters</b>",   
      },
       owner_mobile: {
        required: "<b style='color:red;'>Please Enter Mobile No</b>",
        minlength: "<b style='color:red;'>Mobile No should be 10 digit number</b>", 
        maxlength: "<b style='color:red;'>Mobile No should be 10 digit number</b>",   
      },
       owner_email: {
        required: "<b style='color:red;'>Please Enter Emai Id</b>",
        owner_email: "<b style='color:red;'>The email should be in the format: abc@domain.tld</b>"
      },
      owner_vehicle_no: {
        required: "<b style='color:red;'>Please Enter Vehicle No</b>"
      },
       owner_vehicle_rc_no: {
        required: "<b style='color:red;'>Please Enter Vehicle Rc No</b>"
      },
      owner_vehicle_jcc_no: {
        required: "<b style='color:red;'>Please Enter Vehicle Jcc No</b>"
      },
      owner_vehicle_brand: {
        required: "<b style='color:red;'>Please Enter Vehicle Brand</b>"
      },
       owner_vehicle_name: {
        required: "<b style='color:red;'>Please Enter Vehicle Name</b>"
      },
      //  owner_vehicle_color: {
      //   required: "<b style='color:red;'>Please Enter Vehicle Color</b>"
      // },
        driver_id: {
        required: "<b style='color:red;'>Select Driver </b>"
      },
         front_image: {
        required: "<b style='color:red;'>Upload Front Image </b>"
      },
       back_image: {
        required: "<b style='color:red;'>Upload Back Image </b>"
      },
       side_image: {
        required: "<b style='color:red;'>Upload Side Image </b>"
      },

    }


  });
  // add -vehicle validation


  $("#add_vehicle").validate({
    rules: {
      vehicletitle : {
        required: true,
        minlength: 3
      },
       priceperday : {
        required: true,
        minlength: 10,
        maxlength: 10,
      
    },
     modelyear: {
        required: true,
        modelyear: true,
        maxlength: 10,      
      }
    },
    messages : {
      vehicletitle: {
        required: "<b style='color:red;'>Please Enter Vehicle Name</b>",
        minlength: "<b style='color:red;'>Name should be in characters</b>",   
      },
     priceperday : {
        required: "<b style='color:red;'>Please Enter Priceperday</b>",
        minlength: "<b style='color:red;'>price should be a number</b>",
        maxlength: "<b style='color:red;'>price should be more than 3 digit number</b>",      
      },
       modelyear: {
        required: "<b style='color:red;'>Please Enter model year</b>",
        maxlength: "<b style='color:red;'>price should be a 4 digit number</b>", 
      },
    }
  });

});


