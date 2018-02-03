<?php
session_start();

if(!isset($_SESSION['admin_id']))
{
	header("Location: /admin/index.php");
}
else if(isset($_SESSION['admin_id'])!="")
{
	header("Location: main.php");
}

if(isset($_GET['logout_admin']))
{
	unset($_SESSION['admin_id']);
	header("Location: /admin/index.php");
}
?>