<?php
	require_once("../connect_db.php");
	
	$id = $_REQUEST['id_delete'];
	$result = mysqli_query("select * from slider_manage where id = '$id'");
	$row = mysqli_fetch_array($result);
	
	$image11 = $row['image1'];
	$image22 = $row['image2'];
	
	$images_path_1 = "photo_gallery/" . $image11;
	$images_path_2 = "photo_gallery/" . $image22;
	
	$q1=mysqli_query("delete from slider_manage where id = '$id'");
	unlink($images_path_1);
	unlink($images_path_2);
	
	if($q1)
	{
?>
		<script language="javascript" type="text/javascript">
				alert("Delete hass been Successfully ...");
				location.replace("index.php");
				</script>
<?php
	} else {
?>

	<script language="javascript" type="text/javascript">
				alert("Delete hass been Failed ...");
				location.replace("index.php");
				</script>
<?php	
	}
?>