<?php
mysql_connect("localhost","root","");
mysql_select_db("ipl");
$a=mysql_query("SELECT * FROM squad where playername='Francois du Plessis'");
while($d=mysql_fetch_array($a))
{
$b=explode(",",$d[7]);
$c=explode(",",$d[8]);
$e=explode(",",$d[9]);
$f=explode(",",$d[10]);
$g=explode(",",$d[11]);
$h=explode(",",$d[12]);
$i=explode(",",$d[13]);
$j=explode(",",$d[14]);
$k=explode(",",$d[15]);
$l=explode(",",$d[16]);
$m=explode(",",$d[17]);
$n=explode(",",$d[18]);
$o=explode(",",$d[19]);
$p=explode(",",$d[20]);
echo "<center>
		<table width='1000px' >
			<tr>
				<td></td>
				<td>Match </td>
				<td>NO</td>
				<td>Runs</td>
				<td>HS </td>
				<td>AVE </td>
				<td>BF </td>
				<td>SR </td>
				<td>100</td>
				<td>50 </td>
				<td>4s </td>
				<td>6s </td>
				<td>ct </td>
				<td>St</td>
			</tr>
			<tr>
				<td>Career</td>
				<td>".$b[0]."</td>
				<td>".$b[1]."</td>
				<td>".$b[2]."</td>
				<td>".$b[3]."</td>
				<td>".$b[4]."</td>
				<td>".$b[5]."</td>
				<td>".$b[6]."</td>
				<td>".$b[7]."</td>
				<td>".$b[8]."</td>
				<td>".$b[9]."</td>
				<td>".$b[10]."</td>
				<td>".$b[11]."</td>
				<td>".$b[12]."</td>
			</tr>
			
			<tr>
				<td>2012</td>
				<td>".$e[0]."</td>
				<td>".$e[1]."</td>
				<td>".$e[2]."</td>
				<td>".$e[3]."</td>
				<td>".$e[4]."</td>
				<td>".$e[5]."</td>
				<td>".$e[6]."</td>
				<td>".$e[7]."</td>
				<td>".$e[8]."</td>
				<td>".$e[9]."</td>
				<td>".$e[10]."</td>
				<td>".$e[11]."</td>
				<td>".$e[12]."</td>
			</tr>
			
			<tr>
				<td></td>
				<td>Match </td>
				<td>Balls</td>
				<td>Runs</td>
				<td>Wkts </td>
				<td>BBM </td>
				<td>Ave</td>
				<td>Econ</td>
				<td>SR</td>
				<td>4w</td>
				<td>5w</td>
			</tr>
			<tr>
				<td>Career</td>
				<td>".$j[0]."</td>
				<td>".$j[1]."</td>
				<td>".$j[2]."</td>
				<td>".$j[3]."</td>
				<td>".$j[4]."</td>
				<td>".$j[5]."</td>
				<td>".$j[6]."</td>
				<td>".$j[7]."</td>
				<td>".$j[8]."</td>
				<td>".$j[9]."</td>
			</tr>
			
			<tr>
				<td>2012</td>
				<td>".$l[0]."</td>
				<td>".$l[1]."</td>
				<td>".$l[2]."</td>
				<td>".$l[3]."</td>
				<td>".$l[4]."</td>
				<td>".$l[5]."</td>
				<td>".$l[6]."</td>
				<td>".$l[7]."</td>
				<td>".$l[8]."</td>
				<td>".$l[9]."</td>
			</tr>
			

		</table>
	 </center>";
}
?>