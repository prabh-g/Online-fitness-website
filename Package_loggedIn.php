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
    <h1 class="heading"><span>Membership</span> </h1>

    <div class="box-container">

        

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/free.png" alt="Couple"name="couple">
            </div>
            <div class="content">
                <div class="price">FREE</div>
                
                <p><input type="checkbox" name="c1" checked>Professionally-Built Workout Videos</p>
                <p><input type="checkbox" name="c2" checked>Healthy and Convenient Diet plans</p>
                <p><input type="checkbox" name="c3" checked>Save Your Favorite Videos</p>
                
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/premium-stamp-png.png" alt="Couple"name="couple">
            </div>
            <div class="content">
                <div class="price">PREMIUM (500 Per Month)</div>
                
                <p><input type="checkbox" name="c4" checked>Professionally-Built Workout Videos</p>
                <p><input type="checkbox" name="c5" checked>Healthy and Convenient Diet plans</p>
                <p><input type="checkbox" name="c6" checked>Save Your Favorite Videos</p>
                <p><input type="checkbox" name="c7" checked>Ads-Free Website and Videos</p>
                <p><input type="checkbox" name="c5" checked>Exclusive Workouts</p>
                <p><input type="checkbox" name="c6" checked>Statistics for Your Activities</p>
                
                <a href="purchase.php" class="btn">Purchase</a>  
            </div>
        </div>
    </div>
</section>
}
          ?>
</body></html>