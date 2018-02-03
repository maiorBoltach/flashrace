<?php
session_start();

include_once '../config.inc.php';
include_once '../scripts/header_logged.php';
if(!isset($_SESSION['admin_id']))
{
	header("Location: /admin/index.php");
}
else {
	
if(isset($_POST['start']))
{
	$query = mysql_query("UPDATE race SET status = -1");
	if($query)
		{
				header('Location: /admin/settings.php?send=success_start');
				die;			
		}
		else
		{
			header('Location: /admin/settings.php?send=error_start');
			die;
		}	
}

if(isset($_POST['start_again']))
{
	$query = mysql_query("UPDATE race SET status = NULL");
	if($query)
		{
				header('Location: /admin/settings.php?send=success_start_again');
				die;			
		}
		else
		{
			header('Location: /admin/settings.php?send=error_start_again');
			die;
		}	
}


if(isset($_POST['reset']))
{
	$query = mysql_query("UPDATE race  SET kol_left_id =0, actual_id =0, help_used =0, actual_help =0, begin =NULL, end  =NULL,
	 pic1  =NULL, pic2  =NULL, pic3  =NULL, pic4  =NULL, pic5  =NULL, pic6  =NULL, pic7  =NULL, pic8  =NULL,
	 pic9  =NULL, pic10  =NULL, pic11  =NULL, pic12  =NULL, pic13  =NULL, pic14  =NULL, pic15  =NULL, pic16  =NULL, pic17  =NULL,
	 pic18  =NULL, pic19  =NULL, pic20  =NULL, pic21  =NULL, pic22  =NULL, pic23  =NULL, pic24  =NULL, pic25  =NULL, pic26  =NULL, pic27  =NULL,
	 pic28  =NULL, pic29  =NULL, pic30  =NULL, fine1  =NULL, fine2  =NULL, fine3  =NULL, fine4  =NULL, fine5  =NULL, fine6  =NULL, fine7  =NULL,
	 fine8  =NULL, fine9  =NULL, fine10  =NULL, fine11  =NULL, fine12  =NULL, fine13  =NULL, fine14  =NULL, fine15  =NULL, fine16  =NULL,
	 fine17  =NULL, fine18  =NULL, fine19  =NULL, fine20  =NULL, fine21  =NULL, fine22  =NULL, fine23  =NULL, fine24  =NULL, fine25  =NULL,
	 fine26  =NULL, fine27  =NULL, fine28  =NULL, fine29  =NULL, fine30  =NULL, 
	 bonus1  =NULL, bonus2  =NULL, bonus3  =NULL, bonus4  =NULL, bonus5  =NULL, bonus6  =NULL, bonus7  =NULL,
	 bonus8  =NULL, bonus9  =NULL, bonus10  =NULL, bonus11  =NULL, bonus12  =NULL, bonus13  =NULL, bonus14  =NULL, bonus15  =NULL, bonus16  =NULL,
	 bonus17  =NULL, bonus18  =NULL, bonus19  =NULL, bonus20  =NULL, bonus21  =NULL, bonus22  =NULL, bonus23  =NULL, bonus24  =NULL, bonus25  =NULL,
	 bonus26  =NULL, bonus27  =NULL, bonus28  =NULL, bonus29  =NULL, bonus30  = NULL;");
	 if($query)
		{
				header('Location: /admin/settings.php?send=success_reset');
				die;			
		}
		else
		{
			header('Location: /admin/settings.php?send=error_reset');
			die;
		}	
	 
}
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
	
	<link type="text/css" rel="stylesheet" media="all" href="../css/chat.css" />
	<link type="text/css" rel="stylesheet" media="all" href="../css/screen.css" />
	
	
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
					<li><a href="/admin/settings.php" class="active">Запуск гонки</a>
					<li><a href="/admin/pickets.php">Пикеты</a>
					<li><a href="/admin/table.php">Турнирная таблица</a>
					<li><a href="/admin/teams.php">Команды</a>
					<li><a href="/admin/register_team.php">Добавить команду</a>
					<li><a href="/admin/register_admin.php">Добавить админа</a>
					</ul>
				</div>	
		
				<div id="content">
					<div id="wide" align="center">
						<form action="" method="post">
							<p><input type="submit" class="submitblue"  value="УДАЛИТЬ ВСЮ СТАТИСТИКУ ПРОХОЖДЕНИЙ" name = "reset"/</p>
					<form action="" method="post"> <?php
							$query2 = mysql_query("SELECT status FROM race WHERE user_id=1");
							$res = mysql_fetch_assoc($query2);
							if($res['status'] == NULL) echo "<p><input type=\"submit\" class=\"submitblue\"  value=\"ЗАПУСТИТЬ ГОНКУ\" name = \"start\"/</p>";
							else if($res['status'] == -1 || $res['status'] == 1 || $res['status'] == 0) { echo "<p><input type=\"submit\" class=\"submitblue\"  value=\"ОТКАТИТЬ ГОНКУ НА СТАРТ\" name = \"start_again\"/</p>";
							echo "<h3><p> Гонка в процессе или завершена</p></h3>"; }
							?>
					</form>
							
					</form>
					</div>		<!-- #wide ends -->
				
				</div>		<!-- #content ends -->
			</div>		<!-- #holder ends -->
			
			
			<?php include '../templates/footer.php' ?>
		</div>		<!-- wrapper ends -->
		
	
	</div>


	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/jquery.easing.pack.js"></script>
	<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
	<script type="text/javascript" src="js/filter.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	
		
</body>
</html>