<?php
include_once("connection.php");

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$number=$_REQUEST['number'];
$subject=$_REQUEST['subject'];
$msg=$_REQUEST['msg'];
$query=mysqli_query($con,"insert into contact(Name,EMail,Number,Subject,Message)
            values ('$name','$email','$number','$subject','$msg')");

if($query)
{

   echo"<script>alert('Will Contact You Shortly'); window.location='index_loggedIn.php';</script>";
}
else
{
    mysqli_error($con);
}