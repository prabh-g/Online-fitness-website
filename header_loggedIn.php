
<style>
    .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: black;
            text-decoration: none;
            padding: 8px 16px;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .icon {
            cursor: pointer;
        }
        </style>
<header class="header">
    <h1 class="heading"><i class="fa-solid fa-dumbbell"></i><span>  Get Fit</span></h1>
    <nav class="fill">
        <ul>
          <li style="font-size:medium;"><a href="index_loggedIn.php">Home</a></li>
          <li style="font-size:medium;"><a href="package_loggedIn.php">Packages</a></li>
          <li style="font-size:medium;"><a href="facilities_loggedIn.php">Facilities</a></li>
          <li style="font-size:medium;"><a href="About_us_loggedIn.php">About</a></li>
          <li style="font-size:medium;"><a href="Contact_loggedIn.php">Contact</a></li>
          <div class="login-container">
   
        <div class="dropdown">
        <i class="fa fa-user-circle" aria-hidden="true"></i>
            <div class="dropdown-content">
                <?php
               
                $menuItems = array(
                    "Account" => "Account_details.php",
                    "Logout" => "Logout.php",
                    
                );

               
                foreach ($menuItems as $item => $url) {
                    echo "<a href='$url'>$item</a>";
                }
                ?>
            </div>
        </div>
          
      
          <ul>
            <?php
            if (isset($_SESSION["uname"]))
             {
                echo '<span style="font-size: 18px; color:#F79F1F">' . $_SESSION["uname"] . '</span><br>';
                
             }
            ?>
        
        </ul>
      </div>
        
      </nav>   
</header><br><br><br>