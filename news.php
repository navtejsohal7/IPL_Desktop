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
					<li><a href='news.php'><span>NEWS</span></a></li>
					<li><a href='auction.php'>AUCTION</a></li>
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
			<div id='auction-box20'>
				<div id='teamchennainame'>
				<h2>News</h2>
			</div>
				<div id='auction-box202'>
					<div id='auction-box203'>
						<?Php
							mysql_connect("localhost","root","");
							mysql_select_db("ipl");
							$a=mysql_query("SELECT * FROM news");
							echo "<div id='news-table'>
							<div id='newstable-heading'>
									<div id='newstable-heading1'><h4>Sr. No</h4></div>
									<div id='newstable-heading2'><h4>Date</h4></div>
									<div id='newstable-heading3'><h4>Heading</div></td>
									</div>";
							while($b=mysql_fetch_array($a))
							{
							$c=explode(',',$b[1]);
							echo "<div id='newstable-heading'>
									<div id='newstable-heading1'>".$b[0]."</div>
									<div id='newstable-heading2'>".$b[3]."</div>
									<div id='newstable-heading3'><a href='newsdetail.php?id=".$b[0]."'>".$c[0]."</br>".$c['1']."</br></a></div>
									
									</div>";
							}
							echo "</div>";
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