<?php 
	require_once("uservelidation.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php require_once("title.php"); ?></title>

	<!-- bootstrap  start -->
    <script src="../js/jquery.min.js"></script> 
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<!-- bootstrap  end -->
	
	<!-- menu start -->
	<link rel="stylesheet" href="../menu/styles.css">
   	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   	<script src="../menu/script.js"></script>
	<!-- menu start -->
	
	<link rel="stylesheet" href="../css_2/style_1.css">	
	
	
	
</head>
<body style="background-color:#FFFFFF;">
	<div class="row" style="width:100%;">
	
		<?php require_once("header.php");?>
	
		<div class="col-md-2">
			<?php require_once("left_menu.php");?>
		</div>
		
		<div class="col-md-10">
			<div class="row shadow1" style="padding-top:10px; padding-bottom:10px; #CCCCCC; margin-top:15px; padding-left:15px;">
			<strong style="font-size:20px;">Dashboard</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Control panel</span>
			</div>
			<div class="row" align="center" style="padding-top:50px;">
			<strong style="font-size:30px;">Welcome to Admin Panel</strong>
			</div>
		</div>
		
	</div>
</body>
</html>