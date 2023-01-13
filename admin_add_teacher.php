<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['username'])) {
    header("location:login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "school_project";

$data = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['add_teacher'])) {

    $t_name = $_POST['name'];

    $t_description = $_POST['description'];

    $file = $_FILES['image']['name'];

    $dst = "./image/" . $file;

    $dst_db = "image/" . $file;

    move_uploaded_file(
        $_FILES['image']['tmp_name'],
        $dst
    );

    $sql = "INSERT INTO teacher (name,description,image)
    VALUES('$t_name','$t_description', '$dst_db')";

    $result = mysqli_query($data, $sql);
}

if ($result) {
    header('location:admin_add_teacher.php');
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

            <h1>Add Teacher</h1>
            <br><br>
            <div class="div_deg">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div>
                        <label>Teacher Name</label>
                        <input type="text" name="name">
                    </div>
                    <br>
                    <div>
                        <label>Description</label>
                        <textarea name="description"></textarea>
                    </div>
                    <br>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image">
                    </div>
                    <br>
                    <div>
                        <input type="submit" class="btn btn-primary" name="add_teacher" value="Add Teacher">
                    </div>

                </form>
            </div>
        </center>
    </div>

</body>

</html>