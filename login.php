<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="style1.css" />
</head>
<body>
<table>
<tr>
<td><img src="logo.png" height="200px" width="200px"></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php

    header("Location: index.php");
         }else {
            echo '<script type="text/javascript">'; 
echo 'alert("password incorrect!");'; 
echo 'window.location.href = "login.php";';
echo '</script>';
		 }
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required /><br/>
<input type="password" name="password" placeholder="Password" required /><br/>
<input name="submit" type="submit" value="Login" />

</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
	<?php } ?>
	</td>
	</tr>
	</table>
</body>
</html>