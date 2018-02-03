<?php
$PRETITLE = 'FLASHRACE';
$DBIP = 'localhost';
$DBNAME = 'flashrace';
$DBLOGIN = 'root';
$DBPASSWORD = '12345';
$DOMAIN = 'localhost';

$database = new DateTimeZone("UTC"); // часовой пояс сервера базы данных
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