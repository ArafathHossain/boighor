<?php
	require_once("../connect_db.php");

	$uniq_id = $_REQUEST['uniq_id'];
		
	$q1=mysqli_query("delete from order_info where uniq_id = '$uniq_id'");
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