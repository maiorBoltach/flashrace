<?php
include '../config.inc.php';
$query = 'SELECT * FROM users LEFT JOIN race ON users.user_id = race.user_id WHERE users.user_id='.$_GET['id']; 
$res = mysql_query( $query ); 
$team = mysql_fetch_array($res);

?>
<h2>Команда "<?php echo $team['user_name']; ?>" (ID: <?php echo $team['user_id']; ?>)</h2>
<div align="right"><b>STATUS: 
<?php if($team['status'] == NULL) echo 'Зарегистрирована'; 
	else if($team['status'] == -1) echo '<font color="#001eff">На старте</font>';
	else if($team['status'] == 0) echo '<font color="#ccb300">На гонке</font>';
	else if($team['status'] == 1) echo '<font color="green">Финишировала</font>';
	else echo '<font color="red">Неизвестно</font>'; ?></b>
		<?php
				echo '
				<a href="/admin/team_edit.php?team=delete&id='.$team['user_id'].'"><img src="../images/delete.png" width="20" height="20" alt="Удалить"></a>'
		?>
