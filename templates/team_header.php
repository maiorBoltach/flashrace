<?php
include '../php/config.inc.php';
$query = 'SELECT * FROM users LEFT JOIN race ON users.user_id = race.user_id WHERE users.user_id='.$_GET['id']; 
$res = mysql_query( $query ); 
$team = mysql_fetch_array($res);

?>


<div class="container-fullscreen heading-style-3 bg-3">
<h3 class="heading-title">Команда "<?php echo $team['user_name']; ?>" (ID: <?php echo $team['user_id']; ?>)</h3>
<em class="heading-subtitle">Статус: 
					<?php
					if($team['status'] == NULL) echo 'Зарегистрирована'; 
					else if($team['status'] == -1) echo '<font color="#009dfd">На старте</font>';
					else if($team['status'] == 0) echo '<font color="#ffe000">На гонке</font>';
					else if($team['status'] == 1) echo '<font color="#00ff00">Финишировала</font>';
					else echo '<font color="red">Неизвестно</font>';?> </em>
<div class="overlay bg-black"></div>
					</div>