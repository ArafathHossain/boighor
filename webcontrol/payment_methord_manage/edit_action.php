<?php
	require_once("../connect_db.php");

	$id 					= htmlspecialchars($_REQUEST['id_edit']);
	$description 			= htmlspecialchars($_REQUEST['description']);
	
	
	$q = mysqli_query("update payment_methord set description = '$description' where id = '$id'");
			
	if($q)
	{
?>
			<script language="javascript" type="text/javascript">
				alert("Update Successful...");
				location.replace("index.php");
			</script>
<?php
	} else {
?>
			<script language="javascript" type="text/javascript">
				alert("Update Failed...");
				location.replace("edit.php");
			</script>
<?php
	}
?>