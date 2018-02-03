<?php
session_start();
include_once 'config.inc.php';
include_once 'scripts/header_logged.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
else{
	include_once 'scripts/race_script.php';
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
	<!--[if lt IE 8]><style type="text/css" media="all">@import url("css/ie.css");</style><![endif]-->

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
					<h2>Команда "<?php echo $userRow['user_name']; ?>" (ID: <?php echo $userRow['user_id']; ?>)</h2>
					<br><br>
					<ul id="nav3">
					<li><a href="/race.php" class="active">Прохождение гонки</a>
					<li><?php echo '<a href="javascript:void(0)" onclick="javascript:chatWith(\'flashrace_admin\')"">Чат с организаторами</a>'; ?>
					<?php if($userRow['status']==1) { echo '<li><a href="/stats_team.php">Статистика прохождения гонки</a>';
					echo '<li><a href="">Итоговая таблица</a>'; } ?>
				</div>
				
								
				<div id="content">
					<div id="wide" align="center">
						<?php 
						if($userRow['status']==NULL)    
						{ echo "<h3> ГОНКА НАЧНЁТСЯ ОЧЕНЬ СКОРО...</h3>"; }
						else if($userRow['status']==-1) 
						{
							echo "<form id=\"sum\" method=\"POST\"  action=\"\"><input type=\"submit\" class=\"submit\" value=\"НАЧАТЬ ГОНКУ\" name=\"begin_button\"/></form>";
						}
						else if($userRow['status']==0)
						{	echo "<h3>КОНТРОЛЬНЫЙ ПУНКТ №".$userRow['id']."</h3>";
							echo "<blockquote>".$userRow['text']."</blockquote>";
							echo "<form id=\"sum\" method=\"POST\"  action=\"\"> <input type=\"text\" class=\"text\" name = \"code_answer\" /></p>";
							echo "<input type=\"submit\" class=\"submit\" value=\"Ответить\" name=\"answer_button\"/></form>";
						} 
						else if($userRow['status']==1)
						{
							echo "<h3> ГОНКА ЗАВЕРШЕНА. РЕЗУЛЬТАТЫ БУДУТ ПОДВЕДЕНЫ, КАК ТОЛЬКО ФИНИШИРУЮТ ВСЕ КОМАНДЫ.</h3> <p>А пока Вы можете посмотреть собственную статистику прохождения гонки во вкладке \"Статистика прохождения гонки\"</p>";
						}
						?>
						
						
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