<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('./mainheader.php');?>
<table class="tbl">
<tr width="100%">
<td width="20%" style="background-color:#c3dfef;" >
<center>
<ul style="text-align:left;">
<li><a href="html/question.html">Post Questions</a></li>
<li><a href="php/answer.php">Post Answer</a></li>
<li><a href="php/preview.php">Preview Question and Answer post!!</a></li>
</ul>
</center>


</td>
<td width="60%">
<?php include 'php/recentpost.php';?>
</td>
<td width="20%" style="background-color:#c3dfef;">
</td>
</tr>
</table>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<?php include('php/footer.php');?> 
	
	
