<?php
					$res = mysql_query("SELECT * FROM users LEFT JOIN race ON users.user_id = race.user_id LEFT JOIN checkpoints ON race.actual_id = checkpoints.id"); 
					echo '<table><tr><th>ID</th><th>Название команды</th><th>Статус</th><th>Начальный КП</th><th>Текущий КП</th><th></th></tr>';
					
					while ( $team = mysql_fetch_array( $res ) ) 
					{ 
						echo '<tr>'; 
						echo '<td>'.$team['user_id'].'</td>'; 
						echo '<td>'.$team['user_name'].'</td>'; 
						if($team['status'] == NULL) echo '<td>Зарегистрирована</td>'; 
						else if($team['status'] == -1) echo '<td><font color="#001eff">На старте</font></td>';
						else if($team['status'] == 0) echo '<td><font color="#ccb300">На гонке</font></td>';
						else if($team['status'] == 1) echo '<td><font color="green">Финишировала</font></td>';
						else echo '<td><font color="red">Неизвестно</font></td>';
						echo '<td>'.$team['begin_id'].'</td>'; 
						if($team['begin_id'] == $team['actual_id'] && $team['status'] == 1) echo '<td>-</td>'; 
						else echo '<td>'.$team['actual_id'].'</td>'; 
						echo '<td><a href="/admin/team_edit.php?team=show&id='.$team['user_id'].'"><img src="../images/edit.png" width="20" height="20" alt="Редактировать"></a>'; 
						echo '<a href="/admin/team_edit.php?team=delete&id='.$team['user_id'].'"><img src="../images/delete.png" width="20" height="20" alt="Удалить"></a></td>'; 
						echo '</tr>'; 
					}
					echo '</table>';
					?>