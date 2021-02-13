<?php
	require_once("../connect_db.php");

	$id = $_REQUEST['id_delete'];
		
	$q1=mysqli_query("delete from about where id = '$id'");
	if($q1)
	{
?>
		<script language="javascript" type="text/javascript">
				alert("Delete hass been Successfully ...");
				location.replace("index.php");
				</script>
<?php
	} else {
?>

	<script language="javascript" type="text/javascript">
				alert("Delete hass been Failed ...");
				location.replace("index.php");
				</script>
<?php	
	}
?>