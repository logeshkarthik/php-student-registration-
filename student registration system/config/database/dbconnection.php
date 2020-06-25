<?php
$host='localhost';
$user='root';
$password='';
$database_name='student registration database';
$con =mysqli_connect($host,$user,$password);
mysqli_select_db($con,$database_name);

if (mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
}
?>