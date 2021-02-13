<?php
	require_once("../uservelidation.php");
	require_once("../connect_db.php");
	
	$OrderID = htmlspecialchars($_REQUEST['OrderID'], ENT_QUOTES, 'UTF-8');
	$order_status = $_REQUEST['order_status'];
	
	
	
	$q = mysqli_query("update order_info set status = '$order_status' where uniq_id = '$OrderID'");
	
	if($q)
	{
?>
	<script language="javascript" type="text/javascript">
        alert("Order Paid Successful.");
        location.replace("index.php");
    </script>
<?php
	} else {
?>
	<script language="javascript" type="text/javascript">
        alert("Order Paid Failed.");
        location.replace("product_order_details.php");
    </script>
<?php
	}
?>