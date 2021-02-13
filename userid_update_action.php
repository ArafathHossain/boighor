<?php
	require_once("webcontrol/connect_db.php");

	$id 					= htmlspecialchars($_REQUEST['id']);
	$user_id 				= htmlspecialchars($_REQUEST['user_id']);
	
	
	$q = mysqli_query("update registration_form set user_id = '$user_id' where id = '$id'");
			
	if($q)
	{
?>
			<script language="javascript" type="text/javascript">
				alert("User Id Update hass been Successful...");
				location.replace("user_form_logout.php");
			</script>
<?php
	} else {
?>
			<script language="javascript" type="text/javascript">
				alert("User Id Update hass been Failed...");
				location.replace("userid_password_update.php");
			</script>
<?php
	}
?>