<?php include "connect.php" ?>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<form action="insert_user.php" method="post">
	username: 	<input type="text" name="username"><br>
	password : 	<input type="password" name="password"><br>
	name: 		<input type="text" name="name"><br>
	age: 		<input type="text" name="age"><br>
	gender:     <select name="gender" require>
					<option value="">select option</option>
					<option value="male">male</option>
					<option value="female">female</option>
				</select><br>
	address:	<textarea name="address" rows="3" cols="40"></textarea><br>
	mobile:		<input type="text"  name="mobile"><br>
	email:		<input type="text"  name="email">
	<br><br>
	<input type="submit" value="submit">
</form>
</body>
</html>