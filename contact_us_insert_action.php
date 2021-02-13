<?php
	$email	 = htmlspecialchars($_REQUEST["email"]);
	$to 	 = "bdgadgetshop24@gmail.com";
	$subject = "Web Feed Back";
	$header  = "From: $email \r\n";
	
	
	$message = "";
	$message .= 'Name : ' . htmlspecialchars($_REQUEST["name"]);
	$message .= "\r\n";
	$message .= 'Email : ' . htmlspecialchars($_REQUEST["email"]);
	$message .= "\r\n";
	$message .= 'Mobile : ' . htmlspecialchars($_REQUEST["mobile"]);
	$message .= "\r\n";
	$message .= 'Subject : ' . htmlspecialchars($_REQUEST["subject"]);
	$message .= "\r\n";
	$message .= "\r\n";
	$message .= 'Details : ' . htmlspecialchars($_REQUEST["details"]);
	
	
	$send_mail = mail($to, $subject, $message, $header);

if($send_mail)
	{
?>

<script type="text/javascript" language="javascript">
	//alert("Your Feed Back Received and Reply quickly.");
	location.replace("contact_us_alert.php");
</script>

<?php
	} else {
?>

<script type="text/javascript" language="javascript">
	alert("Your Feed Back is Failed.");
	location.replace("index.php");
</script>

<?php
	}
?>