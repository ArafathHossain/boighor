<?php
	require_once("../uservelidation.php");
	require_once("../connect_db.php");
	$subcatid  = $_REQUEST['sub_cat_id'];
	
	
	$sn = 1;
	$p1= mysqli_query ("select * from products_manage where sub_cat_id = '$subcatid'");
	while($q1=mysqli_fetch_array($p1))
	{
	$id 					= $q1['id'];
	$sub_cat_id 			= $q1['sub_cat_id'];
	$name 					= $q1['name'];
	$product_code 			= $q1['product_code'];
	$old_price 				= $q1['old_price'];
	$price 					= $q1['price'];
	$status 				= $q1['status'];
	$image 					= $q1['image'];
	
	$q2 = mysqli_query("select sub_cat_name from  products_sub_category where id = '$sub_cat_id'");
	$r2 = mysqli_fetch_array($q2);
	$sub_cat_name = $r2['0']; 
?>
<div class="row" style="border-bottom:solid 1px #CCCCCC; padding-left:15px; padding-right:15px;">
	<div class="col-md-1">
	<div class="row" style="padding-left:5px;">
	<?php echo $sn++; ?>
	</div>
	</div>
	<div class="col-md-3">
	<div class="row">
	<?php echo $sub_cat_name; ?>
	</div>
	</div>
	<div class="col-md-3">
	<div class="row">
	<?php echo $name; ?>
	</div>
	</div>
	<div class="col-md-1">
	<div class="row">
	<?php echo $old_price; ?>
	</div>
	</div>
	<div class="col-md-1">
	<div class="row">
	<?php echo $price; ?>
	</div>
	</div>
	<div class="col-md-1">
	<div class="row">
	<img class="img-responsive" style="height:40px;; width:40px;" src="photo_gallery/<?php echo $image; ?>">
	</div>
	</div>
	<div class="col-md-1" align="center">
	<div class="row">
	<?php echo $status; ?>
	</div>
</div>
	<div class="col-md-1">
	<div class="row">
	<a href="products_manage_edit.php?id_edit=<?php echo $id; ?>"><img src="../image/edit.png"></a> &nbsp;|&nbsp; <a href="products_manage_delete_action.php?id_delete=<?php echo $id; ?>"><img src="../image/delete.png"></a>
	</div>
</div>
</div>

<?php
	}
?>
