<?php
session_start();
if(!isset($_SESSION['admin_id']))
{
	header("Location: /admin/index.php");
}
include_once '../scripts/header_logged.php';
include '../config.inc.php';
?>

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
					<li><a href="/admin/settings.php">Запуск гонки</a>
					<li><a href="/admin/pickets.php" class="active">Пикеты</a>
					<li><a href="/admin/table.php">Турнирная таблица</a>
					<li><a href="/admin/teams.php">Команды</a>
					<li><a href="/admin/register_team.php">Добавить команду</a>
					<li><a href="/admin/register_admin.php">Добавить админа</a>
					</ul>
				</div>	
		
				<div id="content">
					<div id="wide" align="center">
					<h3>Добавление новой контрольной точки</h3>
					<?php
					  echo '<form name="addform" action="'.$_SERVER['PHP_SELF'].'?action=add" method="POST">'; 
					  echo '<p><label># пункта</label><br />'; 
					echo '<input type="text" class="text" name="num" value="'.$newid.'" /></p>'; 
					  echo '<p><label>Наименование</label><br />'; 
					  echo '<input type="text" class="text" name="name" value="" /></p>'; 
					  echo '<p><label>Описание</label><br />'; 
					  echo '<textarea name="text"></textarea></p>';  
					  echo '<p><label>Код точки</label><br />'; 
					  echo '<input type="text" class="text" name="code" value="" /></p>'; 
					  echo '<p><input type="submit" class="submitblue" value="Сохранить"> '; 
					  echo '<input type="submit" class="submit" onClick="history.back();" value="Отменить"></p>'; 
					  echo '</form>'; 
					?>

					</div>		<!-- #wide ends -->
				
				</div>		<!-- #content ends -->
			</div>		<!-- #holder ends -->
			
			
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