<?php
mysql_connect("localhost","root","");
mysql_select_db("ipl");
$a=mysql_query("SELECT * FROM squad where playername='Dwayne Bravo'");
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
				<td>2013</td>
				<td>".$c[0]."</td>
				<td>".$c[1]."</td>
				<td>".$c[2]."</td>
				<td>".$c[3]."</td>
				<td>".$c[4]."</td>
				<td>".$c[5]."</td>
				<td>".$c[6]."</td>
				<td>".$c[7]."</td>
				<td>".$c[8]."</td>
				<td>".$c[9]."</td>
				<td>".$c[10]."</td>
				<td>".$c[11]."</td>
				<td>".$c[12]."</td>
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
				<td>2011</td>
				<td>".$f[0]."</td>
				<td>".$f[1]."</td>
				<td>".$f[2]."</td>
				<td>".$f[3]."</td>
				<td>".$f[4]."</td>
				<td>".$f[5]."</td>
				<td>".$f[6]."</td>
				<td>".$f[7]."</td>
				<td>".$f[8]."</td>
				<td>".$f[9]."</td>
				<td>".$f[10]."</td>
				<td>".$f[11]."</td>
				<td>".$f[12]."</td>
			</tr>
			<tr>
				<td>2010</td>
				<td>".$g[0]."</td>
				<td>".$g[1]."</td>
				<td>".$g[2]."</td>
				<td>".$g[3]."</td>
				<td>".$g[4]."</td>
				<td>".$g[5]."</td>
				<td>".$g[6]."</td>
				<td>".$g[7]."</td>
				<td>".$g[8]."</td>
				<td>".$g[9]."</td>
				<td>".$g[10]."</td>
				<td>".$g[11]."</td>
				<td>".$g[12]."</td>
			</tr>
			<tr>
				<td>2009</td>
				<td>".$h[0]."</td>
				<td>".$h[1]."</td>
				<td>".$h[2]."</td>
				<td>".$h[3]."</td>
				<td>".$h[4]."</td>
				<td>".$h[5]."</td>
				<td>".$h[6]."</td>
				<td>".$h[7]."</td>
				<td>".$h[8]."</td>
				<td>".$h[9]."</td>
				<td>".$h[10]."</td>
				<td>".$h[11]."</td>
				<td>".$h[12]."</td>
			</tr>
			<tr>
				<td>2008</td>
				<td>".$i[0]."</td>
				<td>".$i[1]."</td>
				<td>".$i[2]."</td>
				<td>".$i[3]."</td>
				<td>".$i[4]."</td>
				<td>".$i[5]."</td>
				<td>".$i[6]."</td>
				<td>".$i[7]."</td>
				<td>".$i[8]."</td>
				<td>".$i[9]."</td>
				<td>".$i[10]."</td>
				<td>".$i[11]."</td>
				<td>".$i[12]."</td>
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
				<td>2013</td>
				<td>".$k[0]."</td>
				<td>".$k[1]."</td>
				<td>".$k[2]."</td>
				<td>".$k[3]."</td>
				<td>".$k[4]."</td>
				<td>".$k[5]."</td>
				<td>".$k[6]."</td>
				<td>".$k[7]."</td>
				<td>".$k[8]."</td>
				<td>".$k[9]."</td>
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
			<tr>
				<td>2011</td>
				<td>".$m[0]."</td>
				<td>".$m[1]."</td>
				<td>".$m[2]."</td>
				<td>".$m[3]."</td>
				<td>".$m[4]."</td>
				<td>".$m[5]."</td>
				<td>".$m[6]."</td>
				<td>".$m[7]."</td>
				<td>".$m[8]."</td>
				<td>".$m[9]."</td>
			</tr>
			<tr>
				<td>2010</td>
				<td>".$n[0]."</td>
				<td>".$n[1]."</td>
				<td>".$n[2]."</td>
				<td>".$n[3]."</td>
				<td>".$n[4]."</td>
				<td>".$n[5]."</td>
				<td>".$n[6]."</td>
				<td>".$n[7]."</td>
				<td>".$n[8]."</td>
				<td>".$n[9]."</td>
			</tr>
			<tr>
				<td>2009</td>
				<td>".$o[0]."</td>
				<td>".$o[1]."</td>
				<td>".$o[2]."</td>
				<td>".$o[3]."</td>
				<td>".$o[4]."</td>
				<td>".$o[5]."</td>
				<td>".$o[6]."</td>
				<td>".$o[7]."</td>
				<td>".$o[8]."</td>
				<td>".$o[9]."</td>
			</tr>
			<tr>
				<td>2008</td>
				<td>".$p[0]."</td>
				<td>".$p[1]."</td>
				<td>".$p[2]."</td>
				<td>".$p[3]."</td>
				<td>".$p[4]."</td>
				<td>".$p[5]."</td>
				<td>".$p[6]."</td>
				<td>".$p[7]."</td>
				<td>".$p[8]."</td>
				<td>".$p[9]."</td>
			</tr>

		</table>
	 </center>";
}
?>