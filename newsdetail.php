<html>
	<head>
		<link rel='stylesheet' href='css/style.css' />
		<meta name="description" content="LIVEIPLSCORE.IN provides the ball-by-ball IPL live score along with the best updated IPL news.It also provides the list of squad of every team of IPL.">
		<meta name="keywords" content="ipl,ipl live score,ipl2014,ipl 2014,live ipl match">
		<meta name="author" content="zigzag">
		<meta charset="UTF-8">
		<link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
		<script src="js/js-image-slider.js" type="text/javascript"></script>
		<link href="css/generic.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php
		include('header.php');
		?>
		<div id='auction-box1'>
			
			<div id='auction-box20'>
				<div id='auction-box201'>
					<h2>News</h2>
				</div>
				<div id='auction-box202'>
					<div id='auction-box203'>
						<?Php
							mysql_connect("localhost","root","");
							mysql_select_db("ipl");
							$a=mysql_query("SELECT * FROM news WHERE id='$_GET[id]'");
							echo "<table id='newsdetail-table'>
									";
							while($b=mysql_fetch_array($a))
							{
							echo "<tr>
									<td colspan='1'><h4>Date</h4>".$b[3]."</td>
									</tr>
							<tr>

									<td><h4>Detail</h4>".$b[2]."</td>
									
									</tr>";
							}
							echo "</table>";
						?>
					</div>
				</div>
			</div>
		</div>
		<?php
		include('footer.php');
		?>
	</body>
</html>