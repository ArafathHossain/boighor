<?php 
	session_start();
	require_once("webcontrol/connect_db.php");

	$uniq_id	 = $_SESSION['uniq_id'];
	$product_id	 = $_REQUEST['product_id'];
	$qty	 	 = $_REQUEST['qty'];

	foreach($product_id as $key => $product) {	
		$quantity = $qty[$key];
		$sql = mysqli_query("update temp_details set product_qty  = '$quantity' where product_id = '$product' and temp_id = '$uniq_id'");
	}
?>
<script type="text/javascript">
	location.replace('check_out.php');
</script>