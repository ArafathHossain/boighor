<?php 
	require_once("webcontrol/connect_db.php");
	$verifyEmail	= htmlspecialchars($_REQUEST['email']);
	$resetPass		= "h51i3t1s4";
	
	$q1	= mysqli_query("select * from registration_form where email = '$verifyEmail'");
	$r1	= mysqli_fetch_array($q1);
	$regEmai	= $r1['email'];
	
	if($verifyEmail == $regEmai) 
		{
			$updatePass = mysqli_query("update registration_form set password = '$resetPass' where email = '$verifyEmail'");
		}		
			$to = $regEmai;
			$subject = "New Password";
			$headers = "From: dhakafish.com";	 
			$message .= "Your New Passwrd are = 'h51i3t1s4' please log in your account by this password.";
			$message .= "\r\n";
		
		    $sendMail = mail($to,$subject,$message,$headers);
			
	  if($sendMail) {
?>		
	<script language="javascript" type="text/javascript">
		alert("Your New Password Send Your E-mail. Please check Your E-mail for New Password");
		location.replace("user_form_logout.php");
	</script>	
	<?php 	} else { ?>
	<script language="javascript" type="text/javascript">
		alert("Your Email is Wrong or Not Exist");
		location.replace("forgotten_password_form.php");
	</script>
<?php 
	}
?>