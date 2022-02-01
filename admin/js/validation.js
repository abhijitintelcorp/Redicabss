<script>
$(document).ready(function() {
  $("#add_owner").validate({
    rules: {
      owner_name : {
        required: true,
        minlength: 3
      },
    }
    messages : {
      owner_name: {
        minlength: "Name should be at least 3 characters"
      },


    }
  });
});

</script>
