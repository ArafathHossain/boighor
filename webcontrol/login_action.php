<?php
	session_start();
	require_once("connect_db.php");
		
	$userid 			= htmlspecialchars($_REQUEST['userid']);
	$userpassword		= htmlspecialchars($_REQUEST['userpassword']);
	$userpass_md5 		= md5($userpassword);
		
	// print $userpass;
	
	$q1 = mysqli_query("select * from users where userid = '$userid'");
	$r1 = mysqli_fetch_array($q1);
	$db_password = $r1['userpassword'];
	 $id = $r1['id'];
	
	
	
	if($userpass_md5 == $db_password)
	{
		$_SESSION['user_id'] = $id;
?>
	<script type="text/javascript" language="javascript">
        location.replace("admin_home/dashboard.php");
    </script>

<?php
}else{
?>
		<script type="text/javascript" language="javascript">
			alert("Sorry Your User Name or Password is Do Not Match.");
			location.replace("index.php");
		</script>

<?php
	
}
?>