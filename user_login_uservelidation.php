<?php 
	session_start();	
	$user_id = $_SESSION['user_id'];
	
	if($user_id == "")
	{
?>
		<script type="text/javascript" language="javascript">
			alert("You are not valid user");
			location.replace("user_login_form.php");
		</script>

<?php }  else { echo ""; } ?>
		