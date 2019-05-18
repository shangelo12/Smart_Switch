<?php

	$conn = mysqli_connect('localhost','root','','acs_db');
	
	if (mysqli_connect_errno()) 
	{
		echo 'FAILED TO CONNECT TO DATABASE!!'.mysqli_connect_errno();
	}

?>