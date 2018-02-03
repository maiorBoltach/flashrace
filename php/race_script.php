<?php 
$res=mysql_query("SELECT * FROM users LEFT JOIN race ON users.user_id = race.user_id LEFT JOIN checkpoints ON race.actual_id = checkpoints.id WHERE race.user_id =".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

if (isset($_POST['begin_button'])) {
							$begin = $userRow['begin_id'];
							mysql_query("UPDATE race SET status=0, begin_id=$begin, actual_id = $begin, begin=now() WHERE user_id =".$_SESSION['user']);
							header('Location: ' . $_SERVER['REQUEST_URI']);
							die();
							}
							
	
		
if (isset($_POST['answer_button'])) {
	$answer = mysql_real_escape_string($_POST['code_answer']);
	$answer = trim($answer);
	
	if($userRow['code'] == $answer)
	{
		$query = mysql_query( "SELECT MAX(id) AS id FROM checkpoints" ); 
		$item = mysql_fetch_assoc($query); 
		$max = $item[id];	
		$time = mysql_query("UPDATE race SET pic".$userRow['actual_id']."= now() WHERE user_id =".$_SESSION['user']);
		
		if($userRow['actual_id'] == $max) $actual_id = 1;
		else $actual_id = $userRow['actual_id']+1;
		$kol = $userRow['kol_left_id'];
		$kol+=1;
		
		if($kol == $max) mysql_query("UPDATE race SET kol_left_id=$kol, actual_id = $actual_id, end=now(), status = 1 WHERE user_id =".$_SESSION['user']);
		else mysql_query("UPDATE race SET kol_left_id=$kol, actual_id = $actual_id WHERE user_id =".$_SESSION['user']);
		header('Location: ' . $_SERVER['REQUEST_URI']);
		die();
	}
	else
	{
		?>
        <script>alert('Код введён неправильно. Попробуйте снова.');</script>
        <?php
	}
}
?>