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
?>

<section class="contact" id="contact">
<br><br><br><br><br><br><br><br>
    <h1 class="heading"> <span>contact</span> Us </h1>
    <form  method="post" action="contact_chk.php" enctype="multipart/form-data" name="f1">
        <div class="inputBox">
            <input type="text" placeholder="name"  name="name">
            <input type="email" placeholder="email"  name="email">
        </div>

        <div class="inputBox">
            <input type="text" placeholder="number"  name="number">
            <input type="text" placeholder="subject"  name="subject">
        </div>

        <textarea name="msg" placeholder="your message" id="" cols="30" rows="10" ></textarea>
        <input type="submit" value="send message" class="btn" onClick=contact()>
    </form>
</section>
<section class=review id="about_us">
    <h1 class="heading"><span>For More information:</span> </h1>
    
    
    <h2><center>Prabhjot Singh<br>
               Phone no-8196931152<br>
               Email-prabhjotpctebca21a@gmail.com</center></h2><br>

</section></body></html>
}
          ?>