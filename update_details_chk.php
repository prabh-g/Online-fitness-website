<?php
session_start();

if (isset($_SESSION["uname"])) {
    $loggedInUser = $_SESSION["uname"];
    
    // Retrieve form data
     
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$age=$_POST['age'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$password=$_POST['password'];
// Note: Password should be hashed before storing it in the database for security reasons
    
    // Establish database connection
    $servername = "localhost"; // Change this to your database server name
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $database = "online_fitness"; // Change this to your database name

    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update user details in the database for the logged-in user
    $sql = "UPDATE new_account SET Firstname='$fname', Lastname='$lname',Age='$age',Email='$email', Password='$password' WHERE username='$loggedInUser'";

    if ($conn->query($sql) === TRUE) {
        echo"<script>alert('Record Updated');</script>";
        header("Location:index_loggedIn.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the connection
    $conn->close();
} else {
    echo "User not logged in";
}
?>
