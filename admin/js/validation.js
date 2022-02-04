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
      adhar_front: {
        required: "<b style='color:red;'>Upload Adhar Front Image </b>"
      },
      adhar_back: {
        required: "<b style='color:red;'>Upload Adhar Back Image </b>"
      },

    }


  });

  //add_owner_update validation

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
       adhar_front: {
        required: "<b style='color:red;'>Upload Adhar Front Image </b>"
      },
      adhar_back: {
        required: "<b style='color:red;'>Upload Adhar Back Image </b>"
      },

    }


  });

// add_driver validation
   $("#chngpwd").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
            },
            number: {
                required: true,
                minlength: 10,
                maxlength: 10,
            },
            email: {
                required: true,
                email: "abc@gmail.com",
            },
            location: {
                required: true,
            },
        },
        messages: {
            name: {
                minlength: "Name should be at least 3 characters",
                required: "<b style='color:red;'>Please enter  Name</b>",
            },
            number: {
                minlength: "The number should be 10digits",
                required: "<b style='color:red;'>Please enter  number</b>",
            },
            email: {
                minlength: "The email should be in the format: abc@domain.tld",
                required: "<b style='color:red;'>Please enter  email</b>",
            },
            location: {
                required: "<b style='color:red;'>Please enter location</b>",
            },
            adhar: {
                required: "<b style='color:red;'>upload adhar image</b>",
            },
            pan: {
                required: "<b style='color:red;'>upload pan image</b>",
            },
            licence: {
                required: "<b style='color:red;'>upload licence image</b>",
            },
        },
    });

// add_owner update validation
    $("#chngpwd").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
            },
            number: {
                required: true,

                length: 10,
            },
            email: {
                required: true,
                email: true,
            },
            location: {
                required: true,
            },
        },
        messages: {
            name: {
                minlength: "Name should be at least 3 characters",
                required: "<b style='color:red;'>Please enter  Name</b>",
            },
            number: {
                minlength: "The number should be 10digits",
                required: "<b style='color:red;'>Please enter  number</b>",
            },
            email: {
                minlength: "The email should be in the format: abc@domain.tld",
                required: "<b style='color:red;'>Please enter  email</b>",
            },
            location: {
                required: "<b style='color:red;'>Please enter location</b>",
            },
            adhar: {
                required: "<b style='color:red;'>upload adhar image</b>",
            },
            pan: {
                required: "<b style='color:red;'>upload pan image</b>",
            },
            licence: {
                required: "<b style='color:red;'>upload licence image</b>",
            },
        },
    });



//Create Brand validation 
    $("#brand_form").validate({
    rules: {
      brand : {
        required: true,
        minlength: 3
      }             
    },
    messages : {
      brand: {
        required: "<b style='color:red;'>Please Enter Brand Name</b>",
        minlength: "<b style='color:red;'>Name should be at least 3 characters</b>",   
      },    
    }
  });
//Update Brand validation 
    $("#brand_form").validate({
    rules: {
      brand : {
        required: true,
        minlength: 3
      }             
    },
    messages : {
      brand: {
        required: "<b style='color:red;'>Please Enter Brand Name</b>",
        minlength: "<b style='color:red;'>Name should be at least 3 characters</b>",   
      },    
    }
  });

//Vehicle validation 
    $("#add_vehicle").validate({
    rules: {
      vehicalorcview : {
        required: true,
        minlength: 3
      },
      priceperday: {
        required: true,
        minlength: 3,
          },
      modelyear: {
        required: true,
        minlength: 4,
        maxlength: 4,
          },
      seatingcapacity: {
        required: true,

 
          },
    },
    messages : {
      vehicalorcview: {
        required: "<b style='color:red;'>Please Enter Overview</b>",
        minlength: "<b style='color:red;'>Overview should be at least 3 characters</b>",   
      },
      priceperday: {
      minlength: "The Price should be 3digits",
      required: "<b style='color:red;'>Please Enter Price</b>",
      }, 
      modelyear: {
      minlength: "The Model Year should be 4digits",
      maxlength: "The Model Year should be 4digits",
      required: "<b style='color:red;'>Please Enter  Model Year</b>",
      },  
      seatingcapacity: {
      required: "<b style='color:red;'>Please Enter  Seating Capacity</b>",
      },
      img1: {
        required: "<b style='color:red;'>Upload Vehicle Front Image </b>"
      },
       img2: {
        required: "<b style='color:red;'>Upload Vehicle Side Image </b>"
      },
      img3: {
        required: "<b style='color:red;'>Upload Vehicle Back Image </b>"
      },
      img4: {
        required: "<b style='color:red;'>Upload Vehicle RC Image </b>"
      },

    }
  });


//Edit Vehicle  validation
    $("#edit_vehicle").validate({
    rules: {
      ownname : {
        required: true,
        minlength: 3
      },
       ContactNo : {
        required: true,
        minlength: 10,
        maxlength: 10,
      
    },
      email: {
        required: true,
        email: true,
      }
      
    },
    messages : {
      ownname: {
        required: "<b style='color:red;'>Please Enter Owner Name</b>",
        minlength: "<b style='color:red;'>Name should be at least 3 characters</b>",   
      },
       ContactNo: {
        required: "<b style='color:red;'>Please Enter Mobile No</b>",
        minlength: "<b style='color:red;'>Mobile No should be 10 digit number</b>",
        maxlength: "<b style='color:red;'>Mobile No should be 10 digit number</b>",      
      },
       email: {
        required: "<b style='color:red;'>Please Enter Email Id</b>",
        email: "<b style='color:red;'>The email should be in the format: abc@domain.tld</b>"
      },
      vehno: {
        required: "<b style='color:red;'>Please Enter Vehicle No</b>"
      },
       vehicletitle: {
        required: "<b style='color:red;'>Please Enter Vehicle Title</b>"
      },
      VehRCno: {
        required: "<b style='color:red;'>Please Enter Vehicle Rc No.</b>"
      },
      vehchas: {
        required: "<b style='color:red;'>Please Enter Vehicle Chassis No.</b>"
      },
       vehicalorcview: {
        required: "<b style='color:red;'>Please Enter Overview</b>"
      },
            priceperday: {
      minlength: "The Price should be 3digits",
      required: "<b style='color:red;'>Please Enter Price</b>",
      }, 
      modelyear: {
      minlength: "The Model Year should be 4digits",
      maxlength: "The Model Year should be 4digits",
      required: "<b style='color:red;'>Please Enter  Model Year</b>",
      },  
      seatingcapacity: {
      required: "<b style='color:red;'>Please Enter  Seating Capacity</b>",
      },
   
    }

  });

//Edit Vehicle  change image1 validation
    $("#changingimg").validate({
    messages : {
      img1: {
        required: "<b style='color:red;'>Upload Vehicle Front Image </b>"
      },   
    }
  });
    //Edit Vehicle  change image2 validation
    $("#changingimg2").validate({
    messages : {
      img2: {
        required: "<b style='color:red;'>Upload Vehicle Side Image </b>"
      },   
    }
  });
    //Edit Vehicle  change image3 validation
    $("#changingimg3").validate({
    messages : {
      img3: {
        required: "<b style='color:red;'>Upload Vehicle Back Image </b>"
      },   
    }
  });
    //Edit Vehicle  change image4 validation
    $("#changingimg4").validate({
    messages : {
      img4: {
        required: "<b style='color:red;'>Upload Vehicle Rc Image</b>"
      },   
    }
  });

});

