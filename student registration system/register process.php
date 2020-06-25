<?php 
//include 'config/functions.php';
?><?php
include 'config/database/dbconnection.php';
session_start();

$name=trim($_POST['name']);
$email=trim($_POST['email']);
$phone=trim($_POST['phone']);
$password=trim($_POST['password1']);


$s ="select * from students where email ='$email'";
$result =mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if ($num==1){
    $error="email id already exists ";
    $_SESSION['error']=$error;
    header('location: registration.php');
}else{
    $reg="INSERT INTO `students` ( `name`, `email`, `phone`, `password`) VALUES('$name','$email','$phone','$password')";
    mysqli_query($con,$reg);
    $login_continue="Login to Continue";
    $_SESSION['login_continue']=$login_continue;
    header('location: login.php');
}
   
?>