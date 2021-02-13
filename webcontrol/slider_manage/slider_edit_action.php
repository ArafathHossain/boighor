<?php
	require_once("../connect_db.php");
	
	$id 	= $_REQUEST['id_edit'];
	$q111 = mysqli_query("select * from slider_manage where id = '$id'");
	$r111 = mysqli_fetch_array($q111);
	

	
	$image22 = $r111['image2'];
	$image_path2 = "photo_gallery/" . $image22;
	
	$title          	= htmlspecialchars($_REQUEST['title']);
	$status             = htmlspecialchars($_REQUEST['status']);
	
	
		$image2 = $_FILES['image2']['name'];
		$extention1 = strstr($image2, '.');	
		$image2 = time()+1 . $extention1;
		
		
		
		if($extention1){
		 if($extention1 == ".jpg" || $extention1 == ".JPG" || $extention1 == ".jpeg" || $extention1 == ".JPEG" || $extention1 == ".png" || $extention1 == ".PNG" || 
		$extention1 == ".gif" || $extention1 == ".GIF" || $extention1 == ".pdf"|| $extention1 == ".PDF" || $extention1 == ".zip"|| $extention1 == ".ZIP")
			{
			$upload_directory = "photo_gallery/" . $image2;
			$upload_now = move_uploaded_file($_FILES['image2']['tmp_name'], $upload_directory);
		
			 $q1 = mysqli_query("update slider_manage set title = '$title', status = '$status', image2 = '$image2' where id = '$id'");
			$delete_previous_image2 = unlink($image_path2);
			}
			else {
				 ?>
				<script language="javascript" type="text/javascript">
				alert("Sorry, only PDF, JPG, JPEG, PNG, RTF, TXT & Doc files are allowed.");
				location.replace("index.php");
				</script>
				 
			<?php 
			  }

		 }
		
			
		else{
			$q1 = mysqli_query("update slider_manage set title = '$title', status = '$status' where id = '$id'");
		}
		
if($q1){
		
?>
<script type="text/javascript" >
	alert("Update Succesfully");
	location.replace("index.php");
</script>

<?php } else { ?>
<script type="text/javascript" >
	alert("Update Failed");
	location.replace("slider_edit.php?id=<?php echo $id; ?>");
</script>
<?php }?>