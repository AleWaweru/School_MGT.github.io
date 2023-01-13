<?php
error_reporting(0);
session_start();
session_destroy();

if ($_SESSION['message']) {
    $message = $_SESSION['message'];

    echo "<script type='text/javascript'>
   alert('$message'); 
    
    
    </script>";
}

$host = "localhost";
$user = "root";
$password = "";
$db = "school_project";

$data = mysqli_connect($host, $user, $password, $db);

$sql = "SELECT * FROM teacher";

$result = mysqli_query($data, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <label class="logo">Smart School</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="application.php">Admission</a></li>
            <!--<li><a href="login.php" class="btn btn-primary btn-floating mx-1">Login</a></li>-->

        </ul>
    </nav>








    </div>

    </div>













    </div>

    </div>
    <br><br><br><br><br><br><br><br>

    <center>
        <h1 class="adm">Admission Form</h1>
    </center>
    <div align="center" class=" admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text">First Name</label>
                <input class="input_deg" type="text" name=" fname">
            </div>
            <div class="adm_int">
                <label class="label_text">Last Name</label>
                <input class="input_deg" type="text" name=" lname">
            </div>
            <div div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_deg" type=" text" name="email">
            </div>
            <div div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>
            <div div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt" name="message"></textarea>
            </div>
            <div class="adm_int">
                <input class="btn btn-primary" id="submit" type="Submit" value="Apply" name="apply">
            </div>
            <br><br><br><br><br><br>
            <footer>
                <h3 class="footer_text">All @copyright reserved by Waweru2022</h3>
            </footer>

        </form>


    </div>

</body>

</html>