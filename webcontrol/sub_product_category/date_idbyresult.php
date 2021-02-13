<?php
	require_once("../uservelidation.php");
	require_once("../connect_db.php");
	$catid  = $_REQUEST['cat_id'];
	
	$sn = 1;
	$p1= mysqli_query ("select * from products_sub_category where cat_id = '$catid'");
	while($q1=mysqli_fetch_array($p1)){
	$id 					= $q1['id'];
	$cat_id 				= $q1['cat_id'];
	$sub_cat_name 			= $q1['sub_cat_name'];
	$status 				= $q1['status'];
	
	$q2 = mysqli_query("select cat_name from  products_category where id = '$cat_id'");
              	$r2 = mysqli_fetch_array($q2);
                $cat_name = $r2['0'];  
?>
<div class="row" id="product_view" style="border-bottom:solid 1px #CCCCCC; padding-left:15px; padding-right:15px;">
  <div class="col-md-1">
    <div class="row" style="padding-left:5px;"> <?php echo $sn++; ?> </div>
  </div>
  <div class="col-md-4">
    <div class="row"> <?php echo $cat_name; ?> </div>
  </div>
  <div class="col-md-5">
    <div class="row"> <?php echo $sub_cat_name; ?> </div>
  </div>
  <div class="col-md-1">
    <div class="row"> <?php echo $status; ?> </div>
  </div>
  <div class="col-md-1">
    <div class="row"> <a href="product_categories_edit.php?id_edit=<?php echo $id; ?>"><img src="../image/edit.png"></a> &nbsp;|&nbsp; <a href="#=<?php echo $id; ?>"><img src="../image/delete.png" onClick="menu_delete(<?php echo $id; ?>);"></a> </div>
  </div>
</div>
<?php
}
?>
