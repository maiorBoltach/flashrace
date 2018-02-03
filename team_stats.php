<?php session_start();
include_once 'php/config.inc.php';
include_once 'php/header_logged.php';
if(!isset($_SESSION['user']))
{
	header("Location: login.php");
}
else
{
	$query1 = 'SELECT * FROM users LEFT JOIN race ON users.user_id = race.user_id LEFT JOIN checkpoints ON race.actual_id = checkpoints.id WHERE users.user_id='.$_SESSION['user']; 
	$res1 = mysql_query( $query1 ) or die(mysql_error()); 
	$team = mysql_fetch_array($res1);
?>

<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="shortcut icon" href="images/splash/favicon.ico" type="image/x-icon" /> 
    
<title><?php echo $PRETITLE; ?> | Статистика команды</title>

<link href="styles/style.css"           rel="stylesheet" type="text/css">
<link href="styles/framework.css"       rel="stylesheet" type="text/css">
<link href="styles/font-awesome.css"    rel="stylesheet" type="text/css">
<link href="styles/animate.css"         rel="stylesheet" type="text/css">
<link rel="stylesheet" href="styles/jquery.mCustomScrollbar.css">
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jqueryui.js"></script>
<script type="text/javascript" src="scripts/framework-plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</head>

<body class="left-sidebar"> 

<?php include_once 'templates/preloader.php'; ?>
    
<div class="gallery-fix"></div> <!-- Important for all pages that have galleries or portfolios -->
    
<div id="header-fixed" class="header-style-1">
    <a class="header-1 open-left-sidebar" href="#"><i class="fa fa-navicon"></i></a>
    <a class="header-logo" href="/index.php"><img src="images/logo-dark2.png" alt="img"></a>
</div>
    
            
<div class="all-elements">
    <div class="snap-drawers">
         <div class="snap-drawer snap-drawer-left">        
            <div class="sidebar-header-left">
                <a href="/index.php"><img src="images/logo-dark2.png" alt="img"></a>
                <a class="close-sidebar" href="#"><i class="fa fa-times"></i></a>
            </div>      
        
            <?php 
			include_once 'templates/main_menu.php';
			
			?>
            
			<p class="sidebar-divider">Гонка</p><div class="sidebar-menu">
							<a class="menu-item" href="/team.php">
                    <i class="fa fa-users"></i>
                    <em>Состав команды</em>
                    <i class="fa fa-circle"></i>
                </a>
				<a class="menu-item" href="/race.php">
                    <i class="fa fa-map-marker"></i>
                    <em>Текущее задание</em>
                    <i class="fa fa-circle"></i>
                </a>
				<a class="menu-item menu-item-active" href="/team_stats.php">
                    <i class="fa fa-file-o"></i>
                    <em>Статистика команды</em>
                    <i class="fa fa-circle"></i>
                </a>
				<a class="menu-item" href="/contact.php">
                    <i class="fa fa-comment-o"></i>
                    <em>Связаться с админами</em>
                    <i class="fa fa-circle"></i>
                </a>
				<a class="menu-item" href="/logout.php?logout">
                    <i class="fa fa-sign-out"></i>
                    <em>Выйти из профиля</em>
                    <i class="fa fa-circle"></i>
                </a>
				</div>
			<?php 
			
			include_once 'templates/admin_menu.php';
			include_once 'templates/sponsors.php'; ?>
                       
            <p class="sidebar-footer">Copyright 2015. Все права защищены</p>
            
        </div>     
        
        
        <div id="content" class="snap-content">
            <div class="content">
            <div class="header-clear-large"></div>
            <!--Page content goes here, fixed elements go above the all elements class-->
                
				<div class="container-fullscreen heading-style-3 bg-3">
                    <h3 class="heading-title">Команда "<?php echo $team['user_name']; ?>" (ID: <?php echo $team['user_id']; ?>)</h3>
                    <em class="heading-subtitle">Статус: 
					<?php
					if($team['status'] == NULL) echo 'Зарегистрирована'; 
					else if($team['status'] == -1) echo '<font color="#009dfd">На старте</font>';
					else if($team['status'] == 0) echo '<font color="#ffe000">На гонке</font>';
					else if($team['status'] == 1) echo '<font color="#00ff00">Финишировала</font>';
					else echo '<font color="red">Неизвестно</font>';?> </em>
                    <div class="overlay bg-black"></div>
                </div>
				
				
                <div class="heading-style-1 container half-bottom">
                    <a href="#"><i class="fa fa-file-o"></i></a>
                    <h4>Статистика команды</h4>
                    <div class="heading-block bg-red-dark"></div>
                    <div class="heading-decoration bg-red-dark"></div>
                </div>
                <div class="container">
					<?php 
					if($team['status']==1) include_once 'php/team_stats_script.php';
					else echo '<center><h3>Итоговая статистика команды пока недоступна.</h3><br>Для её просмотра вы должны окончить гонку.</center>';
					?>			
				</div>
                                
                <div class="decoration"></div>
                
                <?php include_once 'templates/footer.php'; ?>          
                
            <!-- End of entire page content-->
            </div> 
        </div>
    </div>  
    <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Наверх</a>
</div>
<script src="scripts/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
	$(window).load(function(){
				
				$("#content-1").mCustomScrollbar({
					axis:"x",
					theme:"inset-3-dark",
					advanced:{
						autoExpandHorizontalScroll:true
					}
				});
				$("#content-2").mCustomScrollbar({
					axis:"x",
					theme:"inset-3-dark",
					advanced:{
						autoExpandHorizontalScroll:true
					}
				});
	})(jQuery);
	</script>
</body>


<?php 
}
?>


























