<?php
session_start();
include_once 'config.inc.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users LEFT JOIN race ON users.user_id = race.user_id LEFT JOIN checkpoints ON race.actual_id = checkpoints.id");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>FLASHRACE - 2016 &#9679; Админ-панель</title>

	<meta name="description" content="..." />
	<meta name="keywords" content="..." />

	<style type="text/css" media="all">
		@import url("css/style.css");
		@import url("css/nivo-slider.css");
		@import url("css/custom-nivo-slider.css");
		@import url("css/jquery.fancybox.css");
	</style>
	
	<!--[if lt IE 8]><style type="text/css" media="all">@import url("css/ie.css");</style><![endif]-->

</head>




<body>
	
	<div id="bgc">
							
		<div class="wrapper">		<!-- wrapper begins -->






			<div id="header">
				<h1><a href="index.php"><span>FLASH RACE - 2016</span></a></h1>
				
				<ul>
					<li><a href="index.php">Главная</a></li>
					<li><a href="page.php" >О мероприятии</a></li>
					<li><a href="logout.php?logout" class="active">ВЫЙТИ</a></li>
				</ul>
			</div>		<!-- #header ends -->
			
			
			
			
			
			
			
			
			
			
			<div id="holder">
			
			
			
			
			
				<div class="pagetitle">
					<h2>ТЕКУЩИЙ ЭТАП</h2>
				</div>
				
				
				<div id="content">
					<div id="wide" align="center">
					<?php
					echo '<h2>Редактировать</h2>'; 
					echo '<form name="editform" action="'.$_SERVER['PHP_SELF'].'?action=update&id='.$_GET['id'].'" method="POST">'; 
					  echo '<table>'; 
					  echo '<tr>'; 
					  echo '<td>Наименование</td>'; 
					  echo '<td><input type="text" name="name" value="'.$item['name'].'"></td>'; 
					  echo '</tr>'; 
					  echo '<tr>'; 
					  echo '<td>Описание</td>'; 
					  echo '<td><textarea name="text">'.$item['text'].'</textarea></td>'; 
					  echo '</tr>'; 
					  echo '<tr>'; 
					  echo '<td><input type="submit" value="Сохранить"></td>'; 
					  echo '<td><button type="button" onClick="history.back();">Отменить</button></td>'; 
					  echo '</tr>'; 
					  echo '</table>'; 
					  echo '</form>'; 
						?>

					</div>		<!-- #wide ends -->
				
				</div>		<!-- #content ends -->
			
			
			
			
			</div>		<!-- #holder ends -->
			
			
			
			
			
			
			<!--
			
			<div id="logos">
				<ul>
					<li><a href="http://php.net/"><img src="images/php.png" alt="PHP" /></a></li>
					<li><a href="http://mysql.com/"><img src="images/mysql.png" alt="MySQL" /></a></li>
					<li><a href="http://jquery.com/"><img src="images/jquery.png" alt="jQuery" /></a></li>
					<li><a href="http://wordpress.org/"><img src="images/wp.png" alt="WordPress" /></a></li>
					<li><a href="http://expressionengine.com/"><img src="images/ee.png" alt="Expression Engine" /></a></li>
				</ul>
			</div>		<!-- #logos ends -->
			
			
			
			
			
			
			
			
			
			
			<div id="footer">
			<p class="left"><a href="index.php"><span>БРСМ БГУ</span></a></p>
				<p class="right">Copyright &copy; 2016. Все права защищены.</p>
			</div>			<!-- #footer ends -->
			
			
		
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