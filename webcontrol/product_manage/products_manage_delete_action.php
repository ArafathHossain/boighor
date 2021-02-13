<?php
	require_once("../connect_db.php");
	
	$id = $_REQUEST['id_delete'];
	$result = mysqli_query("select * from products_manage where id = '$id'");
	$row = mysqli_fetch_array($result);
	$present_image = $row['image'];
	$previous_image = $row['previous_image'];
	$last_previous_image = $row['last_previous_image'];
	
	$image_path1 = "photo_gallery/" . $present_image;	
	$image_path2 = "photo_gallery/" . $previous_image;
	$image_path3 = "photo_gallery/" . $last_previous_image;	
	
	$q1=mysqli_query("delete from products_manage where id = '$id'");
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