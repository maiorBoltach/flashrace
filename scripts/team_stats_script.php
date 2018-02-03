<?php 
echo '<table><tr><th>Нач.<br>КП</th><th>Тек.<br>КП</th><th>Пройд.</th><th>Старт</th><th>Финиш</th><th>Общий<br>бонус</th><th>Общий<br>штраф</th><th>Итоговое<br>время</th></tr>';

					
					// считаем интервал между концом и началом
					$begin = new DateTime($team['begin'], $database);
					$begin->setTimezone($client);
					$end = new DateTime($team['end'], $database);
					$end->setTimezone($client);
					
					
					// считаем сумму штрафных минут
					$res = mysql_query("SELECT MAX(id) AS id FROM checkpoints"); 
					$item = mysql_fetch_assoc( $res );
					
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
					
					// выводим таблицу
					echo '<tr><td>'.$team['begin_id'].'</td>';
					if($team['begin_id'] == $team['actual_id'] && $team['status'] == 1) echo '<td>-</td>';
					else echo '<td>'.$team['actual_id'].'</td>'; 
					echo '<td>'.$team['kol_left_id'].' / '.$item[id].'</td><td>';
					if($team['begin'] == NULL ) echo '-';
					else echo $begin->format('d-m-Y H:i:s');
					echo '</td><td>';
					if($team['end'] == NULL ) echo '-';
					else echo $end->format('d-m-Y H:i:s');
					echo '</td><td><font color="green">'.$bonus_all.'</font></td>';
					echo '</td><td><font color="red">'.$fine_all.'</font></td>';
					if($team['end'] == NULL ) echo '<td>-</td><tr>';
						else echo '<td>'.$interval->format('%H:%I:%S').'</td><tr>'; ?>
					</table>
					
					<table>
					<tr><th>ID<br>КП</th><th>Название</th><th>Время засчитывания</th><th>Время прохождения</th><th>Бонус</th><th>Штраф</th><tr>
					<?php 
					$res = mysql_query("SELECT * FROM checkpoints"); 
					
						while($pickets = mysql_fetch_array($res))
						{
							// считаем разницу между КП
							//начальное время
							if($pickets['id']==$team['begin_id']) $kp1 = new DateTime($team['begin'], $database);
							else 
							{
								if($pickets['id'] == 1) $begin_pic = $item[id];
								else $begin_pic = $pickets['id'] - 1;
								if($team['pic'.$begin_pic]==NULL) $kp1 = new DateTime(date("d-m-Y H:i:s"), $database);
								else $kp1 = new DateTime($team['pic'.$begin_pic], $database);
							}
							$kp1->setTimezone($client);
							
							//конечное время
							if($team['pic'.$pickets['id']]==NULL) $kp2 = new DateTime(date("d-m-Y H:i:s"), $database);
							else $kp2 = new DateTime($team['pic'.$pickets['id']], $database);
							
							$kp2->setTimezone($client);
							$intervalkp = $kp1->diff($kp2);
							
							// переводим время пикетов
							$pic = new DateTime($team['pic'.$pickets['id']], $database);
							$pic->setTimezone($client);
							
							//выводим							
								if($pickets['id']==$team['begin_id']) echo '<tr><td class="err">'.$pickets['id'].'</td><td class="err">'.$pickets['name'].'</td><td class="err">'.$pic->format('d-m-Y H:i:s').'</td><td class="err">'.$intervalkp->format('%H:%I:%S').'</td><td class="err"><font color="green">'.$team['bonus'.$pickets['id']].'</font></td><td class="err"><font color="red">'.$team['fine'.$pickets['id']].'</font></td><tr></p>';
								else echo '<tr><td>'.$pickets['id'].'</td><td>'.$pickets['name'].'</td><td>'.$pic->format('d-m-Y H:i:s').'</td><td>'.$intervalkp->format('%H:%I:%S').'</td><td><font color="green">'.$team['bonus'.$pickets['id']].'</font></td><td><font color="red">'.$team['fine'.$pickets['id']].'</font></td><tr>';
						
						}
						
						echo '</table>';?>