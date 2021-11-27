<?php
include("db2.php");
?>
<html>
<head>
	<title>
	Railway ticket booking!!
	</title>
	<style>
	</style>
	
</head><body>
	<table>
		<tr>
		<td>
	<h1>ONLINE RAIL RESERVATION</h1></td>
	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
	<td>
		<button><a href="index.php">Home</a></button></td></tr></table>
	<hr width="100%">
	<center><div><h2> Book Ticket</h2></div></center>
	<center><form class="form" action="bookingdata.php" method="Post">
		<label>Name:</label>
		<input type="text" name="name"><br/><br/>
		<label for="From">From:</label>
		<select name="source"><option value="pune">pune</option>
			<option value="delhi">delhi</option>
			<option value="mumbai">Mumbai</option>
			<option value="Chennai">Chennai</option>
			<option value="New Delhi">New Delhi</option>
			<option value="anand vihar">Aand vihar</option>
		    <option value="Surat">Surat</option>
		    <option value="Kota">Kota</option>
			<option value="Banglore">Banglore</option></select><br/><br/>
		<label><b>To:</b></label>
		<select name="destination"><option value="Mumbai">Mumbai</option>
			<option value="New Delhi">New Delhi</option>
			<option value="Surat">Surat</option>
			<option value="Banglore">Banglore</option>
			<option value="delhi">delhi</option>
			<option value="kota">Kota</option></select><br/><br/>
		<label for="date">Date</label><input type="date" name="dates" id="dates" required><br/><br/>
		<label for="Adult"><b>No Adult's</b></label><select name="adult" id="child">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
		</select><br/><br/>
		<label for="child"><b>No Child's</b></label><select name="child" id="child" required>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
		</select><br/><br/>
		<button type="submit" name="submit">BOOKING</button>
	</form></center>
</body>
</html>

