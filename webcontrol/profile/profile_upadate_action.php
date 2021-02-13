<?php 

  	require_once("../uservelidation.php");
	require_once("../connect_db.php");
	
	
	$id 	          	 = $_REQUEST['id'];
	$web 	  			 = $_REQUEST['web'];
	$email           	 = $_REQUEST['email'];
	$user_id           	 = $_REQUEST['user_id'];
	$phone_no 	         = $_REQUEST['phone_no'];
	$facebook 	         = $_REQUEST['facebook'];
	$youtube 	         = $_REQUEST['youtube'];
	$googleplus 	     = $_REQUEST['googleplus'];
	$twitter 	     	 = $_REQUEST['twitter'];
	$address 	         = $_REQUEST['address'];
	$skype 	          	 = $_REQUEST['skype'];
	$title 	          	 = $_REQUEST['title'];

	$image = $_FILES['image']['name'];
	
	if($image)
	{		
				$image_name = strstr($image, '.');
				$image= time() . $image_name;
				$uploaddir = "images/" . $image;
				$upload_file = move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir);
				
			
				
			//IMAGE DELETE
			$q0 = mysqli_query("select image from users where id = '$id'");
			$r0 = mysqli_fetch_array($q0);
			$images_db = $r0[0];
			$photo_db_path = "images/" . $images_db;
			unlink($photo_db_path);			

			$q = mysqli_query("update users set userid = '$user_id', web ='$web', email ='$email', phone_no ='$phone_no', facebook ='$facebook', youtube ='$youtube', googleplus ='$googleplus', twitter ='$twitter', address ='$address', skype ='$skype', image = '$image', title = '$title' where id = '$id'");	
		
	} else {
		
		$q = mysqli_query("update users set userid = '$user_id', web ='$web', email ='$email' , phone_no ='$phone_no', facebook ='$facebook', youtube ='$youtube', googleplus ='$googleplus', twitter ='$twitter', address ='$address', skype ='$skype', title = '$title' where id = '$id'");
	}

if($q){ ?>
	<script language="javascript" type="text/javascript">
		alert("Update Succesfully.");
		location.replace("index.php");
	</script>
<?php

} else {

?>
	<script language="javascript" type="text/javascript">
		alert("Update Failed.");
		location.replace("index.php");
	</script>
<?php
}
?>