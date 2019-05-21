<?php
            require('connectdb.php');
            session_start();
        	
            if (isset($_POST['login'])) 
        	{
        		$username = $_POST['username'];
        		$password = $_POST['password']; 
        		$query = "SELECT username, password from users";
        		$sql = mysqli_query($conn,$query);
                
        		
        		while ($users = mysqli_fetch_array($sql)) {
        			
        			if ($users['username'] == $username && $users['password'] == $password)
                    {

                    $_SESSION['login'] = true;
        			
                    header('location:index.php');

        			}else{
        				echo "<script language='javascript' type='text/javascript'>alert('Incorrect Username/Password!') </script>";	
        			#     echo "INVALID USERNAME OR PASSWORD!";
        			}
                }    <?php
  session_start();

  if (!isset($_SESSION['login'])) {
    $_SESSION['re'] = $_SERVER['REQUEST_URI'];
    location('login.php');
  }
?>
            }

?>
