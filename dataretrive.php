<html>
<head>
	<title>Booking data</title>
	</head>
	<body>
		<p align="right"><button><a href="index.php" title="home page">Home</a></button></p></center>
		<h2>ONLINE RAILWAY RESERVATION</h2>
		<hr width="100%">
		<h2 align="center" style="color:blue;">Recently booking information is in last row!!</h2>
		<table border="2" title="All recorded database of booking" align="center">
			<tr>
				<th>Id</th>
				<th>Source</th>
				<th>Destination</th>
				<th>Dates</th>
				<th>Adult</th>
				<th>Child</th>
			</tr>
<?php
include("db2.php");
error_reporting(0);
$query="select * from bookingtickets";
$data=mysqli_query($db_connect,$query);

$total=mysqli_num_rows($data);
//echo $total;

if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo"
		<tr>
		<td>".$result['id']."</td>
		<td>".$result['source']."</td>
		<td>".$result['destination']."</td>
		<td>".$result['dates']."</td>
		<td>".$result['adult']."</td>
		<td>".$result['child']."</td>
		</tr>
		";
	}
}

else
{
	echo "No records found!";
}
?>
</table>
</body>
</html>