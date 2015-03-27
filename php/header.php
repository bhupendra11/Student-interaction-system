<?php
session_start(); 
error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html >
<html >
<head>

<style>
#wrap	{
		width: 100%;
		height: 50px; 
		margin: 0; 
		z-index: 99;
		position: relative;
		background-color: #366b82;
		}

.navbar		{
				height: 50px;
				padding: 0;
				margin: 0;
				position: absolute;
				border-right: 1px solid #54879d;
				}
			
		.navbar li 	{
					height: auto;
					width: 137px; 
					float: left; 
					text-align: center; 
					list-style: none; 
					font: normal bold 12px/1.2em Arial, Verdana, Helvetica;  
					padding: 0;
					margin: 0;
					background-color: #366b82;					
					}

			.navbar a	{							
						padding: 18px 0; 
						border-left: 1px solid #54879d;
						border-right: 1px solid #1f5065;
						text-decoration: none;
						color: white;
						display: block;
						}

				.navbar li:hover, a:hover	{
						background-color: #54879d;
						}
								
				.navbar li ul 	{
						display: none;
						height: auto;									
						margin: 0;
						padding: 0;								
						}
				
				.navbar li:hover ul {
						display: block;									
						}
									
				.navbar li ul li	{
						background-color: #54879d;
						}
				
				.navbar li ul li a 	{
						border-left: 1px solid #1f5065; 
						border-right: 1px solid #1f5065; 
						border-top: 1px solid #74a3b7; 							border-bottom: 1px solid #1f5065; 
						}
				
				.navbar li ul li a:hover	{
				background-color: #366b82;
				}
                
</style>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hostel </title>
</head>
<body >



    <div id="wrap">
		  <ul class="navbar">
			 <li><a href="index.php">Home</a></li>           

			 <li><a href="#">Profile</a>
				<ul>
				   <li>Edit profile</a></li>
				   <li><a href="#">Change Password</a></li>
				</ul>         
			 </li>
         <li><a href="">Colleges</a>
				<ul>
				  
                   <li><a href="srm.php">SRM</a></li>
				</ul>         
			 </li>
             <li><a href="">Reports</a>
				<ul>
				   <li><a href="viewfees.php">View fees</a></li>
				   <li><a href="viewmessbill.php">View Messbill</a></li>
				   <li><a href="viewbilling.php">View Billing</a></li>
				</ul>         
			 </li>

			<li><a href="logout.php">Logout</a></li>

             <li><a href="index.php">About Us</a></li>
             <li><a href="index.php">Contact Us</a></li>


		  </ul>
		 </div>
  