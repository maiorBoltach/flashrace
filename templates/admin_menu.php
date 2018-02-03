<?php	
			echo '<p class="sidebar-divider">Админ-панель</p><div class="sidebar-menu">';
			if($auth_admin == 1)
			{
				echo '
				<a class="menu-item" href="/admin/main.php">
                    <i class="fa fa-exclamation"></i>
                    <em>F.A.Q.</em>
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
				
				<a class="menu-item" href="/admin/settings.php">
                    <i class="fa fa-tachometer"></i>
                    <em>Настройки</em>
                    <i class="fa fa-circle"></i>
                </a>
				
				<a class="menu-item" href="/admin/logout.php?logout_admin">
                    <i class="fa fa-sign-out"></i>
                    <em>Выйти из админ-центра</em>
                    <i class="fa fa-circle"></i>
                </a>';
			}
			else if($auth_admin == 0)
			{
				echo '
				<a class="menu-item" href="/admin/">
                    <i class="fa fa-sign-in"></i>
                    <em>Авторизация</em>
                    <i class="fa fa-circle"></i>
                </a>';
			}
			echo '</div>'; 
?>