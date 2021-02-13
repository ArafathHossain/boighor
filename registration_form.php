<?php
	session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- ON PAGE META SEO START -->
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

<!--Left menu start-->
	<link rel="stylesheet" href="left_menu/styles.css">
<!--Left menu end-->

<!--slider start-->
	<link rel="stylesheet" type="text/css" href="slider/images/demo/cloud-fly/engine1/style.css" />
	<script type="text/javascript" src="slider/images/demo/jquery.js"></script>
<!--slider menu end-->

<!--Anather start-->	
	<link href="css_2/image_effect.css" rel="stylesheet">
	<link href="css_2/styles_1.css" rel="stylesheet">
<!--Anather end-->
<link rel="icon" href="image/fav.png" type="image/png" />

	<style>
	
	.meg{
		color:red;
		font-weight:600;
	}
	</style>
</head>
<body>

<div class="container" style="width:100%;">
<!--Banner Top menu start-->
	<?php require_once("banner_top_menu.php"); ?>
<!--Banner Top menu end-->

<!--Middle start-->
	<div class="row">
		<div align="center" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:30px; padding-top:20px;">
			REGISTER ACCOUNT
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-8">
			<div class="col-md-12" style="border:solid 1px #FF0000; border-radius:15px; padding-bottom:20px; padding-top:10px;">
				<div style="color:#FF4242; padding-left:15px;">If you already have an account with us, please go to the login page to login.</div>
				<h4 style="color:#FF0000; padding-left:15px;">YOUR PERSONAL DETAILS</h4>
				<div>
					<form class="form-horizontal" action="registration_form_insert_action.php" method="post" enctype="multipart/form-data">
				  
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Your Name</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="text" class="form-control input-sm" name="name" id="name" placeholder="Your Name *" required>
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Email Address</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="email" class="form-control input-sm" name="email" id="email" placeholder="Email Address *" required>
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Mobile Number</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="text" class="form-control input-sm" name="phone_no" id="phone_no" placeholder="Mobile Number *" required>
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Your Photo</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="file" name="image" id="image" />
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Address</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <textarea class="form-control" rows="2" name="address" id="address" placeholder="Address"></textarea>
					</div>
					
					<h4 style="color:#FF0000; padding-left:15px;">YOUR PASSWORD</h4>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">User Id</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="text" class="form-control input-sm" name="user_id" id="user_id" placeholder="User Id *" required>
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Password</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="password" class="form-control input-sm" name="password" id="password" placeholder="Password *" required>
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Password Confirm</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="password" class="form-control input-sm" name="password_con" id="password_con" placeholder="Password Confirm *" required>
					  <span class="meg"></span>
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;"></span>
					<div class="col-md-8">
					<button type="submit" value="Submit" class="btn btn-info btn-sm sned conf_btn">Send</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-warning btn-sm conf_btn_2" type="reset">Reset</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
	</div>
<!--Middle end-->

<!--footer start-->
	<?php require_once("footer.php"); ?>
<!--footer end-->

</div>

<script>
	$("#password_con").on('keyup', function(){
		var password = $("#password").val();
		var password_con = $("#password_con").val();
		
		if(password == password_con){
			$(".meg").text("");
			$(".sned").removeAttr('disabled', 'disabled');
		} else {
			$(".meg").text("Password and Confirm Password Do not match!");
			$(".sned").attr('disabled', 'disabled');
		}
		
		
	});

</script>


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