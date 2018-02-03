<?php 
session_start();
if(!isset($_SESSION['admin_id']))
{
	header("Location: /admin/index.php");
}
else
{
$_SESSION['username'] = "flashrace_admin";
include_once '../config.inc.php';
//if ( !isset( $_GET["team"] ) ) $_GET["team"] = "showlist";  
  
switch ( $_GET["team"] ) 
{ 
  case "show":    // Список всех записей в таблице БД
    show(); break; 
  case "change_name":    // Форма для изменения имени 
    get_edit_name_form(); break; 
  case "update_name":      // Обновить логин/имя в таблице БД
    update_name(); break; 
	case "change_pass":      // Форма для изменения пароля
   get_edit_pass_form(); break; 
	case "update_pass":      // Обновить пароль в таблице БД
    update_pass(); break; 
	case "fine":      // Форма для добавления штрафа
   get_edit_fine_form(); break; 
	case "update_fine":      // Обновить штрафа в таблице БД
    update_fine(); break; 
	
	case "begin":      // Форма для добавления начального КП
   get_edit_begin_form(); break; 
	case "update_begin":      // Обновить начальный КП в таблице БД
    update_begin(); break; 
	
  case "delete":      // Удалить запись в таблице БД
    delete_item(); break;
}
}
// Функция выводит список всех записей в таблице БД
function show() 
{ 
  $query = 'SELECT * FROM users LEFT JOIN race ON users.user_id = race.user_id LEFT JOIN checkpoints ON race.actual_id = checkpoints.id WHERE users.user_id='.$_GET['id']; 
  $res = mysql_query( $query ); 
  $team = mysql_fetch_array($res);
  include_once '../templates/team_show.php';
} 

// Функция формирует форму для редактирования имени в таблице БД 
function get_edit_name_form() 
{ 
  $query = 'SELECT user_id, user_name, user_email FROM users WHERE user_id='.$_GET['id']; 
  $res = mysql_query( $query ); 
  $item = mysql_fetch_array( $res ); 
  include_once '../templates/team_editname.php';
} 

// Функция обновляет имя в таблице БД  
function update_name() 
{ 
  $name = mysql_escape_string( $_POST['name'] ); 
  $email = mysql_escape_string( $_POST['email'] ); 
  $query = "UPDATE users SET user_name='".$name."', user_email='".$email."'
            WHERE user_id=".$_GET['id']; 
  mysql_query ( $query ); 
  header( 'Location: /admin/team_edit.php?team=show&id='.$_GET['id'] );
  die();
} 

// Функция формирует форму для редактирования пароля в таблице БД 
function get_edit_pass_form() 
{ 
  include_once '../templates/team_changepassword.php';
} 

// Функция обновляет пароль в таблице БД  
function update_pass() 
{ 
	$upass = md5(mysql_real_escape_string( $_POST['pass'] )); 
	$upass = trim($upass);
  $query = "UPDATE users SET user_pass='".$upass."' WHERE user_id=".$_GET['id']; 
  mysql_query ( $query ); 
  header( 'Location: /admin/team_edit.php?team=show&id='.$_GET['id'] );
  die();
}

// Функция формирует форму для редактирования пароля в таблице БД 
function get_edit_fine_form() 
{ 
  include_once '../templates/team_addfine.php';
} 

// Функция обновляет пароль в таблице БД  
function update_fine() 
{ 
	$fine_id = mysql_escape_string( $_POST['id'] );
	$time = mysql_escape_string( $_POST['time']);
	$bonus = mysql_escape_string( $_POST['bonus']);
  $query = "UPDATE race SET fine".$fine_id."=SEC_TO_TIME('".$time."'), bonus".$fine_id."=SEC_TO_TIME('".$bonus."') WHERE user_id=".$_GET['id']; 
  mysql_query ( $query ); 
  header( 'Location: /admin/team_edit.php?team=show&id='.$_GET['id'] );
  die();
}

// Функция формирует форму для редактирования КП 
function get_edit_begin_form() 
{ 

	 $query = 'SELECT user_id, begin_id FROM race WHERE user_id='.$_GET['id']; 
	$res = mysql_query( $query ); 
	$item = mysql_fetch_array( $res ); 
	include_once '../templates/team_editbegin.php';
} 

// Функция обновляет КП в таблице БД  
function update_begin() 
{ 
	$num = mysql_escape_string( $_POST['num'] );
	$query = "UPDATE race SET begin_id='".$num."' WHERE user_id=".$_GET['id']; 
  mysql_query ( $query ); 
  header( 'Location: /admin/team_edit.php?team=show&id='.$_GET['id'] );
  die();
}

// Функция удаляет запись в таблице БД 
function delete_item() 
{ 
  $query = "DELETE users, race FROM users, race WHERE users.user_id = race.user_id && race.user_id = ".$_GET['id']; 
  mysql_query ( $query ); 
  header( 'Location: /admin/teams.php' );
  die();
} 
  
?>