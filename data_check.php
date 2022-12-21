<?php
session_start();
$host = "localhost";

$user = "root";

$password = "";

$db = "school_project";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("connection error");
}

if (isset($_POST['apply'])) {
    $data_fname = $_POST['fname'];
    $data_lname = $_POST['lname'];
    $data_email = $_POST['email'];
    $data_phone = $_POST['phone'];
    $data_message = $_POST['message'];

    $sql = "INSERT INTO admission(fname,lname,email,phone,message) 
    VALUES('$data_fname','$data_lname', '$data_email', '$data_phone', '$data_message')";
}

$result = mysqli_query($data, $sql);

if ($result) {
    $_SESSION['message'] = "your application sent successful";
    header("location:index.php");
} else {
    echo "Apply Failed";
}
