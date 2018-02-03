<?php
include '../config.inc.php';
session_start();
if(!isset($_SESSION['admin_id']))
{
	header("Location: /admin/index.php");
}
include_once '../scripts/header_logged.php';

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
		
				
				

					<table><tbody>
					<tr><th>ID</th><th>Название</th><th>Текст задания</th><th>Код</th><th></th></tr>
					<?php
					while ( $item = mysql_fetch_array( $res ) ) 
					{ 
						echo '<tr>'; 
						echo '<td>'.$item['id'].'</td>'; 
						echo '<td>'.$item['name'].'</td>'; 
						echo '<td>'.$item['text'].'</td>'; 
						echo '<td>'.$item['code'].'</td>'; 
						echo '<td><a href="'.$_SERVER['PHP_SELF'].'?action=editform&id='.$item['id'].'"><img src="../images/edit.png" width="20" height="20" alt="Редактировать"></a>'; 
						echo '<a href="'.$_SERVER['PHP_SELF'].'?action=delete&id='.$item['id'].'"><img src="../images/delete.png" width="20" height="20" alt="Удалить"></a></td>'; 
						echo '</tr>'; 
					} 
						  echo '</tbody></table>';
					echo '<div id="content"><div id="wide" align="center">
					<form action=""> 
					<p><input type="button" class="submitblue" onclick="location.href=\''.$_SERVER['PHP_SELF'].'?action=addform\'" value="Добавить новую контрольную точку"/></p>
					</form>' 
					?>
					
				</div>
			
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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
	<script src="../js/jquery.stickyheader.js"></script>
		
</body>
</html>