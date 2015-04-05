<?php
$server_name="localhost";
$user_name="root";
$password="";
$db="event_mgmt";


$_con=mysql_connect($server_name,$user_name,$password);

if(!$_con)
	die("OoPs! couldn't connect to server.");


$db_connect=mysql_select_db($db);


if(!$db_connect)
	die("OoPs! couldn't connect to database.");


?>
