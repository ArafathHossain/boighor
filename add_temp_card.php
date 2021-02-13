<?php
	session_start();
	require_once("webcontrol/connect_db.php");
	
		$quantity 		= $_REQUEST['quantity'];
		$pro_id 		= $_REQUEST['pro_id'];
		$pro_price  	= $_REQUEST['pro_price'];
		$date_time 		= date("F j, Y, g:i a");
	
		$uniq_id 		= $_SESSION['uniq_id']; 
	if(!$uniq_id)
	{
		$uniq_id 			 = time();
		$_SESSION['uniq_id'] = $uniq_id;
		
		$q1 = mysqli_query("insert into temp_order values('', '', '$uniq_id', '$date_time')");
	}
	
		$q2 = mysqli_query("select product_qty from temp_details where temp_id = '$uniq_id' and product_id = '$pro_id'");
		$r2 = mysqli_fetch_array($q2);
		$product_qty = $r2[0];
	
	if(!$product_qty)
	{	
		$q3 = mysqli_query("insert into temp_details values('$uniq_id', '', '$pro_id', '$quantity', '$pro_price')");	
	} else {
		$new_product_qty = $product_qty + $quantity;
		$q3 = mysqli_query("update temp_details set product_qty = '$new_product_qty' where temp_id = '$uniq_id' and product_id = '$pro_id' ");
	}
?>
