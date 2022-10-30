<?php include "connect.php" ?>
<?php
	$stmt = $pdo->prepare("INSERT INTO detail_review_food VALUES (?, ?, ?, ?, ?, ?)");
	
	$stmt->bindParam(1, $_POST["food_id"]);
	$stmt->bindParam(2, $_POST["foodname"]);
	$stmt->bindParam(3, $_POST["impressed"]);
	$stmt->bindParam(4, $_POST["foodregion"]);
	$stmt->bindParam(5, $_POST["price"]);
	$stmt->bindParam(6, $_POST["foodimg"]);


	if ($stmt->execute()) 
		header("location: showdb.php?status=success");
?>