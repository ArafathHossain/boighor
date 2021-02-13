<?php 
	session_start(); 
	require_once("webcontrol/connect_db.php");
	
	$uniq_id 	= $_SESSION['uniq_id'];
	$product_id = $_REQUEST['pro_id'];
	
	$duly1 = mysqli_query("delete from temp_details where temp_id = '$uniq_id' and product_id = '$product_id'");
?>