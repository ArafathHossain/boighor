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
			<div class="row shadow1" style="padding-top:10px; padding-bottom:10px; #CCCCCC; margin-top:15px; padding-left:15px;">
			<strong style="font-size:20px;">Registration View Manage</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Control panel</span>
			</div>
			
			<div class="row" style="padding-top:5px; padding-bottom:5px; border-top:solid 1px #CCCCCC; border-bottom:solid 1px #CCCCCC; background-color:#F8F8F8; margin-top:40px;">
			<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<strong>Sr. No</strong>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
				<strong>Name</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				<strong>Mobile NO</strong>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
				 <strong>Email Address</strong>
				</div>
			</div>
			<div class="col-md-2">
				<div class="row">
				<strong>User Id</strong>
				</div>
			</div>
            <div class="col-md-1">
				<div class="row">
				 <strong>Image</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row" align="center">
				 <strong>Action</strong>
				</div>
			</div>
			</div>
			<?php
				$sn = 1;
				$p1= mysqli_query ("select * from registration_form order by id asc");
				while($q1=mysqli_fetch_array($p1))
				{
				$id 				= $q1['id'];
				$name 				= $q1['name'];
				$phone_no 			= $q1['phone_no'];
				$email 				= $q1['email'];
				$user_id 			= $q1['user_id'];
				$image 				= $q1['image'];
			?>
			<div class="row" style="border-bottom:solid 1px #CCCCCC;">
				<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<?php echo $sn++; ?>
				</div>
				</div>
				<div class="col-md-3">
				<div class="row">
				<?php echo $name; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<?php echo $phone_no; ?>
				</div>
				</div>
				<div class="col-md-3">
				<div class="row">
				<?php echo $email; ?>
				</div>
				</div>
				<div class="col-md-2">
				<div class="row">
				<?php echo $user_id; ?>
				</div>
				</div>
                <div class="col-md-1">
				<div class="row">
				<img class="img-responsive" src="photo_gallery/<?php echo $image; ?>">
				</div>
				</div>
				
				<div class="col-md-1">
				<div class="row" align="center">
				<a href="registration_view_details.php?id_details=<?php echo $id; ?>"><img src="../image/details.png"></a> || <a href="registration_view_delete_action.php?id_delete=<?php echo $id; ?>"><img src="../image/delete.png"></a>
				</div>
			</div>
			</div>
			<?php
				}
			?>
		</div>
	</div>
</body>
</html>