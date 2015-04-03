<?php
	session_start();
	error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header.php');?>
<?php
require_once 'connection.php'; 
	$email = $_SESSION['email'];
	$user_name=$_REQUEST['user_name'];
    $college_name=$_REQUEST['college_name'];
    $college_id=$_REQUEST['college_id'];
    $branch=$_REQUEST['branch'];
    $year_of_admission=$_REQUEST['year_of_admission'];
//--------------------------------------------------UPDATING PROFILE PIC
    if(basename($_FILES["fileToUpload"]["name"])!=""){
    $target_dir = "../uploads/";
	$target_file = $target_dir.$email.".jpg";
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
    	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    	$uploadOk = 0;
	}
	if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
	} else {
   	 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file has been uploaded.";
   	 } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}


//----------------------------------------------------------------------------------------------
    //$profile_pic=$_REQUEST['profile_pic'];
	$sql="update user set user_name='$user_name' , branch='$branch' , college_id='$college_id', college='$college_name' ".
		 ",year_of_admission='$year_of_admission',image='$target_file' where email='$email'";
	if (mysqli_query($connection,$sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " ;
	}
?>
