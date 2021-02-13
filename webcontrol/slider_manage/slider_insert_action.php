<?php
	require_once("../connect_db.php");
	
	$title 				= htmlspecialchars($_REQUEST['title']);
	$status 			= htmlspecialchars($_REQUEST['status']);
		
	
	
	$folder = "photo_gallery/";
	$extention2 = strrchr($_FILES['image2']['name'], ".");
	$image22 = time();
	$image22 = $image22+10;
	$image22 = $image22.$extention2;
	$uploaddir2 = $folder . $image22;
	
	
	move_uploaded_file($_FILES['image2']['tmp_name'], $uploaddir2);
	
	$q1 = mysqli_query("insert into slider_manage values('', '$title', '$status', '$image22')");
	

if($q1)
{		$_SESSION['insert_msg'] = "Succesfully Insert";
?>
	<script language="javascript" type="text/javascript">
		alert("Succesfully Insert.");
		location.replace("index.php");
	</script>
<?php
} else {

	$_SESSION['insert_msg'] = "Insert Failed";
?>
	<script language="javascript" type="text/javascript">
		alert("Insert Failed.");
		location.replace("index.php");
	</script>
<?php
}
?>
