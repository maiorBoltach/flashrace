<?php	
echo '<p class="sidebar-divider">Гонка</p><div class="sidebar-menu">';
	if($auth_user == 1)
			{
				echo '
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
				<a class="menu-item" href="/team_stats.php">
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
                </a>';
			}
			else if($auth_user == 0)
			{
				echo '
				<a class="menu-item" href="/login.php">
                    <i class="fa fa-sign-in"></i>
                    <em>Авторизация</em>
                    <i class="fa fa-circle"></i>
                </a>';
			}
		echo '</div>';
?>