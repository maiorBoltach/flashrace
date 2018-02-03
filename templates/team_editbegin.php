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
					<li><a href="/admin/pickets.php">Пикеты</a>
					<li><a href="/admin/table.php">Турнирная таблица</a>
					<li><a href="/admin/teams.php" class="active">Команды</a>
					<li><a href="/admin/register_team.php">Добавить команду</a>
					<li><a href="/admin/register_admin.php">Добавить админа</a>
					</ul>
				</div>	
				<div class="pagetitle">
					<?php include_once '../templates/team_header.php'; ?>
						</br></br>
					<ul id="nav3">
					<li><?php echo '<a href="/admin/team_edit.php?team=show&id='.$team['user_id'].'">Прохождение гонки</a>'; ?>
					<li><?php echo '<a href="/admin/team_edit.php?team=chat&id='.$team['user_id'].'">Чат</a>'; ?>
					<li><?php echo '<a href="/admin/team_edit.php?team=begin&id='.$team['user_id'].'" class="active">Указать начальный КП</a>'; ?>
					<li><?php echo '<a href="/admin/team_edit.php?team=fine&id='.$team['user_id'].'">Штрафы и бонусы</a>'; ?>
					<li><?php echo '<a href="/admin/team_edit.php?team=change_name&id='.$team['user_id'].'" >Переименовать</a>'; ?>
					<li><?php echo '<a href="/admin/team_edit.php?team=change_pass&id='.$team['user_id'].'">Сменить пароль</a>'; ?>
					</ul>	
						
						
						</div>	
				</div>	
				<div id="content">
					<div id="wide" align="center">
					<h3>Изменение номера начального контрольного пикета</h3>
					<?php
					echo '<form name="begin" action="'.$_SERVER['PHP_SELF'].'?team=update_begin&id='.$_GET['id'].'" method="POST">'; 
					echo '<p><label>Номер пикета</label><br />'; 
					echo '<input type="text" class="text" name="num" value="'.$item['begin_id'].'" /></p>'; 
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