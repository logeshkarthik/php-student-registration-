<?php
session_start();

include 'config/database/dbconnection.php';
$email=$_POST['email'];
$password=$_POST['password1'];
$s ="select * from students where email ='$email'";
$result =mysqli_query($con,$s);
while($row = mysqli_fetch_array($result))//, MYSQL_ASSOC
{
  $emaildb = $row['email'];
  $passworddb = $row['password'];
 
}

if ($emaildb==$email && $passworddb==$password){
    $_SESSION['email']=$email;
    
    header('location: home.php');
}elseif ($emaildb==$email && $passworddb!=$password){
    $error="username password combination is incorrect3333";
    $_SESSION['error']=$error;
    header('location:login.php');
   
  //  echo "your username password combination is incorrect";
     //header('location:login.php');
     
 }elseif ($emaildb!=$email && $passworddb!=$password){
   
     $error="email id does not exist";
    $_SESSION['error']=$error;
    header('location:login.php');
  }
  else{
    $error="please refresh and try again";
    $_SESSION['error']=$error;
    header('location:login.php');
    
}

?>