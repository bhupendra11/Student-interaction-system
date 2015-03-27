<?php
 

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
session_start(); 
include("connect.php");
mysql_select_db('project');

if(isset($_SESSION[email]))
{
	header("Location: index.php");
}

if(isSet($_POST['submit']))
{
       $email=$_REQUEST['email'];
    $pass=$_REQUEST['password'];
include("connect.php");
mysql_select_db('project');
 
$sql_check = mysql_query("select * from user where email='".$email."' and password='".$password."'")
 or die(mysql_error());
 echo "hello";
	header("Location: index.php");

}
?>