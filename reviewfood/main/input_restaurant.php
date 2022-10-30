<?php include "connect.php" ?>

<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<form action="insert_restaurant.php" method="post">
	<table>
		<tr>
			<td>Restaurant_name</td>
			<td><input type="text" name="restaurant_name"></td>
		</tr>
		<tr>
			<td>Restaurant_Address</td>
			<td><input type="text" name="restaurant_address"></td>
		</tr>
		<tr>
			<td>Restaurant_favorite</td>
			<td><input type="text" name="restaurant_favorite"></td>
		</tr>
		<tr>
			<td>Promote_Name</td>
			<td><input type="text" name="promote_name"></td>
		</tr>
		<tr>
			<td>Timeopen</td>
			<td><input type="text" name="timeopen"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit"></td>
		</tr>
</form>
</body>
</html>