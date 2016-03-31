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
			<div id='header'>
		<div id='top-header'>
			<div id='top-header1'>
				<div id='header-like'><img src='css/images/logh.png'>
				</div>
				<div id='countdown'>
					<script src="js/countdown.js" type="text/javascript"></script>
					<script type="application/javascript">

					var myCountdownTest = new Countdown({
														year	: 2014,
														month	: 4, 
														day		: 16,
														hours	: 18,
														width	: 300, 
														height	: 50
														});



					</script>
				</div>
				</div>
		</div>
		<div id='middle-header'>
			<div id='middle-header1'>
				<div id='logo'>
				</div>
			</div>
		</div>
		<div id='bottom-header'>
			<div id='bottom-header1'>
				<ul id='header-nav'>
					<li><a href='home.php'>HOME</a></li>
					<li><a href='news.php'>NEWS</a></li>
					<li><a href='auction.php'><span>AUCTION</span></a></li>
					<li><a href='schedule.php'>SCHEDULE</a></li>
					<li><a href='teams.php'>TEAMS</a></li>
					<li><a href='venues.php'>VENUES</a></li>
					<li><a href='stats.php'>STATS</a></li>
					<li><a href=''>COMPARISON</a></li>
					<li><a href='photos.php'>PHOTOS</a></li>
					<li><a href=''>ABOUT BCCI</a></li>
				</ul>
			</div>
		</div>
	</div>
		<div id='auction-box1'>
			<div id='auction-box10'>
				<div id='auction-box100'>
					<h4>AUCTION</h4>
				</div>
				<div id='auction-box101'>
					<h4>Funds Left</h4>
				</div>
				<div id='auction-box101'>
					<h4>Sold</h4>
				</div>
				<div id='auction-box101'>
					<h4>Unsold</h4>
				</div>
			</div>
			<div id='auction-box20'>
				<div id='auction-box201'>
					<h2>Unsold Players</h2>
				</div>
				<div id='auction-box202'>
					<div id='auction-box203'>
						<?Php
							mysql_connect("localhost","root","");
							mysql_select_db("ipl");
							$a=mysql_query("SELECT * FROM unsold");
							echo "<table id='unsold-table'>";
							while($b=mysql_fetch_array($a))
							{
							echo "<tr>
									<td class='serial'>".$b[0]."</td>
									<td>".$b[1]."</td>
									<td>".$b[2]."</td>
									<td>Rs.".$b[3]."</td>
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