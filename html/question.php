<?php require_once '../php/session.php';?>
<?php confirm_logged_in();?>
<html>
<head>
	<title>
	Post Question
	</title>
	<link rel="stylesheet" type="text/css" href="../css/main1.css"/>
	<style>
		.xx
		{
			background-color:#366b82;
			color:black;
		}
		.tbl
		{
			border:1px solid white;background-color:#366b82; width:80%;
		}
	</style>
</head>
<body>
	<?php include('../php/header.php');?>
<center>
	<table  class="tbl" style="background-color:  #e7e7e7;">
		<th >Write your Question?</th>
			<form action="../php/question.php" method="post">
			<tr class='xx'>
				<td style="background-color:  #e7e7e7;">Write Your Question Here:</td
			</tr>
			<tr class="xx">
				<td> <textarea rows='15' cols='160'  name="que" style="border-color: #e7e7e7;"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td > <input style="color:white;margin-left:-100%; height:35px; border:1px solid white;border-radius:12px;background-color: #337ab7;" type="submit" value="Post My Question!" ></input></td>
			</tr>
			</form>
	</table>
</center>
</body>
</html>