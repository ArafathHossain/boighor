<?php
	session_start();	
	$userid = $_SESSION['userid'];
	
	if($userid == "")
	{
?>
		<script type="text/javascript" language="javascript">
			alert("You are not valid user");
			location.replace("index.php");
		</script>

<?php }  else { echo ""; } ?>
		