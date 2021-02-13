<?php
	require_once("../connect_db.php");
	
	$id = $_REQUEST['id'];
	
	$q11 = mysqli_query("select * from products_manage where sub_cat_id = '$id'");
	$menu_num = mysqli_num_rows($q11);
	
	if($menu_num >= 1) {
 		echo "Sorry, There are " . $menu_num . " product under this category. You can't delete this sub category.";
	}	else	{
	
	
		
		$qqq = mysqli_query("delete from products_sub_category where id = '$id'");
		
		if($qqq)
		{
		echo "Category Delete Successfully";
		} else {
		echo "Failed to Delete";
		}}
?>