<?php
	session_start();
	require_once("webcontrol/connect_db.php");

	$d_name 				= $_REQUEST['d_name'];
	$d_email 				= $_REQUEST['d_email'];
	$d_phone_no 			= $_REQUEST['d_phone_no'];
	$d_address 				= $_REQUEST['d_address'];
	
	
	$q1 = mysqli_query("insert into registration_form values('', '', '', '', '', '', '$d_name', '$d_email', '$d_phone_no', '$d_address', '', '', '')");
		

if($q1)

{	

		if(!empty($_SESSION['uniq_id'])){
		$uniq_id	 	= $_SESSION['uniq_id'];
		$result1234 = mysqli_query("select * from temp_details where temp_id = '$uniq_id'");  
		$number_of_rows = mysqli_num_rows($result1234);  
		}
		
?>
	<script language="javascript" type="text/javascript">
		
		<?php 
			if(!empty($number_of_rows)){
				$result = mysqli_query("select id from registration_form order by id desc limit 0, 1");
				$rr1 = mysqli_fetch_array($result);
				$id = $rr1['id'];
				$_SESSION['customer_id'] = $id;
			?>
			location.replace("payment_process.php");
			<?php } else { ?>
			
			location.replace("index.php");
			<?php }
		
		?>
		
	</script>
<?php
} else {

	
?>
	<script language="javascript" type="text/javascript">
		alert("Order has been Failed.");
		location.replace("without_user_login_form.php");
	</script>
<?php
}
?>