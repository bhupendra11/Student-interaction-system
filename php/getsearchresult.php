<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header.php');?>
<div>
	<table class="tbl">
		<tr width="100%">
			<td width="20%" style="background-color:#e7e7ff;position: fixed;height:100%;margin-top: -1%;">
			<center>
				<ul style="margin-top:50%;list-style: none;margin-left:-15%;">
<li><a href="html/question.html" class="list-group-item active" style="margin-bottom: 2%;">Post Questions</a></li>
<li><a href="php/answer.php" class="list-group-item active" style="margin-bottom: 2%;">Post Answer</a></li>
<li><a href="php/preview.php" class="list-group-item active" style="margin-bottom: 2%;" >Preview Question and Answer post!!</a></li>
</ul>
			</center>
			</td>
			<td width="60%" height="60%">
				
<?php
 	 	//------------------------------------------SEARCHING---------------------------------------
	error_reporting(E_ALL & ~ E_NOTICE & ~ E_WARNING & ~E_DEPRECATED);
	require_once 'connection.php';
	$c_count=0;
	if(isset($_POST['submit'])){
		$searchitem = $_POST['search'];
		$inc=0;
		$inc_pri=0;
		$tags=explode(" ", $searchitem);
		$tag_size=sizeof($tags);
		for ($i=0; $i < $tag_size; $i++) { 
			$query = "select * from tb_tags where tags like '{$tags[$i]}'";
			$result_set=mysqli_query($connection,$query);
			$num=mysql_num_rows($result_set);
			$sorted;
			$counter;
		//---------------------COUNTING THE MAXIMUN MATCHING-------------------
			while ($found_ques = mysqli_fetch_assoc($result_set)) {
				$found=0;
				
				if(in_array($found_ques['qid'],$sorted)){
					$index = array_search($found_ques['qid'],$sorted);
					$counter[$index]++;
				}else{
					$sorted[$inc]=$found_ques['qid'];
					$counter[$inc]=1;
					$inc++;
				}
			}	
		
		}
//------------------------------------------------------------------------------------------------------------
//----------------------------------------PRINTING SELECTED QUESTIONS-----------------------------------------
		for ($i=max($counter); $i >0; $i--) {
		 
			for ($j=0; $j < $inc; $j++) { 
				if ($counter[$j]==$i) 
				{
					$question_query = "select * from tb_question where question_id='{$sorted[$j]}'";
					$question_result_set = mysqli_query($connection,$question_query);
					$num = mysql_num_rows($question_result_set);
					while ($question_found = mysqli_fetch_assoc($question_result_set)) 
					{
						$c_count++;
                        
                        
                        //full -question block started
                        
                        
                        
						echo "<div id='full-question-block' class='container color-top ' style='margin-left:16%;margin-right:30%;'>";
						$userid=$question_found['user_id'];
						$qq="select user_name from user where user_id='$userid'";
						$rr=mysqli_query($connection,$qq);
						$res2=mysqli_fetch_assoc($rr);
                        echo "<div class='question'><h1>";
						echo "Que..    <h1> ".$question_found['question']."<div class='col-md-12 quser-description' style='display:inline-block;'>
					  		<div class='col-md-4 pull-right'>
			  	
						
				Posted @ ".$question_found['question_post_date']." 	
					  	
					 By ".($res2[0])."</div>";
					
						echo "</div></div>";
                        echo "<div class='answer' >";
                        echo "<div class='col-md-12 quser-description' >";
						$answer_query = "select * from tb_answer where question_id='{$sorted[$j]}'";
						$answer_result_set = mysqli_query($connection,$answer_query);
						while($answer_found = mysqli_fetch_assoc($answer_result_set)){
						echo "<hr>
				  			<p>";
							echo " ".$answer_found['answer']."</p>
 					
								<div class='col-md-11 pull-right'>
							Posted @ ".$answer_found['answer_post_date']."</div>";
							
    
						}
                        echo "</div></div>";	
                         echo("</div>");
						
					}
				}
			}
		}
	}
    
	echo("<div style='font-size:16px; color:blue;'>Total ".$c_count." result found..</div>");
?>
<!--                                                 HTML HOMESTUFFS                                              -->
</td>
<!--<td width="20%" style="background-color:#e7e7ff;position:fixed;height:100%;margin-top:-1%;">
</td>-->
</tr>
</table>
</div>
	<div id="footer1" style="margin-top: 430px;">
<div style="width:100%;height:25%;background-color:#e2e2e2;position: relative; ">
<!-- Social Footer, Colour Matching Icons -->
<!-- Include Font Awesome Stylesheet in Header -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!-- // -->
<div class="container" >
        <div class="text-center center-block" ></div>
           <center> <br />
                <a href="https://www.facebook.com/iecsis"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
	            <a href="https://twitter.com/iecsis"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
	            <a href="https://plus.google.com/+iecsis-page"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
	            <a href="mailto:iecsis@gmail.com"><i id="social" class="fa fa-envelope-square fa-3x social-em"></i></a>
                </center>
</div>
    
</div>


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</div>
	

</body>
</html>