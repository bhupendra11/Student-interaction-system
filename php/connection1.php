<?php
	require_once 'constant.php';
	$connection=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
	if(!$connection)
	{
		echo ("Connection to database Fail ".mysql_error());
	}
	$db_connect = mysql_select_db(DB_NAME,$connection);
	if(!$db_connect)
	{
		die("connection to database Failure".mysql_error());
	}
?>