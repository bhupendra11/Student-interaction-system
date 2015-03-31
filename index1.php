<!Doctype html>
<head>
<style>
.wrap{width:100%;height:100%;position:relative}
.head{position:fixed;top:0;left:0;width:100%} 
.bodywrap{margin-top:100px;width:100%;}
.left,.right{width:20%;height:100%;position: fixed;}
.left,.center,.right,.bodywrap{height:100%}
.left{background-color:#e7e7ff;float:left;margin-left: 0px;width:20%;}
.right{background-color:#e7e7ff;float:right;margin-left: 80%;width:20%;}
.center{background-color:white; margin-left:20%;width:60%;margin-top:-5px;}
.head{background-color:#777}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<div class="wrap">

<div class="head" style="position: fixed; width: 100%; background-color: white;"><?php include('./mainheader.php');?></div>
<div class='bodywrap'>
        <div class='left' style="margin-top: -2%;">
<ul style="margin-top:50%;list-style: none;margin-left:-10%;">
<li><a href="php/post_question.php" class="list-group-item">Post Questions</a></li>
<li><a href="php/answer.php" class="list-group-item">Post Answer</a></li>
<li><a href="php/preview.php" class="list-group-item">Preview Question and Answer post!!</a></li>
</ul>
</div>
        <div class='right' style="margin-top: -2%;">right</div>
        <div class='center'><?php include 'php/recentpost.php';?></div>
        
    </div>
</div>

<?php include('php/footer.php');?> 	
