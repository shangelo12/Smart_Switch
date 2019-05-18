<?php
	require('connectdb.php');

    $name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
    echo $name;
    
	if ($name != '' and $username != '' and $password != '') {
		
		$query = "INSERT into users (name, username, password) VALUES ('".$name."', '".$username."', '".$password.')";
		mysqli_query($conn, $query);		
	}


	header('location:users.php');

?>