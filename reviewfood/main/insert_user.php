<?php include "connect.php" ?>
<?php
	$stmt = $pdo->prepare("INSERT INTO detail_user VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt->bindParam(1, $_POST["user_id"]);
	$stmt->bindParam(2, $_POST["username"]);
	$stmt->bindParam(3, $_POST["password"]);
	$stmt->bindParam(4, $_POST["name"]);
	$stmt->bindParam(5, $_POST["age"]);
	$stmt->bindParam(6, $_POST["gender"]);
	$stmt->bindParam(7, $_POST["address"]);
	$stmt->bindParam(8, $_POST["email"]);
	$stmt->bindParam(9, $_POST["mobile"]);

	if ($stmt->execute()) 
		header("location: showdb.php?status=success");
?>