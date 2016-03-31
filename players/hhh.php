<?
	$conn=mysql_connect("localhost","root","") or die('Error');
    mysql_select_db("progile",$conn) or die('Error');
	$sql="SELECT * FROM image";
	$a=mysql_query($sql,$conn);
	while($b=mysql_fetch_array($a))
	{
	echo "<pre>";
	print_r($b);
	}
	
?>
