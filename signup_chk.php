<?php
include_once("connection.php");

$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$uname=$_REQUEST['uname'];
$age=$_REQUEST['age'];
$email=$_REQUEST['email'];
$contact=$_REQUEST['contact'];
$password=$_REQUEST['password'];


$query=mysqli_query($con,"insert into new_account(Firstname,Lastname,Username,Age,Email,Contact,Password)
            values ('$fname','$lname','$uname','$age','$email','$contact','$password')");

            if($query)
{
    echo"<script>alert('Account created')</script>";
    header('location:login.php');
}
else
{
    mysqli_error($con);
}


?>




