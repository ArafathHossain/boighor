<?php
   require_once("../connect_db.php");
	
	$id 		= $_REQUEST['id_edit'];
	$q111 		= mysqli_query("select * from products_manage where id = '$id'");
	$r111 		= mysqli_fetch_array($q111);
	
	$sub_cat_id         = $_REQUEST['sub_cat_id'];
	$name          		= $_REQUEST['name'];
	$product_code       = $_REQUEST['product_code'];
	$availability       = $_REQUEST['availability'];
	$discount          	= $_REQUEST['discount'];
	$old_price          = $_REQUEST['old_price'];
	$price          	= $_REQUEST['price'];
	$status             = $_REQUEST['status'];
	$description        = $_REQUEST['description'];
	$short_details        = $_REQUEST['short_details'];
	
	$present_image = $r111['image'];
	$previous_image = $r111['previous_image'];
	$last_previous_image = $r111['last_previous_image'];
	
	
	//$image_path = "product_images/" . $image1;	
	$image_path1 = "photo_gallery/" . $present_image;	
	$image_path2 = "photo_gallery/" . $previous_image;
	$image_path3 = "photo_gallery/" . $last_previous_image;	
	
	
	
	$time = time();
	$time2 = time();
	$time3 = time();
	
	$pro_image = $_FILES['image']['name'];
	$extention = strstr($pro_image, '.');	
	$pro_image = $time.'1'. $extention;
	$upload_directory = "photo_gallery/" . $pro_image;
	$upload_now = move_uploaded_file($_FILES['image']['tmp_name'], $upload_directory);
	
	$pro_image_1 = $_FILES['previous_image']['name'];
	$extention1 = strstr($pro_image_1, '.');	
	$pro_image_1 = $time2.'2'. $extention1;
	$upload_directory1 = "photo_gallery/" . $pro_image_1;
	$upload_now1 = move_uploaded_file($_FILES['previous_image']['tmp_name'], $upload_directory1);
	
	
	$pro_image_2 = $_FILES['last_previous_image']['name'];
	$extention2 = strstr($pro_image_2, '.');	
	$pro_image_2 = $time3.'3'. $extention2;
	$upload_directory2 = "photo_gallery/" . $pro_image_2;
	$upload_now2 = move_uploaded_file($_FILES['last_previous_image']['tmp_name'], $upload_directory2);
	
		
	if($extention) {
	     $q1 = mysqli_query("update products_manage set image = '$pro_image' where id = '$id'");
		 if(!empty($present_image) && file_exists($image_path1)) unlink($image_path1);
	}
	
	if($extention1) {
	     $q1 = mysqli_query("update products_manage set previous_image = '$pro_image_1' where id = '$id'");
		 if(!empty($previous_image) && file_exists($image_path2)) unlink($image_path2);
	}
	if($extention2) {
	     $q1 = mysqli_query("update products_manage set last_previous_image = '$pro_image_2' where id = '$id'");
		 if(!empty($last_previous_image) && file_exists($image_path3)) unlink($image_path3);
	}
	
	 
	$q1 = mysqli_query("update products_manage set sub_cat_id = '$sub_cat_id', name = '$name', product_code = '$product_code', availability = '$availability', discount = '$discount', old_price = '$old_price', price = '$price', status = '$status', description = '$description', short_details = '$short_details' where id = '$id'");

	
	if($q1) {
?>
		<script type="text/javascript" language="javascript">
			alert("Data hass been updated successfully......");
			location.replace("index.php");
		</script>
<?php		
		
	} else {
?>
		<script type="text/javascript" language="javascript">
			alert("Data hass been updated Fail.....");
			location.replace("index.php");
		</script>
<?php
	}
?>
	