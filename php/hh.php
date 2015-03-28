<<<<<<< HEAD:php/hh.php
=======
<?php
session_start();
$email=$_SESSION['eml'];
$password=$_SESSION['pswd'];
//echo "email=".$email;
//echo "password=".$password;
$_SESSION['eml']=$email;
$_SESSION['password']=$password;
error_reporting( ~E_NOTICE & ~E_DEPRECATED);
?>
>>>>>>> profile.php, css,update profile  presentation changes ;:php/header2.php
<html>

<head>
<title>
My mp project

</title>
<link rel="stylesheet" type="text/css" href="../css/main1.css"/>
</head>
<body>
<div id="navbar">

<ul>
<li class="nohover"><a href="../index.php" ><img src="../images\logo.jpg" style=""></img></a></li>

<li><a> NOTIFICATION</a></li>
<li><a> CONTACT US</a></li>
<li><a href="login.html"> LOGIN</a></li>
<li><a href="register.html">SIGN UP</a></li>



</ul>
</div>
<div id="tfheader">
		<form  id="tfnewsearch" action="../php/getsearchresult.php" method="post">
				<input class="tftextinput" type="textbox" name="search" />
			    <input class="tfbutton" type="submit" value="Search" name="submit"/>
		</form>
	<div class="tfclear"></div>
</div>


</body>
</html>
