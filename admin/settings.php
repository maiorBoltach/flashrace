<?php 
session_start();

include_once '../php/config.inc.php';
include_once '../php/header_logged.php';
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
	if (isset($_GET['send']) && $_GET['send'] == 'success_reset') $message.= '<div class="static-notification bg-green-dark tap-dismiss"><p><i class="fa fa-times"></i>Статистика команд успешно сброшена.</p></div>';
	else if (isset($_GET['send']) && $_GET['send'] == 'error_reset') $message.= '<div class="static-notification bg-red-dark tap-dismiss"><p><i class="fa fa-times"></i>ОШИБКА. Сбросить статистику команд не удалось. Попробуйте снова.</p></div>';
	else if (isset($_GET['send']) && $_GET['send'] == 'success_start_again') $message.= '<div class="static-notification bg-green-dark tap-dismiss"><p><i class="fa fa-times"></i>Гонка успешно остановлена.</p></div>';
	else if (isset($_GET['send']) && $_GET['send'] == 'error_start_again') $message.= '<div class="static-notification bg-red-dark tap-dismiss"><p><i class="fa fa-times"></i>ОШИБКА. Остановить гонку не получилось. Попробуйте снова.</p></div>';
	else if (isset($_GET['send']) && $_GET['send'] == 'success_start') $message.= '<div class="static-notification bg-green-dark tap-dismiss"><p><i class="fa fa-times"></i>Гонка успешно стартовала. Удачи командам!</p></div>';
	else if (isset($_GET['send']) && $_GET['send'] == 'error_start') $message.= '<div class="static-notification bg-red-dark tap-dismiss"><p><i class="fa fa-times"></i>ОШИБКА. Запустить гонку не получилось. Попробуйте снова.</p></div>';
 ?>

<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="shortcut icon" href="../images/splash/favicon.ico" type="image/x-icon" /> 
    
<title><?php echo $PRETITLE; ?> | Настройки гонки</title>

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
				<a class="menu-item menu-item-active" href="/admin/settings.php">
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
                    <h3 class="heading-title">Настройки гонки</h3>
                    <em class="heading-subtitle">Старт, окончание, удаление статистики</em>
                    <div class="overlay bg-black"></div>
                </div>
					<div class="container" align="center">
						<?php echo $message; ?>
						<form action="" method="post">
							<input type="submit" class="button button-red"  value="УДАЛИТЬ ВСЮ СТАТИСТИКУ" name = "reset" />
							</form>
						<form action="" method="post"> <?php
							$query2 = mysql_query("SELECT status FROM race WHERE user_id=1");
							$res = mysql_fetch_assoc($query2);
							if($res['status'] == NULL) echo "<input type=\"submit\" class=\"button button-green\"  value=\"ЗАПУСТИТЬ ГОНКУ\" name = \"start\"/>";
							else if($res['status'] != NULL) { echo "<input type=\"submit\" class=\"button button-red\"  value=\"ОТКАТИТЬ ГОНКУ НА СТАРТ\" name = \"start_again\"/>"; }
							?>
					</form>
					</div>
					
					
			<div class="one-half-responsive">
			<div class="container">
				<h3>Текущие ошибки (необходимо пофиксить) и влажные мечты</h3>
				<ul>
				<li><strike>Пофиксить несдвигаемые таблицы в мобильных браузерах</strike></li>
				<li><strike>Удаление КП</strike></li>
				<li><strike>В командной статитике исправить время текущего КП</strike></li>
				<li>Итоговая таблица для участников (отсутствует)</li>
				<li>Чат между админом и участником (доделать связь админ - участник)</li>
				<li><strike>Вкладка настроек (не работают кнопки начала гонки, сброса статистики участников)</strike></li>
				<li><strike>Редактирование ФИО и факультетов участников</strike></li>
				<li><strike><strong>Переделать способ аутентификации</strong></strike></li>
				<li>Добавить всплывающие уведомления в турнирной таблице у админов</li>
				<li>Пофиксить автообновение большой таблицы результатов каждые 10 секунд</li>
				<li>Переделать определение часового пояса БД и пользователя</li>
				</ul>
				</div>
			
			</div>
				
			  <div class="decoration hide-if-responsive"></div>
			 <div class="one-half-responsive last-column">
                    <div class="responsive-video full-bottom">
					<iframe src="//coub.com/embed/6o5z9?muted=true&autostart=false&originalSize=false&startWithHD=false" allowfullscreen="true" frameborder="0" width="480" height="270"></iframe><script async src="//c-cdn.coub.com/embed-runner.js"></script>
                   <!--     <iframe src="https://www.youtube.com/embed/gJscrxxl_Bg"></iframe> -->
                    </div> 
                </div>
			
			
			
            <!-- End of entire page content-->
			</div>
        </div>
    </div>  
    <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Наверх</a>
</div>
    
 
    
</body>
<?php } ?>





























