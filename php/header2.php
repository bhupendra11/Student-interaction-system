<?php
session_start();
error_reporting( ~E_NOTICE & ~E_DEPRECATED);
?>
<html>

<head>
	<title>
		IECSIS

	</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css"> 
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css"> 

	<link rel="stylesheet" type="text/css" href="../css/profile.css"> 


	




</head>

<div class="navbar navbar-default navbar-fixed-top" role="navigation" style="height:66px;"> 


    <div class="container" >

        <div class="navbar-header" style="display:inline";> 

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">


                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>

             

            <div class="navbar-collapse collapse"> 
                <ul class="nav navbar-nav navbar-right pull-left"> 

                    <a class="navbar-brand" href="#">Iecsis</a>
                    <li class="nohover list-unstyled"><a href="./index.php" >
                   		<img  src="../images/logo.png" style="margin: -15px 0px -10px 0px;"></img></a>
                    </li>


                    <li class="active"><a href="./index.php" >
                    <span  class="glyphicon glyphicon-home"></span>Home</a></li>

                    



                    <li><a><span   class="glyphicon glyphicon-envelope"></span> Notifications <span class="badge">24</span><? echo $notif ?></a></li>
                    <li><a> <span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>



					<?php
					if(isset($_SESSION['email']))
					{
					?>
					<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
					<li><a href="logout.php">  <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					
					<?php
					}
					else
					{
					?>
					<li><a href="../html/login.html"> <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li><a href="../html/register.html"><span class="glyphicon glyphicon-pencil"></span>Sign Up</a></li>

					<?php 
					}
					?>

 				</ul>

                   
				<form class="form-search" action="./php/getsearchresult.php" method="post">
					<div class="">
						<div class="input-group col-lg-3 pull-right" style="margin-top:10px;">
							<input type="text" class="form-control" placeholder="Search for..." name="search" >
							<span class="input-group-btn">
							<button type="submit" value="Search" name="submit" class="btn btn-default">Go!</button>
							</span>
						</div>
					</div>   
				</form>


            </div>
 


        </div>

     </div>




</div>

<body style="margin-top:80px;">