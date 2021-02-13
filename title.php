<?php
	require_once("webcontrol/connect_db.php");
	
	$result 		= mysqli_query("select * from users order by id desc");
	$row 			= mysqli_fetch_array($result); 
	
		$title 			= $row['title'];
	
?>
<?php echo $title; ?>