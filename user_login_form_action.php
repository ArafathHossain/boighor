<?php
	session_start();
	require_once("webcontrol/connect_db.php");

	$ebl		 = $_REQUEST['ebl'];

	$user_id 			= htmlspecialchars($_REQUEST['user_id']);
	$password123			= htmlspecialchars($_REQUEST['password123']);
	$userpass_md5 		= md5($password123);

	// print $userpass;

	$q1 = mysqli_query("select * from registration_form where user_id = '$user_id'");
	$r1 = mysqli_fetch_array($q1);
    $db_password = $r1['password'];
	$customer_id = $r1['id'];

	$_SESSION['customer_id'] = $customer_id;

if($ebl == 1){

if($userpass_md5 == $db_password){
?>
<script type="text/javascript" language="javascript">
	alert("Login Successfull.......");
   location.replace("index.php");
</script>
<?php } else { ?>

	<script type="text/javascript" language="javascript">
	    alert("Login Failed.......");
        location.replace("user_login_form.php");
    </script>

<?php }} else { ?>

<?php

if($userpass_md5 == $db_password){
?>
<script type="text/javascript" language="javascript">
	alert("Login Successfull.......");
   location.replace("index.php");
</script>
<?php } else { ?>

	<script type="text/javascript" language="javascript">
	    alert("Login Failed.......");
        location.replace("user_login_form.php");
    </script>

<?php } } ?>
