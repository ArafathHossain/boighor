<?php
$dateid  = $_REQUEST['dateid'];
?>
<?php 
	require_once("../uservelidation.php");
	require_once("../connect_db.php");
?>

		<div class="row">
<table class="table table-bordered table-hover">

	<tr>
		<th>Sl. No</th>
		<th>Date and Time</th>
		<th>Name</th>
		<th>Mobile NO</th>
		<th>Price</th>
		<th>Action</th>
	</tr>
	
<?php
	$i=1;
	$result = mysqli_query("select * from order_info where date ='$dateid'");
	while($row = mysqli_fetch_array($result)){
?>
	
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $date_time; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $phone_no; ?></td>
		<td><?php echo $GrandTotal; ?></td>
		<td><a href="product_order_details.php?OrderNO=<?php echo $uniq_id; ?>"><img src="../image/details.png"></a> || <a href="pro_order_delete_action.php?uniq_id=<?php echo $uniq_id; ?>"><img src="../image/delete.png"></a></td>
	</tr>
	<?php } ?>
	
</table>
</div>

