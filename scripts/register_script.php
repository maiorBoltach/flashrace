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
	if (isset($_GET['send']) && $_GET['send'] == 'success') $message.= '<p><div style =\'color:#1b9000\'>Успешно зарегестрирован</div></p>';
	else if (isset($_GET['send']) && $_GET['send'] == 'error') $message.= '<p><div style =\'color:#f00\'>Неизвестная ошибка</div></p>';
	else if (isset($_GET['send']) && $_GET['send'] == 'exist') $message.= '<p><div style =\'color:#f00\'>Такая команда уже существует</div></p>';
?>