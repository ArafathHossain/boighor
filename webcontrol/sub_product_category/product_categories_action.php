<?php
	require_once("../connect_db.php");
	
	$cat_id        		= $_REQUEST['cat_id'];
	$sub_cat_name 		= $_REQUEST['sub_cat_name'];
	$status 			= $_REQUEST['status'];
	
	
	$q1 = mysqli_query("insert into products_sub_category values('', '$cat_id', '$sub_cat_name', '$status')");
		
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