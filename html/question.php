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
	<table  class="tbl">
		<th>Write your Question?</th>
			<form action="../php/question.php" method="post">
			<tr class='xx'>
				<td >Write Your Question Here:</td
			</tr>
			<tr class="xx">
				<td> <textarea rows='15' cols='150' type="text" name="que"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td class='xx'> <input style="color:white;width:200px; height:35px; border:1px solid white;border-radius:12px; background-color:gray;" type="submit" value="Post My Question!" ></input></td>
			</tr>
			</form>
	</table>
</center>
</body>
</html>