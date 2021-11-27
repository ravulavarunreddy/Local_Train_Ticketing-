<?php
include("databaseconnection.php");
$name=$_POST['name'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$message=$_POST['message'];

//inserting data into table
$query=mysqli_query($db_connect,"INSERT INTO contactus(name,email,phoneno,message)VALUES('$name','$email','$phoneno','$message')") or die(mysqli_error($db_connect));
mysqli_close($db_connect);
echo '<script type="text/javascript">'; 
echo 'alert("message submitted sucessfully!");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
?>
