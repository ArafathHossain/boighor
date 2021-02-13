<?php
	require_once("../connect_db.php");

	$id 					= htmlspecialchars($_REQUEST['id_edit']);
	$cat_id 				= htmlspecialchars($_REQUEST['cat_id']);
	$sub_cat_name 			= htmlspecialchars($_REQUEST['sub_cat_name']);
	$status 				= htmlspecialchars($_REQUEST['status']);
	
	
	$q = mysqli_query("update products_sub_category set cat_id = '$cat_id', sub_cat_name = '$sub_cat_name', status = '$status' where id = '$id'");
			
	if($q)
	{
?>
			<script language="javascript" type="text/javascript">
				alert("Update Successful...");
				location.replace("index.php");
			</script>
<?php
	} else {
?>
			<script language="javascript" type="text/javascript">
				alert("Update Failed...");
				location.replace("product_categories_edit.php");
			</script>
<?php
	}
?>