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
				$first_name 		= $q1['first_name'];
				$last_name 			= $q1['last_name'];
				$email 				= $q1['email'];
				$phone_no 			= $q1['phone_no'];
				$image 				= $q1['image'];
				$company 			= $q1['company'];
				$address_1 			= $q1['address_1'];
				$address_2 			= $q1['address_2'];
				$country 			= $q1['country'];
				$city 				= $q1['city'];
				$post_code 			= $q1['post_code'];
				$user_id 			= $q1['user_id'];
			?>
		<div class="row" style="padding-top:20px;">
			<div class="col-md-12">
						
				<div class="row" style="border-bottom:solid 1px #CCCCCC; border-top:solid 1px #CCCCCC;">
					<div class="col-md-4" style="text-align:left; color:#666666;">First Name
					</div>
					<div class="col-md-8" style="padding-bottom:10px; color:#666666;">
					  <?php echo $first_name; ?>
					</div>
				</div>
				
				<div class="row" style="border-bottom:solid 1px #CCCCCC;">
					<div class="col-md-4" style="text-align:left; color:#666666;">Last Name
					</div>
					<div class="col-md-8" style="padding-bottom:10px; color:#666666;">
					  <?php echo $last_name; ?>
					</div>
				</div>
						
				<div class="row" style="border-bottom:solid 1px #CCCCCC;">
					<div class="col-md-4" style="text-align:left; color:#666666;">Email Address
					</div>
					<div class="col-md-8" style="padding-bottom:10px; color:#666666;">
					  <?php echo $email; ?>
					</div>
				</div>
						
				<div class="row" style="border-bottom:solid 1px #CCCCCC;">
					<div class="col-md-4" style="text-align:left; color:#666666;">Phone Number
					</div>
					<div class="col-md-8" style="padding-bottom:10px; color:#666666;">
					  <?php echo $phone_no; ?>
					</div>
				</div>
						
				<div class="row" style="border-bottom:solid 1px #CCCCCC;">
					<div class="col-md-4" style="text-align:left; color:#666666;">Image
					</div>
					<div class="col-md-8" style="padding-bottom:10px; color:#666666;">
					  <img class="img-responsive" height="100px" width="100px" src="photo_gallery/<?php echo $image; ?>">
					</div>
				</div>
						
				<div class="row" style="border-bottom:solid 1px #CCCCCC;">
					<div class="col-md-4" style="text-align:left; color:#666666;">Company Name
					</div>
					<div class="col-md-8" style="padding-bottom:10px; color:#666666;">
					  <?php echo $company; ?>
					</div>
				</div>
				
				<div class="row" style="border-bottom:solid 1px #CCCCCC;">
					<div class="col-md-4" style="text-align:left; color:#666666;">Address 1
					</div>
					<div class="col-md-8" style="padding-bottom:10px; color:#666666;">
					  <?php echo $address_1; ?>
					</div>
				</div>
				
				<div class="row" style="border-bottom:solid 1px #CCCCCC;">
					<div class="col-md-4" style="text-align:left; color:#666666;">address 2
					</div>
					<div class="col-md-8" style="padding-bottom:10px; color:#666666;">
					  <?php echo $address_2; ?>
					</div>
				</div>
				
				<div class="row" style="border-bottom:solid 1px #CCCCCC;">
					<div class="col-md-4" style="text-align:left; color:#666666;">Country
					</div>
					<div class="col-md-8" style="padding-bottom:10px; color:#666666;">
					  <?php echo $country; ?>
					</div>
				</div>
				
				<div class="row" style="border-bottom:solid 1px #CCCCCC;">
					<div class="col-md-4" style="text-align:left; color:#666666;">City
					</div>
					<div class="col-md-8" style="padding-bottom:10px; color:#666666;">
					  <?php echo $city; ?>
					</div>
				</div>
				
				<div class="row" style="border-bottom:solid 1px #CCCCCC;">
					<div class="col-md-4" style="text-align:left; color:#666666;">post Code
					</div>
					<div class="col-md-8" style="padding-bottom:10px; color:#666666;">
					  <?php echo $post_code; ?>
					</div>
				</div>
				
				<div class="row" style="border-bottom:solid 1px #CCCCCC;">
					<div class="col-md-4" style="text-align:left; color:#666666;">User ID
					</div>
					<div class="col-md-8" style="padding-bottom:10px; color:#666666;">
					  <?php echo $user_id; ?>
					</div>
				</div>
						
			</div>
		</div>
			
		</div>
	</div>
</body>
</html>