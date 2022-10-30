<?php include "connect.php" ?>
<?php
	$stmt = $pdo->prepare("INSERT INTO detail_restaurant VALUES (?, ?, ?, ?, ?, ?)");
	
	$stmt->bindParam(1, $_POST["restaurant_id"]);
	$stmt->bindParam(2, $_POST["restaurant_name"]);
	$stmt->bindParam(3, $_POST["restaurant_address"]);
	$stmt->bindParam(4, $_POST["restaurant_favorite"]);
	$stmt->bindParam(5, $_POST["promote_name"]);
	$stmt->bindParam(6, $_POST["timeopen"]);

	if ($stmt->execute()) 
		header("location: showdb.php?status=success");
?>