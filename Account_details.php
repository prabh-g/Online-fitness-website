<?php
session_start();

?>
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
<!--?php
         include_once("connection.php");
         $uid=$_GET["uid"];
         $res=mysqli_query($con,"select * from new_account where Reg_id='$uid' ");
         while($val=mysqli_fetch_assoc($res))
         {
        ?--> 

<?php
include_once('header_loggedIn.php')
?>

<section class="contact" id="contact">
    <br><br><br><br><br><br>
    <h1 class="heading"> <span>Account</span> Details </h1>
    <form method="post" action="update_details_chk.php" enctype="multipart/form-data">
       <div class="inputBox">
            <input type="text" placeholder="First Name"  name="fname" required>
        </div>
        <div class="inputBox">
            <input type="text" placeholder="last name"  name="lname" required>
        </div>
        <div class="inputBox">
            <input type="text" placeholder="Username"  name="uname" readonly>
        </div>
        <div class="inputBox">
            <input type="text" placeholder="Age"  name="age" required>
        </div>
        <div class="inputBox">
            <input type="text" placeholder="Email"  name="email" required>
        </div>
        <div class="inputBox">
            <input type="text" placeholder="Contact"  name="contact" readonly>
        </div>
        <div class="inputBox">
            <input type="text" placeholder="Password"  name="password" required>
        </div>
        <div class="inputBox">
            <input type="text" placeholder="Confirm Password"  name="conpassword" required>
        </div>
       
        
        
        <input type="submit" value="Update" class="btn"><br>
        
        </form>
</section>

</body>
</html>
         }
 ?>