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
	
	<script type="text/javascript" src="../js/jquery.tablesorter.js"></script> 
	<script>
	 $(document).ready(function() {
		 $("#responsecontainer").load("../scripts/leaderboard_small.php");
	   var refreshId = setInterval(function() {
		  $("#responsecontainer").load('../scripts/leaderboard_small.php');
	   }, 16000);
	   $.ajaxSetup({ cache: false });
	});
	</script>
	<script>
	$(document).ready(function()
    {
        $("#myTable").tablesorter();
    }
	
);
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
				
<?php 
				echo '<table id="myTable" class="tablesorter">';
				echo '<thead><tr><th>Команда</th><th>Количество<br>пройд. КП</th><th>Начало гонки</th>';
								
				$res2 = mysql_query("SELECT * FROM checkpoints"); 
				while($pickets = mysql_fetch_array($res2))
				{
					echo '<th>КП'.$pickets['id'].'</th>';
				}
				
				echo '<th>Конец гонки</th><th>Итоговое время</th></thead><tbody>';
				$res = mysql_query("SELECT * FROM users LEFT JOIN race ON users.user_id = race.user_id ORDER BY kol_left_id DESC"); 
				
				while ( $team = mysql_fetch_array( $res ) ) 
					{ 
						// считаем интервал между концом и началом
					$begin = new DateTime($team['begin'], $database);
					$begin->setTimezone($client);
					$end = new DateTime($team['end'], $database);
					$end->setTimezone($client);
					
					
					// считаем сумму штрафных минут
					$res1 = mysql_query("SELECT MAX(id) AS id FROM checkpoints"); 
					$item = mysql_fetch_assoc( $res1 );
					
					$fine_all = date("00:00:00");
					for($i = 1; $i<=$item[id]; $i++ )
					{
						if($team['fine'.$i] != NULL)
						{
							$time2 = $team['fine'.$i];
							$secs = strtotime($time2) - strtotime("00:00:00"); // это просто время
							$fine_all = date("H:i:s",strtotime($fine_all)+$secs);						// это дата (сегодня) + время
						}
						
					}	
					
					// и бонусных
					$bonus_all = date("00:00:00");
					for($i = 1; $i<=$item[id]; $i++ )
					{
						if($team['bonus'.$i] != NULL)
						{
							$time2 = $team['bonus'.$i];
							$secs = strtotime($time2) - strtotime("00:00:00");
							$bonus_all = date("H:i:s",strtotime($bonus_all)+$secs);
						}
						
					}	
					
					
					// прибавляем штраф и бонус к финишу
							$end1 = date_timestamp_get($end);
							$end1 = date("H:i:s",$end1);
							$secs = strtotime($end1) - strtotime("00:00:00"); // это просто время
							$pre_full_end = date("H:i:s",strtotime($fine_all)+$secs);	
							
							
							$secs = strtotime($bonus_all) - strtotime("00:00:00"); // это просто время
							$full_end = date("H:i:s",strtotime($pre_full_end)-$secs);
					
					
							$date = new DateTime($full_end);
							$interval = $begin->diff($date);
				
						echo '<tr>'; 
						echo '<th class="n"><a href="/admin/team_edit.php?team=show&id='.$team['user_id'].'" class="active">'.$team['user_name'].'</a></th>'; 
						echo '<td>'.$team['kol_left_id'].' / '.$item[id].'</td><td>';
						if($team['begin'] == NULL ) echo '-';
						else echo $begin->format('d-m-Y H:i:s');
						echo '</td>';
							
						$res2 = mysql_query("SELECT * FROM checkpoints"); 
					
						while($pickets = mysql_fetch_array($res2))
						{
							// считаем разницу между КП
							//начальное время
							if($pickets['id']==$team['begin_id']) $kp1 = new DateTime($team['begin'], $database);
							else 
							{
								if($pickets['id'] == 1) $begin_pic = $item[id];
								else $begin_pic = $pickets['id'] - 1;
								if($team['pic'.$begin_pic]==NULL) $kp1 = new DateTime(date("d-m-Y H:i:s"), $database);
								else $kp1 = new DateTime($team['pic'.$begin_pic], $database);
							}
							$kp1->setTimezone($client);
							
							//конечное время
							if($team['pic'.$pickets['id']]==NULL) $kp2 = new DateTime(date("d-m-Y H:i:s"), $database);
							else $kp2 = new DateTime($team['pic'.$pickets['id']], $database);
							$kp2->setTimezone($client);
							
							$intervalkp = $kp1->diff($kp2);
										
							
							if($pickets['id']==$team['begin_id']) 
							echo '<td class="err">'.$intervalkp->format('%H:%I:%S').'</td>';
							else if($pickets['id']==$team['actual_id']) 
							echo '<td class="act">'.$intervalkp->format('%H:%I:%S').'</td>';
							else echo '<td>'.$intervalkp->format('%H:%I:%S').'</td>';
						}
						echo '<td>';
						if($team['end'] == NULL ) echo '-';
						else echo $end->format('d-m-Y H:i:s');
						echo '</td>';
						echo '<td>'.$interval->format('%H:%I:%S').'</td>'; 
						echo '</tr>'; 
				
				
					}
				echo '</tbody>';
				echo '</table>';
				?>
				
		<!-- <div id ="responsecontainer"></div> -->
					<div id="content">
					<div id="wide" align="center">
					<H3>Примечания:</H3>
					<p><font color="#f6cc36">Жёлтым цветом</font> выделены начальные КП команд</p>
					<p><font color="#0c8b00">Зелёным цветом</font> выделены текущие КП команд</p>
			</div></div>
				
			<?php include '../templates/footer.php' ?>
		</div>		<!-- wrapper ends -->
		
	
	</div>



	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
	<script src="../js/jquery.stickyheader.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/jquery.easing.pack.js"></script>
	<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
	<script type="text/javascript" src="js/filter.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	
		
</body>
</html>