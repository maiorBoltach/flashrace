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
    
<title><?php echo $PRETITLE; ?> | Начисление штрафов и бонусов</title>

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
					<div class="submenu ">
                        <a class="submenu-item " href="/admin/teams.php">    <i class="fa fa-angle-right"></i><em>  Просмотр команд   </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="/admin/register_team.php">   <i class="fa fa-angle-right"></i><em>  Создать новую   </em><i class="fa fa-circle"></i></a>
                    </div>
                </div>
				
				<div class="has-submenu">
				<a class="menu-item show-submenu menu-item-active" href="#">
                      <i class="fa fa-user"></i>
                    <em>Текущая команда</em>
					<strong>6</strong></a>
					<div class="submenu submenu-active">
					<?php
						echo '<a class="submenu-item" href="/admin/team_edit.php?team=crew&id='.$_GET['id'].'">    <i class="fa fa-angle-right"></i><em>  Состав команды  </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="/admin/team_edit.php?team=show&id='.$_GET['id'].'">    <i class="fa fa-angle-right"></i><em>  Статистика команды  </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item " href="/admin/team_edit.php?team=fine&id='.$_GET['id'].'">        <i class="fa fa-angle-right"></i><em>  Бонусы и штрафы   </em><i class="fa fa-circle"></i></a>
						<a class="submenu-item  submenu-item-active" href="/admin/team_edit.php?team=settings&id='.$_GET['id'].'">    <i class="fa fa-angle-right"></i><em>  Настройки команды  </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="#">    <i class="fa fa-angle-right"></i><em>  Чат с командой  </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="/admin/team_edit.php?team=delete&id='.$_GET['id'].'">    <i class="fa fa-angle-right"></i><em>  Удалить команду  </em><i class="fa fa-circle"></i></a>';
						?>
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
					<?php include_once '../templates/team_header.php'; ?>
            
				<div class="heading-style-1 container half-bottom">
                    <a href="#"><i class="fa fa-user"></i></a>
                    <h4>Настройки команды</h4>
                    <div class="heading-block bg-red-dark"></div>
                    <div class="heading-decoration bg-red-dark"></div>
                </div>
				 
						 
				 <div class="container">
                    <ul class="tabs">
					<center>
                        <li class="tab-link active-tab" data-tab="tab-1">Члены команды</li>
                        <li class="tab-link" data-tab="tab-2">Начальный КП</li>
                        <li class="tab-link" data-tab="tab-3">Пароль</li>
                        <li class="tab-link" data-tab="tab-4">Логин и название</li>
						</center>
                    </ul>

                    <div id="tab-1" class="tab-content active-tab-content">
					<?php
						echo '<form name="update_crew" action="'.$_SERVER['PHP_SELF'].'?team=update_crew&id='.$_GET['id'].'" method="POST">';
						echo '<table cellspacing=\'0\' class="table">
						<thead><tr><th class="table-title">ФИО</th><th class="table-title">Факультет</th></tr></thead><tbody>
						<tr>
						<td><input class="text-field green-field" name="name1" onfocus="if (this.value==\'\') this.value = \'\'" onblur="if (this.value==\'\') this.value = \'\'" type="text" value="'.$team['name1'].'"></td>								
						<td><input class="text-field green-field" name="fac1" onfocus="if (this.value==\'\') this.value = \'\'" onblur="if (this.value==\'\') this.value = \'\'" type="text" value="'.$team['fac1'].'"></td>								
						</tr>
						<tr>
						<td><input class="text-field green-field" name="name2" onfocus="if (this.value==\'\') this.value = \'\'" onblur="if (this.value==\'\') this.value = \'\'" type="text" value="'.$team['name2'].'"></td>								
						<td><input class="text-field green-field" name="fac2" onfocus="if (this.value==\'\') this.value = \'\'" onblur="if (this.value==\'\') this.value = \'\'" type="text" value="'.$team['fac2'].'"></td>								
						</tr>
						<tr>
						<td><input class="text-field green-field" name="name3" onfocus="if (this.value==\'\') this.value = \'\'" onblur="if (this.value==\'\') this.value = \'\'" type="text" value="'.$team['name3'].'"></td>								
						<td><input class="text-field green-field" name="fac3" onfocus="if (this.value==\'\') this.value = \'\'" onblur="if (this.value==\'\') this.value = \'\'" type="text" value="'.$team['fac3'].'"></td>								
						</tr>
						<tr>
						<td><input class="text-field green-field" name="name4" onfocus="if (this.value==\'\') this.value = \'\'" onblur="if (this.value==\'\') this.value = \'\'" type="text" value="'.$team['name4'].'"></td>								
						<td><input class="text-field green-field" name="fac4" onfocus="if (this.value==\'\') this.value = \'\'" onblur="if (this.value==\'\') this.value = \'\'" type="text" value="'.$team['fac4'].'"></td>								
						</tr>
						<tr>
						<td><input class="text-field green-field" name="name5" onfocus="if (this.value==\'\') this.value = \'\'" onblur="if (this.value==\'\') this.value = \'\'" type="text" value="'.$team['name5'].'"></td>								
						<td><input class="text-field green-field" name="fac5" onfocus="if (this.value==\'\') this.value = \'\'" onblur="if (this.value==\'\') this.value = \'\'" type="text" value="'.$team['fac5'].'"></td>								
						</tr>
							</tbody>
							</table>
							
							';
							echo '<input type="submit" class="buttonWrap button button-orange contactSubmitButton" value="Сохранить"/>';
							echo '<input type="submit" onClick="history.back();" class="buttonWrap button button-grey contactSubmitButton" id="contactSubmitButton" value="Отменить" data-formId="contactForm"/>

							</form>';
							?>
						</div>
					
					
                    <div id="tab-2" class="tab-content">
                    <div class="container">
					<div class="one-third-responsive full-bottom"></div>
					<div class="decoration hide-if-responsive"></div>
					<div class="one-third-responsive full-bottom">
					
					<?php
					echo '<form name="begin" action="'.$_SERVER['PHP_SELF'].'?team=update_begin&id='.$_GET['id'].'" method="POST">'; 
					echo '<label class="field-title contactMessageTextarea" for="contactMessageTextarea">Номер начального КП: <span>(обязательно)</span></label>';
					echo '<input class="text-field green-field" name="num" onfocus="if (this.value==\'\') this.value = \'\'" onblur="if (this.value==\'\') this.value = \'\'" type="text" value="'.$team['begin_id'].'">';
		
					echo '<input type="submit" class="buttonWrap button button-orange contactSubmitButton" value="Сохранить"/>';
					echo '<input type="submit" onClick="history.back();" class="buttonWrap button button-grey contactSubmitButton" id="contactSubmitButton" value="Отменить" data-formId="contactForm"/>';
					echo '</form>'; 
						?>
					</div>
					</div>
					</div>
					
					
                    <div id="tab-3" class="tab-content">
                        <div class="container">
					<div class="one-third-responsive full-bottom"></div>
					<div class="decoration hide-if-responsive"></div>
					<div class="one-third-responsive full-bottom">
					
					<?php
					echo '<form name="update_pass" action="'.$_SERVER['PHP_SELF'].'?team=update_pass&id='.$_GET['id'].'" method="POST">'; 
					echo '<label class="field-title contactMessageTextarea" for="contactMessageTextarea">Новый пароль: <span>(обязательно)</span></label>';
					echo '<input class="text-field green-field" name="pass" onfocus="if (this.value==\'\') this.value = \'\'" onblur="if (this.value==\'\') this.value = \'\'" type="password" value="password">';
		
					echo '<input type="submit" class="buttonWrap button button-orange contactSubmitButton" value="Сохранить"/>';
					echo '<input type="submit" onClick="history.back();" class="buttonWrap button button-grey contactSubmitButton" id="contactSubmitButton" value="Отменить" data-formId="contactForm"/>';
					echo '</form>'; 
						?>
					</div>
					</div>
					</div>
					
					
                    <div id="tab-4" class="tab-content">
					<div class="container">
					<div class="one-third-responsive full-bottom"></div>
					<div class="decoration hide-if-responsive"></div>
					<div class="one-third-responsive full-bottom">
                        <?php
					echo '<form name="change_name" action="'.$_SERVER['PHP_SELF'].'?team=update_name&id='.$_GET['id'].'" method="POST">'; 
					echo '<label class="field-title contactMessageTextarea" for="contactMessageTextarea">Логин команды: <span>(обязательно)</span></label>';
					echo '<input class="text-field green-field" name="email" onfocus="if (this.value==\'\') this.value = \'\'" onblur="if (this.value==\'\') this.value = \'\'" type="text"  value="'.$team['user_email'].'">';
					
                    echo '<label class="field-title contactMessageTextarea" for="contactMessageTextarea">Название команды: <span>(обязательно)</span></label>';
					echo '<input class="text-field green-field" name="name" onfocus="if (this.value==\'\') this.value = \'\'" onblur="if (this.value==\'\') this.value = \'\'" type="text"  value="'.$team['user_name'].'">';
					
					echo '<input type="submit" class="buttonWrap button button-orange contactSubmitButton" value="Сохранить"/>';
					echo '<input type="submit" onClick="history.back();" class="buttonWrap button button-grey contactSubmitButton" id="contactSubmitButton" value="Отменить" data-formId="contactForm"/>';
					echo '</form>'; 
						?></div>
					</div>
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





























