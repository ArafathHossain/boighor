<?php
	require_once("../connect_db.php");
	
	$id = $_REQUEST['id_delete'];
	$result = mysqli_query("select * from registration_form where id = '$id'");
	$row = mysqli_fetch_array($result);
	$images = $row['image'];
	
	$images_path = "photo_gallery/" . $images;
	
	$q1=mysqli_query("delete from registration_form where id = '$id'");
	unlink($images_path);
	
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