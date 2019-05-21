<?php
	require('connectdb.php');
	$user_id = $_GET ['user_id'];
	$sql = "DELETE from users WHERE user_id='$user_id'";
	mysqli_query($conn, $sql);
	header('location:users.php');
?>