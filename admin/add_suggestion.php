<!-- insert -->

<?php
error_reporting(0);
include('includes/config.php');
date_default_timezone_set('Asia/Kolkata');
if (isset($_POST['feedback_submit'])) {
    $suggestions = htmlspecialchars($_POST['suggestions']);
    $insert_qry = "INSERT INTO  add_feedback(`suggestions`)VALUES('$suggestions')";
    $fn_qry = mysqli_query($conn, $insert_qry);
    if ($fn_qry) {
        header("location:manage_feedback.php");
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

    <title>Redicabs | Feedback</title>

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
        .addbtn {
            background-color: #37a6c4;
            color: white;
            font-size: 18px;
            height: 40px;
            width: 100px;
        }
    </style>

</head>

<body>
    <?php include('includes/header.php'); ?>
    <div class="ts-main-content">
        <?php include('includes/leftbar.php'); ?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Add Suggestion </h2>

                        <form method="post" class="form-horizontal" name="sugform" id="sugform" enctype="multipart/form-data">


                            <div class="row">
                                <div class="col-md-10">
                                    <div class="panel panel-default">
                                        <div class="row">


                                            <div class="col-md-4">
                                                <h3>Booking Number:#</h3>
                                            </div>

                                            <div class="col-md-4">
                                                <h3>User Name:</h3>
                                            </div>

                                            <div class="col-md-4">
                                                <h3>Driver Name:</h3>
                                            </div>
                                        </div>

                                        <div class="panel-heading">
                                            <center>
                                                <h2><b>GIVE YOUR SUGGESTIONS</b></h2>

                                            </center>
                                        </div>
                                        <div class="panel-body">

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Your Suggestions :</label>
                                                <div class="col-sm-8">
                                                    <textarea type="text" class="form-control" name="suggestions" id="suggestions" rows="4" ></textarea>
                                                </div>
                                            </div>



                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-8 col-sm-offset-6">

                                                <button class="btn btn-primary" name="feedback_submit" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script src="js/validation.js"></script>






</body>

</html>