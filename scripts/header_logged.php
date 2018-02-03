<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	$menu_race.='ВЕРНУТЬСЯ В ГОНКУ';
}
else
{
	$menu_race.='ГОНКА';
}

if(isset($_SESSION['admin_id'])!="")
{
	$menu_admin.='<li><a href="/admin/index.php"><font color=\'#009EE5\'> АДМИН-ЦЕНТР </font></a></li>';
}

?>