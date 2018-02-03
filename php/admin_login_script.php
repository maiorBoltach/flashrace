<?php
session_start();

if(isset($_SESSION['admin_id'])!="")
{
	header("Location: main.php");
}

if(isset($_POST['btn-login-admin']))
{
	$login = mysql_real_escape_string($_POST['login_admin']);
	$upass = mysql_real_escape_string($_POST['login_pass']);
	
	$login = trim($login);
	$upass = trim($upass);
	
	$res=mysql_query("SELECT admin_id, admin_login, admin_pass FROM admin WHERE admin_login='$login'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['admin_pass']==md5($upass))
	{
		$_SESSION['admin_id'] = $row['admin_id'];
		header("Location: main.php");
	}
	else
	{
		header('Location: /admin/index.php?send=error');
		die;
	}
}
	if (isset($_GET['send']) && $_GET['send'] == 'error') $message.= '<div class="static-notification bg-red-dark tap-dismiss"><p><i class="fa fa-times"></i>Неправильный логин и (или) пароль<br>Возможно, вы авторизируетесь не там.</p></div>';

?>