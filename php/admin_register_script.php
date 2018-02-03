<?php
if(isset($_POST['btn-signup-admin']))
{
	$email = mysql_real_escape_string($_POST['admin_email']);
	$upass = md5(mysql_real_escape_string($_POST['admin_pass']));
	
	$email = trim($email);
	$upass = trim($upass);
	
	// email exist or not
	$query = "SELECT admin_login FROM admin WHERE admin_login='$email'";
	

	$result = mysql_query($query);
	$count = mysql_num_rows($result); // if email not found then register
	
	if($count == 0){
		if(mysql_query("INSERT INTO admin(admin_login,admin_pass) VALUES('$email','$upass')"))
		{
				header('Location: /admin/register_admin.php?send=success');
				die;			
		}
		else
		{
			header('Location: /admin/register_admin.php?send=error');
			die;
		}		
	}
	else{
			header('Location: /admin/register_admin.php?send=exist');
			die;
	}
}
	if (isset($_GET['send']) && $_GET['send'] == 'success') $message.= '<div class="static-notification bg-green-dark tap-dismiss"><p><i class="fa fa-check"></i>Успешно зарегестрирован</p></div>     ';
	else if (isset($_GET['send']) && $_GET['send'] == 'error') $message.= '<div class="static-notification bg-red-dark tap-dismiss"><p><i class="fa fa-times"></i>Неизвестная ошибка</p></div>';
	else if (isset($_GET['send']) && $_GET['send'] == 'exist') $message.= ' <div class="static-notification bg-orange-dark tap-dismiss"><p><i class="fa fa-exclamation"></i>Такой админ уже существует</p></div>';
?>