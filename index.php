<?php 

        // I will comment on this file as a proof that there's changes.

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Create Event This is sample</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Event Name" name="eventname">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Description" name="description">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Date" name="createddate">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>

                        <div class="p-t-10">
                            <!-- <button class="btn btn--pill btn--green" type="submit">Submit</button> -->
                            <input type="submit" name="btncreate" class="btn btn--pill btn--green" placeholder="Create">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php 

            if (isset($_POST['btncreate'])) {

                $eventname = $_POST['eventname'];
                
                $path = "eventsfolder/" .$eventname; // Change this to your desired folder path

                    if (!file_exists($path)) {
                        mkdir($path, 0777, true); // 0777 gives full permissions, 'true' enables recursive creation
                        echo '<script type="text/javascript" language="javascript">alert("Success!!"); location.replace("index.php");</script>';
                    } else {
                        echo '<script type="text/javascript" language="javascript">alert("Failed!!"); location.replace("index.php");</script>';
                    }


                
            }



     ?>


    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

