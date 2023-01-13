<?php
session_start();

//after insert or update 
$_SESSION['status'] = "Success";
error_reporting(0);

if (!isset($_SESSION['username'])) {
    header("location:login.php");
} elseif ($_SESSION['usertype'] == 'admin') {
    header("location:login.php");

    
}

$host = "localhost";
$user = "root";
$password = "";
$db = "school_project";

$data = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['add_course'])) {

    $s_name = $_POST['name'];
    $admission = $_POST['admission'];
    $programme = $_POST['course'];

    

    $sql = "INSERT INTO s_course (student_name, admission, study_programme)
    VALUES('$s_name','$admission', '$programme' )";

    $result = mysqli_query($data, $sql);
}

if ($result) {
    header('location:student_course.php');
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
    include 'student_css.php';

    ?>





</head>

<body>

<p id="demo"></p>




    <?php

    include 'student_sidebar.php';
    ?>



    <div class="content">
        <center>

            <h1>Choose a Course</h1>
            <br><br>
            <div class="div_deg">
                <form action="#" method="POST" enctype="multipart/form-data">

                <div>
                    <label>Student Username</label>
                    <input type="text" name="name" id="name"><br>
                </div>
                <div>
                    <label>Admission No.</label>
                    <input type="text" name="admission"><br>
                </div>
                    <div>
                        <label>Select Course Name</label>
                        <select name="course" id="course">
                            <option value="chemistry">Bsc.Chemistry</option>
                            <option value="computer_science">Computer Science</option>
                            <option value="education">Bsc.Education</option>
                            <option value="art_and_craft">Art and Craft</option>
                        </select>
                    </div>
</div>
                   
                    <br>
                    <div>
                        <input type="submit" class="btn btn-primary" name="add_course" value="Register">
                    </div>

                </form>
            </div>
        </center>
    </div>

</body>

</html>