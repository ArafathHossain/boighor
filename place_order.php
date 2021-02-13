<?php	
	session_start();
	require_once("webcontrol/connect_db.php");
	$customer_id 	= $_SESSION['customer_id'];
	$uniq_id 		= $_SESSION['uniq_id'];	
	$q = mysqli_query("select * from registration_form where id = '$customer_id'");
	$r = mysqli_fetch_array($q);
	$email 			= $r['email'];
	$District 			= $r['District'];
				
	if($District == 'Dhaka'){
	$total_delivery_crge 			=  60;
	} else {
	$total_delivery_crge 			=  80;
	}
	
	
	$sub_total_decimal = $_REQUEST['sub_total_decimal'];	
	
	
	$qq = mysqli_query("select * from registration_form where id = '$customer_id'");
	$rr = mysqli_fetch_array($qq);
	$id 		= $rr['id'];
	$name 		= $rr['name'];
	$email 		= $rr['email'];
	

	$date			= date("Y-m-d");
	$date_time		= date("m-d-Y");
	
	//$customer_id 	= $_SESSION['customer_id'];	
	
	
	$q1 = mysqli_query("insert into order_info values('', '$date', '$date_time', '$customer_id', '$uniq_id', 'Pending', '$total_delivery_crge')");
	
	$q2 = mysqli_query("select * from temp_details where temp_id = '$uniq_id'");
	while($r2 = mysqli_fetch_array($q2))
	{
		
		$product_id 	= $r2['product_id'];
		$product_qty 	= $r2['product_qty'];
		$product_price  = $r2['product_price'];
		
		
		$q3 = mysqli_query("insert into order_details values('', '$uniq_id', '$customer_id', '$product_id', '$product_price', '$product_qty', '', 'Pending', '', '$date_time', '')");
	}


	$url = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/send_order_detailes.php?customer_id='.$customer_id.'&uniq_id='.$uniq_id;
	
	$send_order_detailes = file_get_contents($url);
	
	$subject 	= "Thank You for Your Order";
	
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	$send_mail = mail($email, $subject, $send_order_detailes, $headers);
	
	
?>
    
<?php if($q3){  $_SESSION['uniq_id'] = ''; ?>

<script language="javascript" type="text/javascript">
	location.replace("customer_order_view.php");
</script>


<?php  } else { ?>
<script language="javascript" type="text/javascript">
   location.replace("payment_process.php");
</script>

<?php } ?>

