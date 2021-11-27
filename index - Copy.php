<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<div>
	<h1 align="center" style="color:orange;">Welcome to Railway Reservation System</h1></div>
<table>
<tr>
<div class="main-wrapper">
  <header>
  <b>  <nav class="nav">
      <ul>
		<li><a href="index.php">Home</a></li>
        <li><a href="trainlist.php">Train Details</a></li>
        <li><a href="bookticket.php">Book Ticket</a></li>
        <li><a href="contact1.php">Contact US</a></li>
      </ul>
    </nav></b>
  </header>
</div>

</tr>
<tr>
<td>
<div class="rajesh"><p>The Customers are required to register on the server for getting access to the database and query result retrieval. Upon registration, each user has an account which is essentially the ‘view level’ for the customer. The account contains comprehensive information of the user entered during registration and permits the customer to get access to his past reservations, enquire about travel fare and availability of seats, make afresh reservations, update his account details.<hr width="100%">
In Current Railway Ticket Booking System Project User faces various difficulties while booking their tickets by visiting to the reservation counter or by visiting to the agents. Railway Ticket Booking System Project will save customers time and money as well. User will get the facility of making their payments of their choice and get entire information after reservations and many more of the login screen. Finding trains between given routes through simple search query on particular date and displaying all details of that particular train such as arrival time, departure time, number of seats available, class type, charges details and many more. Users will also able to update their profiles and can get details related to their transactions. Current Railway Ticket Booking System does not provide facility of self-cancellation and other facilities such as shortest route details from their current locations. It does not provide details of their previous booking history as well as festive session offer/discounts details. Through this system, user will able to perform various activities using a single windows panel.</P></td>
</div></td>
</tr>
<tr>
<td><div class="slideshow">
<img src="Rail.jpg" id="slideimage">
</div></td>
</tr>

</table>
<script>
var images=["Rail.jpg",
			"Rail0.jpg",
			"Rail1.jpg",
			"Rail2.jpg",
			"Rail3.jpg",
			"Rail4.jpg",
			"trainbgimage.jpeg",
			"wallpaper1.jpg",
			"railwayimg.jpg"];
var i=0;
function slides(){
	 document.getElementById("slideimage").src= images[i];
	 if(i<(images.length-1))
		 i++;
	 else
		 i=0;
}
	setInterval(slides,1500) 
			
</script>
</div>
<div>
<p align="right"><a href="logout.php">Logout</a></p>
</div>
</html>