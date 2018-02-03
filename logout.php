<?php
session_start();

if(!isset($_SESSION['user']))
{
	header("Location: login.php");
}
else if(isset($_SESSION['user'])!="")
{
	header("Location: race.php");
}

if(isset($_GET['logout']))
{
	unset($_SESSION['user']);
	header("Location: login.php");
}
?>