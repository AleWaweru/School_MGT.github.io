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
            <li><a href="login.php" class="btn btn-primary btn-floating mx-1">Login</a></li>

        </ul>
    </nav>
    <div class="section1">
        <label class="img_txt">We Teach Students With Care</label>
        <img class="main_img" src="cole22.jpg" alt="">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome_img" src="school2.jpg" alt="">

            </div>
            <div class="col-md-8">
                <h1>Welcome to Smart School</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe esse at placeat magni voluptatem, dolor omnis quis minima facilis eligendi quia nemo nihil delectus architecto voluptas dolore ullam dignissimos, numquam minus provident repellat ab quasi culpa. Doloribus, ab, temporibus omnis reprehenderit sequi culpa beatae voluptatum ipsum alias modi iusto eveniet?
                </p>

            </div>

        </div>

    </div>
    <center>
        <h1>Our Teachers</h1>
    </center>
    <div class="container">
        <div class="row">

            <?php
            while ($info = $result->fetch_assoc()) {

            ?>
                <div class="col-md-4">
                    <img class="teacher" src="<?php echo "{$info['image']}" ?>" alt="">
                    <h3><?php echo "{$info['name']}" ?></h3>
                    <h5><?php echo "{$info['description']}" ?></h5>

                </div>
            <?Php

            }
            ?>
            <div class="col-md-4">
                <img class="teacher" src=" teacher2.jpg" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam numquam quibusdam dolorem quaerat ullam repellat optio esse sint, voluptas aut!

                </p>

            </div>
            <div class="col-md-4">
                <img class="teacher" src=" teacher3.jpg" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam numquam quibusdam dolorem quaerat ullam repellat optio esse sint, voluptas aut!

                </p>

            </div>



        </div>

    </div>





    <center>
        <h1>Our courses</h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="web.jpg" alt="">
                <h3>Wed Design</h3>


            </div>
            <div class="col-md-4">
                <img class="teacher" src="graphic.jpg" alt="">
                <h3>Graphic Design</h3>



            </div>
            <div class="col-md-4">
                <img class="teacher" src="marketing.png" alt="">
                <h3>Marketing</h3>



            </div>



        </div>

    </div>

    <!--<center>
        <h1 class="adm">Admission Form</h1>
        </center>
        <div align="center" class=" admission_form">
            <form action="data_check.php" method="POST">
                <div class="adm_int">
                    <label class="label_text">Name</label>
                    <input class="input_deg" type="text" name=" name">
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
                <footer>
                    <h3 class="footer_text">All @copyright reserved by Waweru2022</h3>
                </footer>

            </form>-->
    <?php

    // include 'application.php';
    ?>

    </div>

</body>

</html>