<?php
require('connectdb.php');
$qry=mysqli_query($conn,$query)
$query="SELECT COUNT(*) as total from users");
$data=mysqli_fetch_assoc($result);
echo $data['total'];
?>
