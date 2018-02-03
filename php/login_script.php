<?php
session_start();

if(isset($_SESSION['user'])!="")
{
	header("Location: team.php");
}

if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	
	$email = trim($email);
	$upass = trim($upass);
	
	$res=mysql_query("SELECT user_id, user_name, user_pass FROM users WHERE user_email='$email'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['user_pass']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: team.php");
	}
	else
	{
		header('Location: login.php?send=error');
		die;
	}
}
	if (isset($_GET['send']) && $_GET['send'] == 'error') $message.= '<div class="static-notification bg-red-dark tap-dismiss"><p><i class="fa fa-times"></i>Неправильный логин и (или) пароль<br>В случае повторных проблем,<br>обратитесь к организаторам.</p></div>';
?>