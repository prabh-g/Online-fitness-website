<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prabh Fitness</title>
    <link rel="icon" href="images/mainprofile.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="fit_style.css">

</head>
<body>
    

<?php
include_once('header.php')
?>

<section class="contact" id="contact">
    <br><br><br><br><br><br>
    <h1 class="heading"> <span>Log</span> In </h1><br>
    <form method="post" action="login_chk.php" enctype="multipart/form-data">
        <div class="inputBox">
            <input type="text" placeholder="Username"  name="uname">
        </div>

        <div class="inputBox">
            <input type="text" placeholder="Password"  name="password">
           
        </div>
        <input type="submit" value="Log In" class="btn"><br><br>

        <h2>Did'nt have Account</h2><a href="Signup.php">Click here</a>
        </form>
</section>
</body>
</html>