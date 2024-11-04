<?php
include_once("connection.php");


$uname=$_REQUEST['uname'];
$password=$_REQUEST['password'];

if(($uname=="Prabhjot")&&($password=="1234"))
{
    session_start();
    $_SESSION['uname']=$uname;
    
    
    header("Location:index_loggedIn.php");

}
else
{
    echo"<script>alert('Username or Password is Incorrect')</script>";
    header("Location:login.php");
}
?>

