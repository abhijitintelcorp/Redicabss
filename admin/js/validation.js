$(document).ready(function() {
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
});