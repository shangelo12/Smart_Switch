<?php
	require('connectdb.php');

	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	
    echo $name;
    
	if ($username != '' and $password != '' and $username != '') {
		
		$query = "INSERT into users (username, password, name) VALUES ('".$username."', '".$password."','".$name."')";
		mysqli_query($conn, $query);		
	}


	header('location:users.php');

?>