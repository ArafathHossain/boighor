<?php
	require_once("../uservelidation.php");
	require_once("../connect_db.php");
	
	
	$user_id        = $_SESSION['user_id'];
	$q				=	mysqli_query("select * from users where id = '$user_id'");
	$r				=	mysqli_fetch_array($q);
	$userid = $r['id'];
	$userpassword	= $r['userpassword'];
	
	
	
	$oldpass         = $_REQUEST['oldpass'];
	$oldpassword_md5   = md5($oldpass);	
	
	
	$newpass      = $_REQUEST['newpass'];
	
	$newpassmd5 = md5($newpass);
	
	
	if($userpassword  == $oldpassword_md5)
	{
		$q6 = mysqli_query("update users set userpassword ='$newpassmd5' where id = '$userid'");		
	}
	else 
	{

			echo '<script language="javascript" type="text/javascript">
				alert("Please input valid old password then try to change.");
				location.replace("password_change.php");
			</script>';
	
	}
	
	if($q6){
		
		echo  '<script language="javascript" type="text/javascript">
				alert("Password Changed Successfully.");
				location.replace("../logout.php");
			</script>';
	
	}
		
?>