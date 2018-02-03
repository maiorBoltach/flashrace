<?php 
session_start();
if(!isset($_SESSION['admin_id']))
{
	header("Location: /admin/index.php");
}
else
{
include_once '../php/config.inc.php';
 
switch ( $_GET["team"] ) 
{ 
	case "crew":    // Список команды в таблице БД
		crew(); break; 
	case "show":    // Список всех записей в таблице БД
		show(); break; 
	case "settings":      // Форма для настроек
		get_edit_settings_form(); break; 
	case "update_crew":      // Форма для настроек
		update_crew(); break; 
	case "update_name":      // Обновить логин/имя в таблице БД
		update_name(); break; 
	case "update_begin":      // Обновить начальный КП в таблице БД
		update_begin(); break; 	
	case "update_pass":      // Обновить пароль в таблице БД
		update_pass(); break; 
	case "fine":      // Форма для добавления штрафа
		get_edit_fine_form(); break; 
	case "update_fine":      // Обновить штрафа в таблице БД
		update_fine(); break; 
	case "update_fine_finish":      // Обновить штрафа в таблице БД
		update_fine_finish(); break; 
	case "delete":      // Форма для удаления
		get_delete_form(); break;
	case "delete_team":      // Удалить запись в таблице БД
		delete_item(); break;
}
}
// Функция выводит список всех записей в таблице БД
function crew() 
{ 
  $query = 'SELECT * FROM users WHERE user_id='.$_GET['id']; 
  $res = mysql_query( $query ); 
  $team = mysql_fetch_array($res);
  include_once '../templates/team_crew.php';
} 
// Функция выводит список всех записей в таблице БД
function show() 
{ 
  $query = 'SELECT * FROM users LEFT JOIN race ON users.user_id = race.user_id LEFT JOIN checkpoints ON race.actual_id = checkpoints.id WHERE users.user_id='.$_GET['id']; 
  $res = mysql_query( $query ); 
  $team = mysql_fetch_array($res);
  include_once '../templates/team_show.php';
} 
// Функция обновляет имя в таблице БД  
function update_crew() 
{ 
  $name1 = mysql_escape_string( $_POST['name1'] );
  $name2 = mysql_escape_string( $_POST['name2'] ); 
  $name3 = mysql_escape_string( $_POST['name3'] ); 
  $name4 = mysql_escape_string( $_POST['name4'] ); 
  $name5 = mysql_escape_string( $_POST['name5'] ); 
  
  $fac1 = mysql_escape_string( $_POST['fac1'] );
  $fac2 = mysql_escape_string( $_POST['fac2'] ); 
  $fac3 = mysql_escape_string( $_POST['fac3'] ); 
  $fac4 = mysql_escape_string( $_POST['fac4'] ); 
  $fac5 = mysql_escape_string( $_POST['fac5'] ); 
  
  $query = "UPDATE users SET name1='".$name1."', name2='".$name2."',name3='".$name3."',name4='".$name4."',name5='".$name5."',
							fac1='".$fac1."', fac2='".$fac2."',fac3='".$fac3."',fac4='".$fac4."',fac5='".$fac5."' WHERE user_id=".$_GET['id']; 
  mysql_query ( $query ); 
  header( 'Location: /admin/team_edit.php?team=settings&id='.$_GET['id'] );
  die();
} 
// Функция обновляет имя в таблице БД  
function update_name() 
{ 
  $name = mysql_escape_string( $_POST['name'] ); 
  $email = mysql_escape_string( $_POST['email'] ); 
  $query = "UPDATE users SET user_name='".$name."', user_email='".$email."'
            WHERE user_id=".$_GET['id']; 
  mysql_query ( $query ); 
  header( 'Location: /admin/team_edit.php?team=settings&id='.$_GET['id'] );
  die();
} 
// Функция обновляет пароль в таблице БД  
function update_pass() 
{ 
	$upass = md5(mysql_real_escape_string( $_POST['pass'] )); 
	$upass = trim($upass);
  $query = "UPDATE users SET user_pass='".$upass."' WHERE user_id=".$_GET['id']; 
  mysql_query ( $query ); 
  header( 'Location: /admin/team_edit.php?team=settings&id='.$_GET['id'] );
  die();
}
// Функция обновляет КП в таблице БД  
function update_begin() 
{ 
	$num = mysql_escape_string( $_POST['num'] );
	$query = "UPDATE race SET begin_id='".$num."' WHERE user_id=".$_GET['id']; 
  mysql_query ( $query ); 
  header( 'Location: /admin/team_edit.php?team=settings&id='.$_GET['id'] );
  die();
}
// Функция формирует форму настроек
function get_edit_settings_form() 
{ 
	$query = 'SELECT * FROM users LEFT JOIN race ON users.user_id = race.user_id LEFT JOIN checkpoints ON race.actual_id = checkpoints.id WHERE users.user_id='.$_GET['id']; 
	$res = mysql_query( $query ); 
	$team = mysql_fetch_array($res);
	include_once '../templates/team_settings.php';
} 
// Функция обновляет штрафы в таблице БД  
function update_fine() 
{ 
	$time = mysql_escape_string( $_POST['time']);
	$bonus = mysql_escape_string( $_POST['bonus']);
	//$fine_id = mysql_escape_string( $_POST['id']);
	$fine_id = intval($_POST['id']);
  $query = "UPDATE race SET fine".$fine_id."=SEC_TO_TIME('".$time."'), bonus".$fine_id."=SEC_TO_TIME('".$bonus."') WHERE user_id=".$_GET['id']; 
  mysql_query ( $query ); 
  header( 'Location: /admin/team_edit.php?team=show&id='.$_GET['id'] );
  die();
}

function update_fine_finish() 
{ 
	$time = mysql_escape_string( $_POST['time_fin']);
	$bonus = mysql_escape_string( $_POST['bonus_fin']);
  $query = "UPDATE race SET fine_fin=SEC_TO_TIME('".$time."'), bonus_fin=SEC_TO_TIME('".$bonus."') WHERE user_id=".$_GET['id']; 
  mysql_query ( $query ); 
  header( 'Location: /admin/team_edit.php?team=show&id='.$_GET['id'] );
  die();
}
// Форма-Функция удаляет запись в таблице БД 
function get_delete_form() 
{ 
	include_once '../templates/team_delete.php';
} 
// Функция удаляет запись в таблице БД 
function delete_item() 
{ 
  $query = "DELETE users, race FROM users, race WHERE users.user_id = race.user_id && race.user_id = ".$_GET['id']; 
  mysql_query ( $query ); 
  header( 'Location: /admin/teams.php' );
  die();
} 
 // Функция формирует форму для редактирования пароля в таблице БД 
function get_edit_fine_form() 
{ 
  include_once '../templates/team_addfine.php';
} 
 	
?>