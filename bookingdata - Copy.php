

<?php
include("db2.php");
$source=$_REQUEST['source'];
$destination=$_REQUEST['destination'];
$dates=$_REQUEST['dates'];
$adult=$_REQUEST['adult'];
$child=$_REQUEST['child'];

//inserting data into table

 $query = mysqli_query($db_connect,"INSERT INTO `bookingtickets` (`id`, `source`, `destination`, `dates`, `adult`, `child`) VALUES ('', '$source', '$destination', '$dates', '$adult', '$child')") or die(mysqli_error($db_connect));
mysqli_close($db_connect);
echo '<script type="text/javascript">'; 
echo 'alert("Booking sucessfully!");'; 
echo 'window.location.href = "dataretrive.php";';
echo '</script>';
?>
