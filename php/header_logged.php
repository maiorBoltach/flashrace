<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	$auth_user = 1;
}
else
{
	$auth_user = 0;
}

if(isset($_SESSION['admin_id'])!="")
{
	$auth_admin = 1;
}
else
{
	$auth_admin = 0;
}
?>