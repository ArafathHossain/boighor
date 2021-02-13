<?php 
	session_start();
	error_reporting(0);
	$uniq_id	 = $_SESSION['uniq_id'];
	$customer_id = $_SESSION['customer_id'];
	require_once("webcontrol/connect_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php require_once("title.php"); ?></title>
	<?php require_once("metatag.php"); ?>
<!--Banner start-->	
    <script src="js/jquery.min.js"></script> 
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
<!--Banner end-->

<!--Top menu start-->
	<link rel="stylesheet" href="top_menu/styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="top_menu/script.js"></script>
<!--Top menu end-->

<!--Anather start-->	
	<link href="css_2/image_effect.css" rel="stylesheet">
	<link href="css_2/styles_1.css" rel="stylesheet">
<!--Anather end-->
<link rel="icon" href="image/fav.png" type="image/png" />
</head>
<body>

<div class="container" style="width:100%;">
<!--Banner Top menu start-->
	<?php require_once("banner_top_menu.php"); ?>
<!--Banner Top menu end-->

<!--Middle start-->
	<div class="row">
		<div align="center" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:30px; padding-top:20px;">
			PROFILE &nbsp;UPDATE 
		</div>
		<div class="col-md-1">
			&nbsp;
		</div>
		<div class="col-md-10" style="border:solid 1px #FF0000; border-radius:15px; padding-bottom:20px; padding-top:20px;">
		
			<?php
				$q = mysqli_query("select*from registration_form where id = '$customer_id'");
				$r = mysqli_fetch_array($q);
				$id 			= $r['id'];
				$name 			= $r['name'];
				$email 			= $r['email'];
				$phone_no 		= $r['phone_no'];
				$image 			= $r['image'];
				$address 	 	= $r['address'];
				
			?>
			<div class="col-md-6">
				<h4 style="color:#FF0000; padding-left:15px; padding-bottom:20px;">UPDATE YOUR USER ID & PASSWORD</h4>
				<div style="padding-left:15px; padding-bottom:20px;">
					<a href="userid_password_update.php"><span class="abc left1_btn left1_btn-1 left1_btn-1c" style="background:#FF0000;">Edit User Id</span></a>
				</div>
				<div style="padding-left:15px; padding-bottom:20px;">
					<a href="userid_password_update.php"><span class="abc left1_btn left1_btn-1 left1_btn-1c" style="background:#FF0000;">Password Update</span></a>
				</div>
				<div style="padding-left:15px; padding-bottom:20px;">
					<a href="forgotten_password_form.php"><span class="abc left1_btn left1_btn-1 left1_btn-1c" style="background:#FF0000;">Forgotten Password</span></a>
				</div>
			</div>
			
			<div class="col-md-6">
				<h4 style="color:#FF0000; padding-left:15px; padding-bottom:20px;">UPDATE YOUR PROFILE</h4>
				<div>
					<form class="form-horizontal" action="profile_update_action.php?id=<?php echo $customer_id ;?>" method="post" enctype="multipart/form-data">
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Your Name</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="text" class="form-control input-sm" name="name" id="name" value="<?php echo $name;?>" placeholder="Your Name *" required>
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Email Address</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="email" class="form-control input-sm" name="email" id="email" value="<?php echo $email;?>" placeholder="Email Address *" required>
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Mobile Number</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="text" class="form-control input-sm" name="phone_no" id="phone_no" value="<?php echo $phone_no;?>" placeholder="Mobile Number *" required>
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Your Photo</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="file" name="image" id="image" value=""  />
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Address</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <textarea class="form-control" rows="2" name="address" id="address" placeholder="Address"><?php echo $address;?></textarea>
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;"></span>
					<div class="col-md-8" align="left" style="padding-top:10px;">
						<button type="submit" value="Submit" class="btn btn-info btn-sm conf_btn">Update</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-1">
			&nbsp;
		</div>
	</div>
<!--Middle end-->

<!--footer start-->
	<?php require_once("footer.php"); ?>
<!--footer end-->

</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a422116bbdfe97b137fd4f3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</body>
</html>