<?php
session_start();
include_once '../config.inc.php';
include_once '../scripts/header_logged.php';
if(!isset($_SESSION['admin_id']))
{
	header("Location: /admin/index.php");
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<title><?php echo $PRETITLE; ?> &#9679; АДМИН-ЦЕНТР</title>

	<meta name="description" content="..." />
	<meta name="keywords" content="..." />

	<style type="text/css" media="all">
		@import url("../css/style.css");
		@import url("../css/nivo-slider.css");
		@import url("../css/custom-nivo-slider.css");
		@import url("../css/jquery.fancybox.css");
	</style>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script>
	 $(document).ready(function() {
		 $("#responsecontainer").load("../scripts/leaderboard_small.php");
	   var refreshId = setInterval(function() {
		  $("#responsecontainer").load('../scripts/leaderboard_small.php');
	   }, 16000);
	   $.ajaxSetup({ cache: false });
	});
	</script>
</head>

<body>
	
	<div id="bgc">
							
		<div class="wrapper">		<!-- wrapper begins -->
			<div id="header">
				<h1><a href="/"><span><?php echo $PRETITLE; ?></span></a></h1>
				
				<ul>
					<li><a href="/">Главная</a></li>
					<li><a href="/about.php" >О мероприятии</a></li>
					<li><a href="/login.php"><font color='#f6cc36'><?php echo $menu_race; ?> </font></a></li>
					<li><a href="/admin/logout.php?logout_admin" class="active"><font color='#009EE5'>ВЫЙТИ ИЗ АДМИН-ЦЕНТРА</font></a></li>
				</ul>
			</div>		<!-- #header ends -->
			
			
			<div id="holder">
				<div class="pagetitle">
					<h2>АДМИН-ЦЕНТР</h2>
					</br></br>
					<ul id="nav3">
					<li><a href="/admin/settings.php" >Запуск гонки</a>
					<li><a href="/admin/pickets.php">Пикеты</a>
					<li><a href="/admin/table.php" class="active">Турнирная таблица</a>
					<li><a href="/admin/teams.php">Команды</a>
					<li><a href="/admin/register_team.php">Добавить команду</a>
					<li><a href="/admin/register_admin.php">Добавить админа</a>
					</ul>
				</div>	
				<h3><center><a href="/admin/table_full.php">ПОЛНАЯ ТАБЛИЦА РЕЗУЛЬТАТОВ</a></center></h3><br>
			<div id ="responsecontainer"></div>

			
				
			<?php include '../templates/footer.php' ?>
		</div>		<!-- wrapper ends -->
		
	
	</div>




	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/jquery.easing.pack.js"></script>
	<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
	<script type="text/javascript" src="js/filter.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	
		
</body>
</html>