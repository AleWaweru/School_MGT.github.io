<?php
require_once("contdb.php");
?>
<!DOCTYPE html>

<head>
    <title>FAITH CLOTHLINE</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style3.css">
</head>

<body>

    <div class="main">
        <nav>
            <label class="logo">Smart School</label>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="application.php">Admission</a></li>

            </ul>
        </nav>
        <!--<img src="clothing.webp" alt="">-->

        <form action="" method="post" name="contact-form">
            <div class="imgcontainer">
                <img src="contact us 1.webp" alt="contact" class="contactUS">
            </div>
            <br><br><br><br><br>

            <h2 class="contact_us">Contact us</h2>
            <br>
            <p class="text">key in your login details to view our products</p>

            <div class="container">
                <label for="uname"><b>First Name</b></label>
                <input type="text" placeholder="Enter First Name" name="fname" required>

                <label for="psw"><b>Last Name</b></label>
                <input type="text" placeholder="Enter Last Name" name="lname" required>
                <br>
                <label for="psw"><b>Email Address</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
                <br>
                <label for="psw"><b>Phone Number</b></label>
                <input type="text" placeholder="Enter Phone" name="mobile" required>
                <br>
                <label><b>Message</b></label>
                <textarea cols="30" rows="10" name="message"></textarea>
                <br>
                <button name="submit" type="submit">Submit</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>

        <?php
        if (isset($_POST["submit"])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $message = $_POST['message'];

            $qry = "INSERT INTO contactSch(first_name, last_name, email, mobile, message) 
            VALUES('$fname', '$lname','$email','$mobile','$message')";

            $insert = $conn->query($qry);
            if ($insert == TRUE) {
                echo "Successfully!!";
            } else {
                echo "error occured!!!";
            }
        }
        ?>

    </div>
</body>


</html>