
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

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
    <!-- header section starts  -->
<?php
include_once('header_loggedIn.php')
?><br><br><br><br><br>
<section class="packages" id="packages">
<br><br>
    <h1 class="heading"><span>Facilities</span> </h1>

    <div class="box-container">
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/dietplan.png" alt="diet" name="diet">
            </div>
            <div class="content">
                <div class="price">Diet Plan</div>
                <p><a href="images/fat_loss_veg.jpeg">Fat loss (Veg)</a></p>
                <p><a href="images/fat_loss_non.jpeg">Fat loss (Non-Veg)   &emsp;</a></p>
                <p><a href="images/muscle_gain_veg.jpeg">Muscle Gain(Veg)  &emsp;</a></p>
                <p><a href="images/muscle_gain_non.jpeg">Muscle Gain(Non-Veg)  &emsp;</a></p>
                <p><a href="images/weight_gain_veg.jpeg">Weight Gain(Veg)  &emsp;</a></p>
                <p><a href="images/weight_gain_non.jpeg">Weight Gain(Non-Veg)  &emsp;</a></p>
                <!---a href="$" class="btn">Subscribe</a-->
            </div>
        </div>
        

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/excercise.png" alt="exc"name="exc">
            </div>
            <div class="content">
                <div class="price">Exercise</div>
                <p><a href="videos/chest.mp4">Chest  &emsp;</a></p>
                <p><a href="videos/Back.mp4">Lats or Back</p>
                <p><a href="videos/shoulder.mp4">Shoulder</p>
                <p><a href="videos/Bicep.mp4">Bicep </p>
                <p><a href="videos/tricep.mp4">Tricep</p>
                <p><a href="videos/legs.mp4">Legs</p>
                <p><a href="videos/Abs.mp4">Abs</p>
                <!---a href="$" class="btn">Subscribe</a--->
            </div>
        </div>
    </div>
</section>
</body></html>
}
          ?>
