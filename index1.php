<!doctype html>
<head>
<style>
html,body{height:100%}
.wrap{width:100%;height:100%;position:relative}
.head{height:100px;top:0;left:0;width:100%} 
.bodywrap{margin-top:100px;width:100%;}
.left,.right{width:20%;height:100%;position: fixed;}
.left,.center,.right,.bodywrap{height:100%}
.left{background-color:#c3dfef;float:left;margin-left: 0px;width:20%;}
.right{background-color:#c3dfef;float:right;margin-left: 80%;width:20%;}
.center{background-color:white;margin-left:200px; overflow:scroll; overflow-x:hidden;overflow-y:hidden;margin-left:20%;width:60%;}
.head{background-color:#777}
</style>

</head>
<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<div class="wrap">

<div class="head" style="position: fixed; width: 100%;height:10%; background-color: white;margin-top: 1px;"><?php include('./mainheader.php');?></div>
<div class='bodywrap'>
        <div class='left' style="position: fixed;">
<ul style="margin-top: 70%;">
<li><a href="html/question.html">Post Questions</a></li>
<li><a href="php/answer.php">Post Answer</a></li>
<li><a href="php/preview.php">Preview Question and Answer post!!</a></li>
</ul>
</div>
        <div class='right'>right</div>
        <div class='center'><?php include 'php/recentpost.php';?></div>
        
    </div>
</div>



	
<!--
<?php include('php/footer.php');?> 
/*	<div class='wrap'>
    <div class='head'>Header</div>
    
 </div>*/
-->