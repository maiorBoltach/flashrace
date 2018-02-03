
<script>	
// для сортировки
	$(document).ready(function() 
    { 
        $("#myTable").tablesorter(sortList: [[4,0],[7,0]] ); 
    } 
); 
</script>  
<?php
				include_once '../php/config.inc.php';
				$res = mysql_query("SELECT * FROM users LEFT JOIN race ON users.user_id = race.user_id LEFT JOIN checkpoints ON race.actual_id = checkpoints.id ORDER BY kol_left_id DESC"); 
				echo '<div id="content-1"><table id="myTable" cellspacing=\'0\' class="table tablesorter"><thead>';
				echo '<tr><th class="table-title">Команда</th><th class="table-title">Начало<br>гонки</th><th class="table-title">Конец<br>гонки</th><th class="table-title">Актуальный<br>КП</th>
				<th class="table-title">Пройденное<br>кол-во КП</th><th class="table-title">Штраф</th><th class="table-title">Бонус</th><th class="table-title">Итоговое<br>время</th><tr></thead><tbody>';
					
					while ( $team = mysql_fetch_array( $res ) ) 
					{ 
					// считаем интервал между концом и началом
					$begin = new DateTime($team['begin'], $database);
					$begin->setTimezone($client);
					$end = new DateTime($team['end'], $database);
					$end->setTimezone($client);
					
					
					// считаем сумму штрафных минут
					$res1 = mysql_query("SELECT MAX(id) AS id FROM checkpoints"); 
					$item = mysql_fetch_assoc( $res1 );
					
					$fine_all = date("00:00:00");
					for($i = 1; $i<=$item[id]; $i++ )
					{
						if($team['fine'.$i] != NULL)
						{
							$time2 = $team['fine'.$i];
							$secs = strtotime($time2) - strtotime("00:00:00"); // это просто время
							$fine_all = date("H:i:s",strtotime($fine_all)+$secs);						// это дата (сегодня) + время
						}
						
					}	
					
					// и бонусных
					$bonus_all = date("00:00:00");
					for($i = 1; $i<=$item[id]; $i++ )
					{
						if($team['bonus'.$i] != NULL)
						{
							$time2 = $team['bonus'.$i];
							$secs = strtotime($time2) - strtotime("00:00:00");
							$bonus_all = date("H:i:s",strtotime($bonus_all)+$secs);
						}
						
					}	
					
					
					// прибавляем штраф и бонус к финишу
							$end1 = date_timestamp_get($end);
							$end1 = date("H:i:s",$end1);
							$secs = strtotime($end1) - strtotime("00:00:00"); // это просто время
							$pre_full_end = date("H:i:s",strtotime($fine_all)+$secs);	
							
							
							$secs = strtotime($bonus_all) - strtotime("00:00:00"); // это просто время
							$full_end = date("H:i:s",strtotime($pre_full_end)-$secs);
					
					
					$date = new DateTime($full_end);
					$interval = $begin->diff($date);
				
						echo '<tr>'; 
						echo '<th class="n"><a href="/admin/team_edit.php?team=show&id='.$team['user_id'].'" class="active">'.$team['user_name'].'</a></th><td>'; 
						if($team['begin'] == NULL ) echo '-';
						else echo $begin->format('d-m-Y H:i:s');
						echo '</td><td>';
						if($team['end'] == NULL ) echo '-';
						else echo $end->format('d-m-Y H:i:s');
						echo '</td>';
						if($team['begin_id'] == $team['actual_id'] && $team['status'] == 1) echo '<td>-</td>'; 
						else echo '<td>'.$team['actual_id'].'</td>'; 
						echo '<td>'.$team['kol_left_id'].' / '.$item[id].'</td>';
						echo '<td><font color="red">'.$fine_all.'</font></td>'; 
						echo '<td><font color="green">'.$bonus_all.'</font></td>';
						echo '<td>'.$interval->format('%H:%I:%S').'</td>'; 
						echo '</tr>'; 
					} 
					echo '</tbody></table></div>';
			
					?>