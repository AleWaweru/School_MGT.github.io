<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style type="text/css">
        label {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .div_deg {
            background-color: skyblue;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>

    <?php
    include 'admin_css.php';

    ?>



</head>

<body>
    <?php

    include 'admin_sidebar.php';
    ?>



    <div class="content">
        <center>

        <h1>Add Course</h1>

        <div class="div_deg">
                <form action="#" method="POST">
                    <div>
                        <label for="">Study Programme</label>
                        <input type="text" name="name">
                    </div>
                    
                    <div>
                        <label for="">Course Code</label>
                        <input type="number" name="phone">
                    </div>
                    <div>
                        <label for="">Course Title</label>
                        <input type="text" name="password">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" name="add_student" value="Add Course">
                    </div>


                </form>
            </div>

        </center>
    </div>

</body>

</html>