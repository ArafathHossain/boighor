<?php
	session_start();
	require_once("webcontrol/connect_db.php");
	$customer_id 	= htmlspecialchars($_SESSION['customer_id']);
	
	$name  		 	= htmlspecialchars($_REQUEST['name']);
	$email 	 	 	= htmlspecialchars($_REQUEST['email']);
	$phone_no 	 	= htmlspecialchars($_REQUEST['phone_no']);
	$address 	 	= htmlspecialchars($_REQUEST['address']);
	
	$d_name  	 	 = htmlspecialchars($_REQUEST['d_name']);
	$d_email 		 = htmlspecialchars($_REQUEST['d_email']);
	$d_phone_no 	 = htmlspecialchars($_REQUEST['d_phone_no']);
	$d_address 	 	 = htmlspecialchars($_REQUEST['d_address']);
	$District 	 	 = htmlspecialchars($_REQUEST['District']);
	
	$q = mysqli_query("update registration_form set  name = '$name', email ='$email', phone_no = '$phone_no', address = '$address', d_name = '$d_name', d_email = '$d_email', d_phone_no = '$d_phone_no', d_address = '$d_address', District = '$District' where id = '$customer_id'");
	
	// Email SEND DELIVERY INFO
	$customer_email	 = htmlspecialchars($_REQUEST["email"]);
	$to 	 = " priyoshops@gmail.com";
	$subject = "Order Information";
	$header  = "From: $customer_email \r\n";
	
	
	$message = "";
	$message .= 'Name : ' . htmlspecialchars($_REQUEST["name"]);
	$message .= "\r\n";
	$message .= 'Email : ' . htmlspecialchars($_REQUEST["email"]);
	$message .= "\r\n";
	$message .= 'Mobile : ' . htmlspecialchars($_REQUEST["phone_no"]);
	$message .= "\r\n";
	$message .= 'Address : ' . htmlspecialchars($_REQUEST["address"]);
	$message .= "\r\n";
	$message .= "\r\n";
	$message .= 'Delivery Name : ' . htmlspecialchars($_REQUEST["d_name"]);
	$message .= "\r\n";
	$message .= 'Delivery Email : ' . htmlspecialchars($_REQUEST["d_email"]);
	$message .= "\r\n";
	$message .= 'Delivery Mobile : ' . htmlspecialchars($_REQUEST["d_phone_no"]);
	$message .= "\r\n";
	$message .= 'Delivery District : ' . htmlspecialchars($_REQUEST["District"]);
	$message .= "\r\n";
	$message .= 'Delivery Address : ' . htmlspecialchars($_REQUEST["d_address"]);
	
	$send_mail = mail($to, $subject, $message, $header);
	
	if($q)
	{	$_SESSION['email'] = $email;
?>
	<script language="javascript" type="text/javascript">
        location.replace("payment_process.php");
    </script>
<?php
	} else {
?>
	<script language="javascript" type="text/javascript">
        alert("Failed...Try again");
        location.replace("delivery_page.php");
    </script>
<?php
	}
?>