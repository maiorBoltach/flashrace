<?php 
echo '<div id="content-1"><table cellspacing=\'0\' class="table"><thead><tr><th class="table-title">Начальный<br>КП</th><th class="table-title">Текущий<br>КП</th>
<th class="table-title">Пройдено КП</th><th class="table-title">Старт</th><th class="table-title">Финиш</th><th class="table-title">Общий<br>бонус</th>
<th class="table-title">Общий<br>штраф</th><th class="table-title">Итоговое<br>время</th></tr></thead><tbody>';

					
					// считаем интервал между концом и началом
					$begin = new DateTime($team['begin'], $database);
					$begin->setTimezone($client);
					$end = new DateTime($team['end'], $database);
					$end->setTimezone($client);
					
					
					// считаем сумму штрафных минут
					$res = mysql_query("SELECT MAX(id) AS id FROM checkpoints"); 
					$item = mysql_fetch_assoc( $res );
					
					$fine_all = $team['fine_fin'];
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
					$bonus_all = $team['bonus_fin'];
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
					</tbody></table></div>
					
					<br>
					<div id="content-3"><table cellspacing='0' class="table"><thead>
					<tr><th colspan="2" class="table-title">Дополнительные штрафы и бонусы</th></thead><tbody>
					<tr><td>Бонус за решение дополнительных задач (при финише до 18:00)</td><td><font color="green"><?php echo $team['bonus_fin']; ?></font></td></tr>
					<tr><td>Штраф за финиш после 18:00 (каждая секунда после 18:00 - 1 секунда штрафа)</td><td><font color="red"><?php echo $team['fine_fin']; ?></font></td></tr>
					</tbody></table></div>
					
					<div id="content-2"><table cellspacing='0' class="table"><thead>
					<tr><th class="table-title">ID<br>КП</th><th class="table-title">Название</th><th class="table-title">Время засчитывания</th>
					<th class="table-title">Время прохождения<br>(без штрафа и бонуса)</th><th class="table-title">Бонус</th><th class="table-title">Штраф</th><tr></thead><tbody>
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
								if($pickets['id']==$team['begin_id']) { echo '<tr class=\'begin\'><td>'.$pickets['id'].'<br>(начальный)</td><td>'.$pickets['name'].'</td>';
								
								if($team['pic'.$pickets['id']] == NULL) echo '<td>-</td><td>-</td>';
								else echo '<td>'.$pic->format('d-m-Y H:i:s').'</td><td>'.$intervalkp->format('%H:%I:%S').'</td>';
								echo '<td><font color="green">'.$team['bonus'.$pickets['id']].'</font></td><td><font color="red">'.$team['fine'.$pickets['id']].'</font></td><tr></p>';
								}
								else { 
								echo '<tr><td>'.$pickets['id'].'</td><td>'.$pickets['name'].'</td>';
								if($team['pic'.$pickets['id']] == NULL) echo '<td>-</td><td>-</td>';
								else echo '<td>'.$pic->format('d-m-Y H:i:s').'</td><td>'.$intervalkp->format('%H:%I:%S').'</td>';
								
								echo '<td><font color="green">'.$team['bonus'.$pickets['id']].'</font></td><td><font color="red">'.$team['fine'.$pickets['id']].'</font></td><tr>';
								}
						}
						
						echo '</tbody></table></div>';
						
						?>