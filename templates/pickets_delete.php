<?php 
session_start();

include '../php/config.inc.php';
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
    
<title><?php echo $PRETITLE; ?> | Редактирование контрольного пикета</title>

<link href="../styles/style.css"           rel="stylesheet" type="text/css">
<link href="../styles/framework.css"       rel="stylesheet" type="text/css">
<link href="../styles/font-awesome.css"    rel="stylesheet" type="text/css">
<link href="../styles/animate.css"         rel="stylesheet" type="text/css">

<script type="text/javascript" src="../scripts/jquery.js"></script>
<script type="text/javascript" src="../scripts/jqueryui.js"></script>
<script type="text/javascript" src="../scripts/framework-plugins.js"></script>
<script type="text/javascript" src="../scripts/custom.js"></script>
</head>

<body class="left-sidebar"> 

<?php include_once '../templates/preloader.php'; ?>
    
<div class="gallery-fix"></div> <!-- Important for all pages that have galleries or portfolios -->
    
<div id="header-fixed" class="header-style-1">
    <a class="header-1 open-left-sidebar" href="#"><i class="fa fa-navicon"></i></a>
    <a class="header-logo" href="#"><img src="../images/logo-dark2.png" alt="img"></a>
</div>
    
            
<div class="all-elements">
    <div class="snap-drawers">
        <div class="snap-drawer snap-drawer-left">        
            <div class="sidebar-header-left">
                <a href="#"><img src="../images/logo-dark2.png" alt="img"></a>
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
				<a class="menu-item show-submenu menu-item-active" href="#">
                      <i class="fa fa-flag"></i>
                    <em>Контрольные пикеты</em>
					<strong>2</strong></a>
					<div class="submenu submenu-active">
                        <a class="submenu-item submenu-item-active" href="/admin/pickets.php">    <i class="fa fa-angle-right"></i><em>  Просмотр всех КП   </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item " href="/admin/pickets.php?action=addform">        <i class="fa fa-angle-right"></i><em>  Добавление КП   </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>
				
				<div class="has-submenu">
				<a class="menu-item show-submenu" href="#">
                      <i class="fa fa-trophy"></i>
                    <em>Турнирная таблица</em>
					<strong>2</strong></a>
					<div class="submenu">
                        <a class="submenu-item" href="/admin/table.php">    <i class="fa fa-angle-right"></i><em> Малая таблица   </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item " href="/admin/leaderboard.php">        <i class="fa fa-angle-right"></i><em>  Расширенная таблица   </em><i class="fa fa-circle"></i></a>
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
                    <h3 class="heading-title">Контрольные пикеты</h3>
                    <em class="heading-subtitle">Создание и редактирование точек, изменение кодов</em>
                    <div class="overlay bg-black"></div>
                </div>
				
				 <div class="heading-style-1 container half-bottom">
                    <a href="#"><i class="fa fa-refresh fa-flag"></i></a>
                    <h4>Удаление КП</h4>
                    <div class="heading-block bg-red-dark"></div>
                    <div class="heading-decoration bg-red-dark"></div>
                </div>

				 
				<center><h4>Удалить КП №<?php echo $_GET['id'] ?>?</h4>
                            <p> Удаление необратимо. Восстановить КП, а также её данные будет невозможно!</p></center>
				 <div class="container">
				 <div class="one-third-responsive full-bottom"></div>
				 <div class="decoration hide-if-responsive"></div>
				<div class="one-third-responsive full-bottom">
				
						
				
			<?php
					echo '<form name="delete_pic" action="'.$_SERVER['PHP_SELF'].'?action=delete_pic&id='.$_GET['id'].'" method="POST">'; 
					echo '<input type="submit" class="buttonWrap button button-red contactSubmitButton" value="Удалить"/>';
					echo '<input type="submit" onClick="history.back();" class="buttonWrap button button-grey contactSubmitButton" id="contactSubmitButton" value="Отменить" data-formId="contactForm"/>';
					echo '</form>';
						?>
						</div></div>

			
			
            <!-- End of entire page content-->
			</div>
        </div>
    </div>  
    <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Наверх</a>
</div>
    
 
    
</body>
<?php } ?>





























