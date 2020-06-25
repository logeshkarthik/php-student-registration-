<?php
session_start();
?>

 


</form>
</body>
</html>

<html>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
<title>Student registration form</title>
</head>
<body>
<h1>Student Registration Form</h1>

<form action="register process.php" method="post">
<div >

<table >
<tr><td> Name   </td><td><input type="text" name="name" placeholder="  student name"required> </td></tr>
<tr><td>   </td><td class="errormessage"><!--error messsage--></td></tr>

<tr><td> Email  </td><td><input type="email" placeholder="  enter valid email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"required >  </td></tr>
<tr><td>   </td><td class="errormessage"><?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?></td></tr>
<tr><td> Phone   </td><td> <input type="tel"placeholder="  ten digit mobile" name="phone"pattern="[0-9]{4}[0-9]{3}[0-9]{3}"required > </td></tr>
<tr><td>   </td><td class="errormessage"><!--error messsage--></td></tr>

<tr><td> Password  </td><td><input type="password" placeholder="  enter 6 digit password" id="password1"name="password1" pattern=".{6,}" title="Six or more characters"required >  </td></tr>
<tr><td>   </td><td class="errormessage"><!--error messsage--></td></tr>
<tr><td> Confirm Password  </td><td><input type="password" placeholder="  retype password"id="password2"name="password2"required >  </td></tr>
<tr><td>   </td><td class="errormessage"><!--error messsage--></td></tr>

<tr><td><div class="submit"><a  href="login.php"><span class="abc">Login</span></a></div> </td><td style="padding-left:30px;"> <input class="submit"type="submit" name="submit" onclick="return Validate()" >  </td></tr>

</table>
</div>
</form>

<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password1").value;
        var confirmPassword = document.getElementById("password2").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>

</body>
</html>
<?php
    unset($_SESSION["error"]);
?>