<?php
	require_once("../connect_db.php");
	
	$title 				= htmlspecialchars($_REQUEST['title']);
	$status 			= htmlspecialchars($_REQUEST['status']);
	$description 		= htmlspecialchars($_REQUEST['description']);
	
	$q1 = mysqli_query("insert into about values('', '$title', '$status', '$description')");
		
	if($q1)
		{
?>
	<script language="javascript" type="text/javascript">
		alert("Insert Successful ...");
		location.replace("index.php");
	</script>
	
<?php
	} else {
?>
	<script language="javascript" type="text/javascript">
		alert("Insert Failed ...");
		location.replace("index.php");
	</script>
<?php
	}
?>