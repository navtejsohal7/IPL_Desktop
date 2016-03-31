<html>
<head></head>
<body>

<?php


    $username=$_POST['username'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];
	$email=$_POST['email'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	
    $conn=mysql_connect("localhost","root","") or die('Error');
    mysql_select_db("oracle",$conn) or die('Error');
	$sql="INSERT INTO profile (image)//image attribute in DB is blob type.
	        VALUES (' ')";
	mysql_query($sql,$conn);
	mysql_close($conn);
	
?>





</body>
</html>