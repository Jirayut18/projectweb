<?php include "connect.php" ?>

<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<form action="insert_review_food.php" method="post">
	<table>
		<tr>
			<td>FoodName</td>
			<td><input type="text" name="foodname"></td>
		</tr>
		<tr>
			<td>impressed</td>
			<td><input type="radio" name="impressed" id="impressed_1" value="1">
			<label for="impressed_1">1</label>
			<input type="radio" name="impressed" id="impressed_2" value="2">
			<label for="impressed_2">2</label>
			<input type="radio" name="impressed" id="impressed_3" value="3">
			<label for="impressed_3">3</label>
			<input type="radio" name="impressed" id="impressed_4" value="4">
			<label for="impressed_4">4</label>
			<input type="radio" name="impressed" id="impressed_5" value="5">
			<label for="impressed_5">5</label>
			</td>
		</tr>
		<tr>
			<td>FoodRegion</td>
			<td><select name="foodregion" >
				<option value="#">เลือกภาค</option>
				<option value="North">เหนือ</option>
				<option value="South">ใต้</option>
				<option value="Middle">กลาง</option>
				<option value="Esan">อีสาน</option>
			</select></td>
		</tr>
		<tr>
			<td>price</td>
			<td><input type="text" name="price"></td>
		</tr>
		<tr>
			<td>foodimg</td>
			<td><input type="file" name="foodimg"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit"></td>
		</tr>

	
</form>
</body>
</html>