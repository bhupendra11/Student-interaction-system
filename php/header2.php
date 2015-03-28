<?php
session_start();
error_reporting( ~E_NOTICE & ~E_DEPRECATED);
?>
<html>

<head>
<title>
IECSIS

</title>
<link rel="stylesheet" type="text/css" href="../css/main1.css"/>
</head>
<body>
<div id="navbar">

<ul>
<li class="nohover"><a href="../index.php" ><img src="../images\logo.jpg" style=""></img></a></li>

<li><a> NOTIFICATION</a></li>
<li><a> CONTACT US</a></li>
<?php
if(isset($_SESSION['email']))
{
?>
<li><a href="logout.php"> LOGOUT</a></li>
<li><a href="profile.php">PROFILE</a></li>
<?php
}
else
{
?>
<li><a href="../html/login.html"> LOGIN</a></li>
<li><a href="../html/register.html">SIGN UP</a></li>

<?php 
}
?>


</ul>
</div>
<div id="tfheader">
		<form  id="tfnewsearch" action="getsearchresult.php" method="post">
				<input class="tftextinput" type="textbox" name="search" />
			    <input class="tfbutton" type="submit" value="Search" name="submit"/>
		</form>
	<div class="tfclear"></div>
</div>
