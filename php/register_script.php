<?php
if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	
	$uname = trim($uname);
	$email = trim($email);
	$upass = trim($upass);
	
	// email exist or not
	$query = "SELECT user_email FROM users WHERE user_email='$email'";
	

	$result = mysql_query($query);
	$count = mysql_num_rows($result); // if email not found then register
	
	if($count == 0){
		if(mysql_query("INSERT INTO users(user_name,user_email,user_pass) VALUES('$uname','$email','$upass')") &&  
		mysql_query("INSERT INTO race(user_id) SELECT user_id FROM users WHERE user_email='$email'"))
		{
				header('Location: /admin/register_team.php?send=success');
				die;			
		}
		else
		{
			header('Location: /admin/register_team.php?send=error');
			die;
		}		
	}
	else{
			header('Location: /admin/register_team.php?send=exist');
			die;
	}
}
	if (isset($_GET['send']) && $_GET['send'] == 'success') $message.= '<div class="static-notification bg-green-dark tap-dismiss"><p><i class="fa fa-check"></i>Успешно зарегестрирован</p></div>     ';
	else if (isset($_GET['send']) && $_GET['send'] == 'error') $message.= '<div class="static-notification bg-red-dark tap-dismiss"><p><i class="fa fa-times"></i>Неизвестная ошибка</p></div>';
	else if (isset($_GET['send']) && $_GET['send'] == 'exist') $message.= ' <div class="static-notification bg-orange-dark tap-dismiss"><p><i class="fa fa-exclamation"></i>Такая команда уже существует</p></div>';
?>