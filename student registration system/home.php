<?php
session_start();
if(!isset($_SESSION['email']))
{
header('location:login.php');



}?>
<html>
welcome <?php echo $_SESSION['email'];?>


<a href="logout process.php" >logout</a>
</html>
