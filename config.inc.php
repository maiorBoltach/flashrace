<?php
$PRETITLE = 'FLASHRACE';
$DBIP = '127.0.0.1';
$DBNAME = 'flashrace';
$DBLOGIN = 'root';
$DBPASSWORD = 'password';
$DOMAIN = 'localhost/flashrace/';

$database = new DateTimeZone("Europe/Minsk"); // часовой пояс сервера базы данных
$client = new DateTimeZone("Europe/Minsk"); // часовой пояс клиентов
					

error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysql_connect($DBIP,$DBLOGIN,$DBPASSWORD))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db($DBNAME))
{
	die('oops database selection problem ! --> '.mysql_error());
}
mysql_query("SET NAMES 'utf8';"); 
mysql_query("SET CHARACTER SET 'utf8';"); 
mysql_query("SET SESSION collation_connection = 'utf8_general_ci';"); 
?>