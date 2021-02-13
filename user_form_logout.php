<?php
	session_start();	
	$_SESSION['customer_id'] = "";
	session_destroy();
?>
<script type="text/javascript" language="javascript">
	location.replace("index.php");
</script>