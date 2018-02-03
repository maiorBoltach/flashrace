<?php
session_start();
include_once 'config.inc.php';
include_once 'scripts/header_logged.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
else{
	
	$query1 = 'SELECT * FROM users LEFT JOIN race ON users.user_id = race.user_id LEFT JOIN checkpoints ON race.actual_id = checkpoints.id WHERE users.user_id='.$_SESSION['user']; 
	$res1 = mysql_query( $query1 ) or die(mysql_error()); 
	$team = mysql_fetch_array($res1);
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title><?php echo $PRETITLE; ?> &#9679; ГОНКА</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<meta name="description" content="..." />
	<meta name="keywords" content="..." />

	<style type="text/css" media="all">
		@import url("css/style.css");
		@import url("css/nivo-slider.css");
		@import url("css/custom-nivo-slider.css");
		@import url("css/jquery.fancybox.css");
	</style>
</head>

<body>
	
	<div id="bgc">
							
		<div class="wrapper">		<!-- wrapper begins -->

			<div id="header">
				<h1><a href="/"><span><?php echo $PRETITLE; ?></span></a></h1>
				
				<ul>
					<li><a href="/">Главная</a></li>
					<li><a href="/about.php">О мероприятии</a></li>
					<li><a href="/logout.php?logout" class="active"><font color='#f6cc36'>Выйти из гонки</font></a></li>
					<?php echo $menu_admin; ?> 
				</ul>
			</div>		<!-- #header ends -->
			
						
			<div id="holder">
			
				<div class="pagetitle">
					<h2>Команда "<?php echo $team['user_name']; ?>" (ID: <?php echo $team['user_id']; ?>)</h2>
					<br><br>
					<ul id="nav3">
					<li><a href="/login.php" >Прохождение гонки</a>
					<li><?php echo '<a href="">Чат с организаторами</a>'; ?>
					<li><?php echo '<a href="/stats_team.php" class="active">Статистика прохождения гонки</a>'; ?>
					<li><?php echo '<a href="">Итоговая таблица</a>'; ?>
				</div>
				
					<?php 
					include_once '/scripts/team_stats_script.php';
					?>			
				<div id="content">
					<div id="wide" align="center">
						
					</div>		<!-- #main ends -->
					
					
				</div>		<!-- #content ends -->
			</div>		<!-- #holder ends -->
				
			<?php include 'templates/footer.php' ?>
			
		</div>		<!-- wrapper ends -->
		
	
	</div>




	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/jquery.easing.pack.js"></script>
	<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
	<script type="text/javascript" src="js/filter.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	
	<!-- Twitter badge-->
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/enstyled.json?callback=twitterCallback2&amp;count=1"></script>
	
		
</body>
</html>