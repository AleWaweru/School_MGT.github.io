<?php
session_start();

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

$sql = "SELECT * from course";

$result = mysqli_query($data, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>


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

            <h1>Courses Selected</h1>

            <br><br>

            <table border="1px">
                <tr style=>
                    <th style=" padding: 20px; font-size: 15px;">Student Username</th>
                    <th style=" padding: 20px; font-size: 15px;">Admission No.</th>
                    <th style="padding: 20px; font-size: 15px;">Course Selected</th>
                </tr>

                <?php

                while ($info = $result->fetch_assoc()) {

                ?>

                    <tr>
                        <td style="padding: 20px;">
                            <?php echo "{$info['student_name']}"; ?> </td>
                        <td style="padding: 20px;">
                            <?php echo "{$info['admission']}"; ?> </td>
                        <td style="padding: 20px;">
                            <?php echo "{$info['study_programme']}"; ?> </td>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </table>

        </center>
    </div>

</body>

</html>