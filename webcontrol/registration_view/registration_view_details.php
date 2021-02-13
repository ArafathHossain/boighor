<?php 
	require_once("../uservelidation.php");
	require_once("../connect_db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php require_once("../title.php"); ?></title>

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
<div class="row" style="width:100%; padding-bottom:20px;">
	
		<?php require_once("../header.php");?>
	
		<div class="col-md-2">
			<?php require_once("../left_menu.php");?>
		</div>
		
	<div class="col-md-10">
		<div class="row shadow1" style="padding-top:10px; padding-bottom:10px; margin-top:15px; padding-left:15px;">
			<strong style="font-size:20px;">Registration View Details</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Control panel</span>
			</div>
			
			<?php
				$id = $_REQUEST['id_details'];
				$sn = 1;
				$p1= mysqli_query ("select * from registration_form where id = '$id'");
				$q1=mysqli_fetch_array($p1);
				
				$id 				= $q1['id'];
				$name 				= $q1['name'];
				$email 				= $q1['email'];
				$phone_no 			= $q1['phone_no'];
				$image 				= $q1['image'];
				$address 			= $q1['address'];
				$user_id 			= $q1['user_id'];
			?>
		<div class="row" style="padding-top:20px;">
			<div class="col-md-12">
			
				<div class="form-group">
					<label class="col-sm-2 control-label">Name</label>
					<div class="col-sm-10">
						<input class="form-control" value="<?php echo $name; ?>" readonly >
					</div>
			  	</div>
				
				<div>&nbsp;</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Email Address</label>
					<div class="col-sm-10">
						<input class="form-control" value="<?php echo $email; ?>" readonly>
					</div>
			  	</div>
				
				<div>&nbsp;</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Phone Number</label>
					<div class="col-sm-10">
						<input class="form-control" value="<?php echo $phone_no; ?>"readonly>
					</div>
			  	</div>
				
				<div>&nbsp;</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Image</label>
					<div class="col-sm-10">
						<img class="img-responsive" height="100px" width="100px" src="photo_gallery/<?php echo $image; ?>">
					</div>
			  	</div>
				
				<div>&nbsp;</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Address</label>
					<div class="col-sm-10">
						<input class="form-control" value="<?php echo $address; ?>"readonly>
					</div>
			  	</div>
				
				<div>&nbsp;</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">User ID</label>
					<div class="col-sm-10">
						<input class="form-control" value="<?php echo $user_id; ?>"readonly>
					</div>
			  	</div>
				
			</div>
		</div>
			
		</div>
	</div>
</body>
</html>