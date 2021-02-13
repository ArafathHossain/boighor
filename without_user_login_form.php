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
</head>
<body>

<div class="container" style="width:100%;">
<!--Banner Top menu start-->
	<?php require_once("banner_top_menu.php"); ?>
<!--Banner Top menu end-->

<!--Middle start-->
	<div class="row" style="padding-bottom:30px;">
		<div align="center" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:30px; padding-top:20px;">
			ACOUNT PANEL
		</div>
		
		<div class="row" style="margin:0px 5px 30px 5px;">
			<div class="col-md-1">
				&nbsp;
			</div>
			<div class="col-md-10" style="border:solid 1px #FF0000; border-radius:15px; padding-bottom:30px; padding-top:10px;">
				<h4 style="color:#FF0000; padding-left:15px;">DIRECT ORDER</h4>
				<div style="color:#f0ad4e; padding-left:15px; padding-bottom:20px;">Direct Order without registration or login.</div>
				<div>
					<form class="form-horizontal" action="without_user_logininsert_action.php" method="post" enctype="multipart/form-data">
				  
					<span class="col-md-3 control-label" style="text-align:left; color:#666666;">Your Name</span>
					<div class="col-md-9" style="padding-bottom:10px;">
					  <input type="text" class="form-control input-sm" name="d_name" id="d_name" placeholder="Type Your Name *" required>
					</div>
					
					<span class="col-md-3 control-label" style="text-align:left; color:#666666;">Email Address</span>
					<div class="col-md-9" style="padding-bottom:10px;">
					  <input type="email" class="form-control input-sm" name="d_email" id="d_email" placeholder="Type Your Email Address">
					</div>
					
					<span class="col-md-3 control-label" style="text-align:left; color:#666666;">Mobile Number</span>
					<div class="col-md-9" style="padding-bottom:10px;">
					  <input type="text" class="form-control input-sm" name="d_phone_no" id="d_phone_no" placeholder="Type Your Mobile Number *" required>
					</div>
					
					<span class="col-md-3 control-label" style="text-align:left; color:#666666;">Shipping Address</span>
					<div class="col-md-9" style="padding-bottom:10px;">
					  <textarea class="form-control" rows="3" name="d_address" id="d_address" placeholder="Type Your Shipping Address"></textarea>
					</div>
					
					<span class="col-md-3 control-label" style="text-align:left; color:#666666;"></span>
					<div class="col-md-9">
					<button type="submit" value="Submit" class="btn btn-info btn-sm sned conf_btn">Send</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-warning btn-sm conf_btn_2" type="reset">Reset</button>
					</div>
					</form>
				</div>
			</div>
			<div class="col-md-1">
				&nbsp;
			</div>
		</div>
		
		<div class="row">
		<div class="col-md-1">
			&nbsp;
		</div>
		<div class="col-md-5">
			<div class="col-md-12" style="border:solid 1px #FF0000; border-radius:15px; padding:10px 0px 133px 0px;">
				<h4 style="color:#FF0000; padding-left:30px;">NEW CUSTOMER</h4>
				<div style="color:#f0ad4e; padding-left:30px; padding-bottom:20px;">Register Account.</div>
				<div>
					<p style="padding-left:30px; padding-right:30px; text-align:justify;">By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
					
					<div style="padding-left:30px;">
					<a href="registration_form.php"><button type="submit" class="btn btn-info btn-sm conf_btn">CONTINUE</button></a>
					</div>
					
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="col-md-12" style="border:solid 1px #FF0000; border-radius:15px; padding-bottom:20px; padding-top:10px;">
				<h4 style="color:#FF0000; padding-left:28px;">REGISTERED CUSTOMER</h4>
				<div style="color:#f0ad4e; padding-left:28px; padding-bottom:20px;">I am already registered.</div>
				<div style="padding-left:40px; padding-right:40px;">
					<form class="form-horizontal" action="user_login_form_action.php" method="post" enctype="multipart/form-data">
					
					<div class="form-group">
						<label for="exampleInputEmail1">User Id</label>
						<input type="text" class="form-control" name="user_id" id="user_id" placeholder="User Id *">
				    </div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Password</label>
						<input type="password" class="form-control" name="password123" id="password123" placeholder="Password *">
				    </div>
					
					<div class="form-group">
						<label for="exampleInputEmail1"></label>
						<button type="submit" value="Submit" class="btn btn-info btn-sm conf_btn">Login</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-warning btn-sm conf_btn_2" type="reset">Reset</button>
				    </div>
				  
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-1">
			&nbsp;
		</div>
		</div>
	</div>
<!--Middle end-->

<!--footer start-->
	<?php require_once("footer.php"); ?>
<!--footer end-->

</div>

</body>
</html>