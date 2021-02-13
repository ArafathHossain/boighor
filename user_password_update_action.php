<?php
	require_once("webcontrol/connect_db.php");
	
	
	$id 			= htmlspecialchars($_REQUEST['id']);
	$oldpass 		= htmlspecialchars($_REQUEST['oldpass']);
	$oldpass_md5 	= md5($oldpass);
	$newpass 		= htmlspecialchars($_REQUEST['newpass']);
	$newpass_md5 	= md5($newpass);	
	
	$q5 = mysqli_query("select * from registration_form where password = '$oldpass_md5' and id = '$id'");
	$r5 = mysqli_num_rows($q5);
	
	if($r5 != "1")
	{
		echo  '<script language="javascript" type="text/javascript">
				alert("Please input valid old password then try to change");
				location.replace("userid_password_update.php");
			</script>';
	}
	else
	{
		$q6 = mysqli_query("update registration_form set password ='$newpass_md5' where id = '$id'");
		
		echo  '<script language="javascript" type="text/javascript">
				alert("Password hass been Successfully.");
				location.replace("user_form_logout.php");
			</script>';
	}
?>