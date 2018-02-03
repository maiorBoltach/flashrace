<?php 
session_start();
if(!isset($_SESSION['admin_id']))
{
	header("Location: /admin/index.php");
}
else
{
include_once '../config.inc.php';

if ( !isset( $_GET["action"] ) ) $_GET["action"] = "showlist";  
  
switch ( $_GET["action"] ) 
{ 
  case "showlist":    // Список всех записей в таблице БД
    show_list(); break; 
  case "addform":     // Форма для добавления новой записи 
    get_add_item_form(); break; 
  case "add":         // Добавить новую запись в таблицу БД
    add_item(); break;
  case "editform":    // Форма для редактирования записи 
    get_edit_item_form(); break; 
  case "update":      // Обновить запись в таблице БД
    update_item(); break; 
  case "delete":      // Удалить запись в таблице БД
    delete_item(); break;
  default: 
    show_list(); 
}
}

// Функция выводит список всех записей в таблице БД
function show_list() 
{ 
  $query = 'SELECT id, name, text, code FROM checkpoints ORDER BY id'; 
  $res = mysql_query( $query ); 
  include_once '../templates/pickets_show.php';
} 

// Функция формирует форму для добавления записи в таблице БД 
function get_add_item_form() 
{ 
  $query = 'SELECT MAX(id) AS id FROM checkpoints'; 
  $res = mysql_query( $query ); 
  $item = mysql_fetch_assoc( $res ); 
  $newid= $item[id] + 1;
  include_once '../templates/pickets_add.php';
}

// Функция добавляет новую запись в таблицу БД  
function add_item() 
{ 
  $num = mysql_escape_string( $_POST['num'] ); 
  $name = mysql_escape_string( $_POST['name'] ); 
  $text = mysql_escape_string( $_POST['text'] ); 
  $code = mysql_escape_string( $_POST['code'] ); 
  $query = "INSERT INTO checkpoints (id, name, text, code) VALUES ('".$num."', '".$name."', '".$text."', '".$code."');"; 
  mysql_query ( $query ); 
  header( 'Location: '.$_SERVER['PHP_SELF'] );
  die();
}

// Функция формирует форму для редактирования записи в таблице БД 
function get_edit_item_form() 
{ 
  $query = 'SELECT name, text, code FROM checkpoints WHERE id='.$_GET['id']; 
  $res = mysql_query( $query ); 
  $item = mysql_fetch_array( $res ); 
  include_once '../templates/pickets_edit.php';
} 

// Функция обновляет запись в таблице БД  
function update_item() 
{ 
	$num = mysql_escape_string( $_POST['num'] ); 
  $name = mysql_escape_string( $_POST['name'] ); 
  $text = mysql_escape_string( $_POST['text'] ); 
  $code = mysql_escape_string( $_POST['code'] ); 
  $query = "UPDATE checkpoints SET name='".$name."', text='".$text."', code='".$code."', id='".$num."'
            WHERE id=".$_GET['id']; 
  mysql_query ( $query ); 
  header( 'Location: '.$_SERVER['PHP_SELF'] );
  die();
} 

// Функция удаляет запись в таблице БД 
function delete_item() 
{ 
  $query = "DELETE FROM checkpoints WHERE id=".$_GET['id']; 
  mysql_query ( $query ); 
  header( 'Location: '.$_SERVER['PHP_SELF'] );
  die();
} 
  
?>