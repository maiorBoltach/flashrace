<?php
					$res = mysql_query("SELECT * FROM users LEFT JOIN race ON users.user_id = race.user_id LEFT JOIN checkpoints ON race.actual_id = checkpoints.id"); 
					
					echo '<div id="content-1"><table cellspacing=\'0\' class="table">
					<thead><tr><th class="table-title">ID</th><th class="table-title">Название команды</th><th class="table-title">Статус</th>
					<th class="table-title">Начальный<br>КП</th><th class="table-title">Текущий<br>КП</th><th colspan="2"></th></tr></thead><tbody>';
					
					while ( $team = mysql_fetch_array( $res ) ) 
					{ 
						echo '<tr>'; 
						echo '<td>'.$team['user_id'].'</td>'; 
						echo '<td class="table-sub-title">'.$team['user_name'].'</td>'; 
						if($team['status'] == NULL) echo '<td>Зарегистрирована</td>'; 
						else if($team['status'] == -1) echo '<td><font color="#001eff">На старте</font></td>';
						else if($team['status'] == 0) echo '<td><font color="#ccb300">На гонке</font></td>';
						else if($team['status'] == 1) echo '<td><font color="green">Финишировала</font></td>';
						else echo '<td><font color="red">Неизвестно</font></td>';
						echo '<td>'.$team['begin_id'].'</td>'; 
						if($team['begin_id'] == $team['actual_id'] && $team['status'] == 1) echo '<td>-</td>'; 
						else echo '<td>'.$team['actual_id'].'</td>'; 
						echo '<td><a href="/admin/team_edit.php?team=crew&id='.$team['user_id'].'"><i class="fa fa-pencil"></i></a></td>'; 
						echo '<td><a href="/admin/team_edit.php?team=delete&id='.$team['user_id'].'"><i class="fa fa-trash"></a></td>'; 
						echo '</tr>'; 
					}
					echo '</tbody></table></div>';
					?>