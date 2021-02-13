<?php 
	require_once("webcontrol/connect_db.php");
	
	
	$id 	          	 = htmlspecialchars($_REQUEST['id']);
	$name 	  	 		 = htmlspecialchars($_REQUEST['name']);
	$email           	 = htmlspecialchars($_REQUEST['email']);
	$phone_no            = htmlspecialchars($_REQUEST['phone_no']);
	$address          	 = htmlspecialchars($_REQUEST['address']);
	

	$image = $_FILES['image']['name'];
	
	if($image)
	{		
				$image_name = strstr($image, '.');
				$image= time() . $image_name;
				$uploaddir = "webcontrol/registration_view/photo_gallery/" . $image;
				$upload_file = move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir);
				
				
			
			//IMAGE DELETE
			$q0 = mysqli_query("select image from registration_form where id = '$id'");
			$r0 = mysqli_fetch_array($q0);
			$images_db = $r0[0];
			$photo_db_path = "webcontrol/registration_view/photo_gallery/" . $images_db;
			unlink($photo_db_path);			
			
			
			$q = mysqli_query("update registration_form set name = '$name', email ='$email', phone_no ='$phone_no', image ='$image', address ='$address' where id = '$id'");	
		
	} else {
		
		$q = mysqli_query("update registration_form set name = '$name', email ='$email', phone_no ='$phone_no', address ='$address' where id = '$id'");
	}

if($q){ ?>
	<script language="javascript" type="text/javascript">
		alert("Profile update has been succesfully.");
		location.replace("user_form_logout.php");
	</script>
<?php

} else {

?>
	<script language="javascript" type="text/javascript">
		alert("Profile update has been Failed.");
		location.replace("profile_update.php");
	</script>
<?php
}
?>