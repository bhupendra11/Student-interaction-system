<?php
session_start();
error_reporting( ~E_NOTICE & ~E_DEPRECATED);
?>
<html>

<head>



<title>
My mp project

</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"> 
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"> 



<!--<link rel="stylesheet" type="text/css" href="./css/main1.css"/>   -->
<style type="text/css">
    
    p{
        padding: 50px;
        font-size: 32px;
        font-weight: bold;
        text-align: center;
        background: #f2f2f2;
        height:100%;
    }
    
</style>


</head>
<body>


<ul class="nav nav-tabs">

<li class="nohover"><a href="./index.php" ><img src="./images\logo.jpg" style=""></img></a></li>

<li class="active"><a href="#"><span  class="glyphicon glyphicon-home"></span>Home</a></li>

<li><a><span class="glyphicon glyphicon-user"></span> Profile</a></li>



<li><a><span   class="glyphicon glyphicon-envelope"></span> Notifications</a></li>
<li><a> <span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
<?php
if(isset($_SESSION['email']))
{
?>
<li><a href="./php/logout.php"> Logout</a></li>
<li><a href="./php/profile.php">Profile</a></li>




<?php
}
else
{
?>
<li><a href="./html/login.html"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>

<li><a href="./html/register.html">Sign up</a></li>


<?php 
}
?>









  <!--
  <div id="tfheader">
		<form  id="tfnewsearch" action="getsearchresult.php" method="post">
				<input class="tftextinput" type="textbox" name="search" />
			    <input class="tfbutton" type="submit" value="Search" name="submit"/>
		</form>
	<div class="tfclear"></div>
</div>

-->

<li>
<form class="form-search" action="./php/getsearchresult.php" method="post">
    <div class="input-append">
        <input type="textbox" name="search" class="span2 search-query">
        <button type="submit" value="Search" name="submit" class="btn">Search</button>
    </div>
    
</form>

</li>


</ul>