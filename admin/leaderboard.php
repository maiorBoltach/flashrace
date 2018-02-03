<?php 
session_start();

include_once '../php/config.inc.php';
include_once '../php/header_logged.php';
if(!isset($_SESSION['admin_id']))
{
	header("Location: /admin/index.php");
}
else {

 ?>

<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="shortcut icon" href="../images/splash/favicon.ico" type="image/x-icon" /> 
    
<title><?php echo $PRETITLE; ?> | Расширенная таблица результатов</title>

<link href="../styles/style.css"           rel="stylesheet" type="text/css">
<link href="../styles/framework.css"       rel="stylesheet" type="text/css">
<link href="../styles/font-awesome.css"    rel="stylesheet" type="text/css">
<link href="../styles/animate.css"         rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../styles/jquery.mCustomScrollbar.css">
<script type="text/javascript" src="../scripts/jquery.js"></script>
<script type="text/javascript" src="../scripts/jqueryui.js"></script>
<script type="text/javascript" src="../scripts/framework-plugins.js"></script>
<script type="text/javascript" src="../scripts/custom.js"></script>
<script type="text/javascript" src="../scripts/jquery.tablesorter.js"></script> 

<script>
// скрипт обновления блока
	 $(document).ready(function() {
		 $("#responsecontainer").load("../php/leaderboard.php");
	   var refreshId = setInterval(function() {
		  $("#responsecontainer").load('../php/leaderboard.php');
	   }, 9000);
	   $.ajaxSetup({ cache: false });
	});
	</script>
	
<script>	
// для сортировки
	$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 
</script>  
</head>

<body class="left-sidebar"> 

<?php include_once '../templates/preloader.php'; ?>
    
<div class="gallery-fix"></div> <!-- Important for all pages that have galleries or portfolios -->
    
<div id="header-fixed" class="header-style-1">
    <a class="header-1 open-left-sidebar" href="#"><i class="fa fa-navicon"></i></a>
    <a class="header-logo" href="/index.php"><img src="../images/logo-dark2.png" alt="img"></a>
</div>
    
            
<div class="all-elements">
    <div class="snap-drawers">
        <div class="snap-drawer snap-drawer-left">        
            <div class="sidebar-header-left">
                <a href="/index.php"><img src="../images/logo-dark2.png" alt="img"></a>
                <a class="close-sidebar" href="#"><i class="fa fa-times"></i></a>
            </div>      
        
            <?php 
			include_once '../templates/main_menu.php';
            include_once '../templates/user_menu.php';
			?>
			
			
			<p class="sidebar-divider">Админ-панель</p><div class="sidebar-menu">
			<a class="menu-item" href="/admin/settings.php">
                    <i class="fa fa-tachometer"></i>
                    <em>Настройки</em>
                    <i class="fa fa-circle"></i>
                </a>
				
				<div class="has-submenu">
				<a class="menu-item show-submenu" href="#">
                      <i class="fa fa-flag"></i>
                    <em>Контрольные пикеты</em>
					<strong>2</strong></a>
					<div class="submenu">
                        <a class="submenu-item" href="/admin/pickets.php">    <i class="fa fa-angle-right"></i><em>  Просмотр всех КП   </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item " href="/admin/pickets.php?action=addform">        <i class="fa fa-angle-right"></i><em>  Добавление КП   </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>
				
				<div class="has-submenu">
				<a class="menu-item show-submenu submenu-active" href="#">
                      <i class="fa fa-trophy"></i>
                    <em>Турнирная таблица</em>
					<strong>2</strong></a>
					<div class="submenu submenu-active">
                        <a class="submenu-item" href="/admin/table.php">    <i class="fa fa-angle-right"></i><em> Малая таблица   </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item submenu-item-active " href="/admin/leaderboard.php">        <i class="fa fa-angle-right"></i><em>  Расширенная таблица   </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>
				
				
				<div class="has-submenu">
				<a class="menu-item show-submenu" href="#">
                      <i class="fa fa-users"></i>
                    <em>Команды</em>
					<strong>2</strong></a>
					<div class="submenu">
                        <a class="submenu-item" href="/admin/teams.php">    <i class="fa fa-angle-right"></i><em>  Просмотр команд   </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="/admin/register_team.php">   <i class="fa fa-angle-right"></i><em>  Создать новую   </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>
				
				<div class="has-submenu">
				<a class="menu-item show-submenu" href="#">
                      <i class="fa fa-user-secret"></i>
                    <em>Администрация</em>
					<strong>2</strong></a>
					<div class="submenu">
                        <a class="submenu-item" href="/admin/admin_list.php">    <i class="fa fa-angle-right"></i><em> Список админов  </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item " href="/admin/register_admin.php">        <i class="fa fa-angle-right"></i><em>  Добавить админа  </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>
								
				<a class="menu-item" href="/admin/logout.php?logout_admin">
                    <i class="fa fa-sign-out"></i>
                    <em>Выйти из админ-центра</em>
                    <i class="fa fa-circle"></i>
                </a>
			</div>
			
			<?php 
			include_once '../templates/sponsors.php'; ?>
                       
            <p class="sidebar-footer">Copyright 2015. Все права защищены</p>
            
        </div>
                
        
        
        <div id="content" class="snap-content">
		<div class="content">
            <div class="header-clear-large"></div>
            <!--Page content goes here, fixed elements go above the all elements class-->  
					<div class="container-fullscreen heading-style-3 bg-5">
                    <h3 class="heading-title">Турнирная таблица</h3>
                    <em class="heading-subtitle">Результаты прохождения гонки</em>
                    <div class="overlay bg-black"></div>
                </div>
            <div class="heading-style-1 container half-bottom">
                    <a href="#"><i class="fa fa-refresh fa-trophy"></i></a>
                    <h4>Расширенная таблица</h4>
                    <div class="heading-block bg-red-dark"></div>
                    <div class="heading-decoration bg-red-dark"></div>
                </div>
			<div id="content-1">
			<?php 
				echo '<table id="myTable" cellspacing=\'0\' class="table tablesorter">';
				echo '<thead><tr><th class="table-title">Команда</th><th class="table-title">Количество<br>пройд. КП</th><th class="table-title">Начало гонки</th>';
								
				$res2 = mysql_query("SELECT * FROM checkpoints"); 
				while($pickets = mysql_fetch_array($res2))
				{
					echo '<th>КП'.$pickets['id'].'</th>';
				}
				
				echo '<th class="table-title">Конец гонки</th><th class="table-title">Итоговое время</th></thead><tbody>';
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
</div>
			
			
			
			<!--	<div id ="responsecontainer"></div>
		  End of entire page content-->
			</div>
        </div>
    </div>  
    <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Наверх</a>
</div>
    <script src="../scripts/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
	$(window).load(function(){
				
				$("#content-1").mCustomScrollbar({
					axis:"x",
					theme:"inset-3-dark",
					advanced:{
						autoExpandHorizontalScroll:true
					}
				});
	})(jQuery);
	</script>
</body>
<?php } ?>





























