<?php

	require_once("webcontrol/connect_db.php");
	session_start();
	$uniq_id 		= $_SESSION['uniq_id'];

	$reg_id	 		        = $_REQUEST['customer_id'];
	$payment_type 			= $_REQUEST['payment_type'];
	$receipt_number 		= $_REQUEST['receipt_number'];


	$amount 				= $_REQUEST['amount'];
	$bkash_amount 		    = $_REQUEST['bkash_amount'];
	$trxid 					= $_REQUEST['trxid'];
	$payment_date 			= $_REQUEST['payment_date'];
	$bash_payment_date 		= $_REQUEST['bash_payment_date'];
	$bank_account_number 	= $_REQUEST['bank_account_number'];
	$bksh_account_number 	= $_REQUEST['bksh_account_number'];
	$total_delivery_crge 	= $_REQUEST['total_delivery_crge'];

	if(!empty($amount)){
	  $amount_value = $amount;
	}else if(!empty($bkash_amount)){
		 $amount_value = $bkash_amount;
	}


	if(!empty($payment_date)){
	  $payment_date_value = $payment_date;
	}else if(!empty($bash_payment_date)){
		 $payment_date_value = $bash_payment_date;
	}


	if(!empty($bank_account_number)){
	  $bank_acount_value = $bank_account_number;
	}else if(!empty($bksh_account_number)){
		 $bank_acount_value = $bksh_account_number;
	}

	if($payment_type==1)
	{
		$q2 = mysqli_query("select points from registration_form where id = '$reg_id'");
		$r = mysqli_fetch_array($q2);

		if($r['points']>=$amount){
			$q1 = mysqli_query("insert into payment_process values('', '$payment_type', '$reg_id', '$uniq_id', '$receipt_number', '$bank_acount_value', '$bank_account_name', '$bank_name', '$amount', '$trxid', '$payment_date_value', '')");
			$temp = $r['points'] - $amount;
			 mysqli_query("UPDATE registration_form SET points = '$temp' WHERE id='$reg_id'");
		}

	}
	else if ($payment_type==2) {
		$q1 = mysqli_query("insert into payment_process values('', '$payment_type', '$reg_id', '$uniq_id', '$receipt_number', '$bank_acount_value', '$bank_account_name', '$bank_name', '$bkash_amount', '$trxid', '$payment_date_value', '$total_delivery_crge')");
	}

if($q1)
{

?>
	<script language="javascript" type="text/javascript">
		alert("Order has been successful.");
		location.replace("place_order.php");
	</script>
<?php
}
else {
?>
	<script language="javascript" type="text/javascript">
		alert("Order has been Failed.");
		location.replace("payment_process.php");
	</script>
<?php
}
?>
