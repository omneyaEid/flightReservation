<?php
include "navbar.php";
?>
<!DOCTYPE html>
<link rel ="stylesheet" href="add_flight.css"/>
<html>
<head>
	<title>
		flight reservation
	</title>
</head>
<body>
<center> 
	<div class="all">
	<form   action="add2.php" method="post" >
       <div class="h">Add Flight</div>
			<table>
				<tr>
					<th>Flight Name</th>
					<td><input type="text" name="name1" id="name1" placeholder="Enter your flight name "></td>
				</tr>
				<tr>
					<th>Flight number</th>
					<td><input type="text" name="number" id="number1" placeholder="Enter your flight number "></td>
				</tr>
                <tr>
					<th>Start place</th>
					<td><input type="text" name="name2" id="name2" placeholder="Enter your flight start place "></td>
				</tr>
 				<tr>
					<th>Destination place</th>
					<td><input type="text" name="name3" id="name3" placeholder="Enter your flight Destination place "></td>
				</tr>
				<tr>
					<th>Flight Date</th>
					<td><input type="date" name="date" id="date" placeholder="Enter your flight date "></td>
				</tr>
                  <tr>
					<th>Flight Price</th>
					<td><input type="text" name="price" id="date" placeholder="Enter your flight price "></td>
				</tr>
			</table>

				<div style="margin-top: 40px">
				<tr>
					<td>
					<center>
					<input type="submit"  value="Send" name="submit" id="date1" >
                    </center>
					</td>
				
				</tr>
			</div>
	</form>
	</div>
</center>
</body>
</html>