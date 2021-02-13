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
	<div class="row" style="padding-bottom:50px;">
		<div align="center" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:30px; padding-top:20px;">
			Forgot Your Password?
		</div>
		
		<div class="col-md-1">
			&nbsp;
		</div>
		<div class="col-md-10">
			<div class="col-md-12" style="border:solid 1px #FF0000; border-radius:15px; padding-bottom:20px; padding-top:10px;">
				<h4 style="color:#FF0000; padding-left:28px;">YOUR EMAIL ADDRESS</h4>
				<div style="color:#f0ad4e; padding-left:28px; padding-bottom:20px;">Submit the email address associated with your account. You will receive the password through mail. login.</div>
				<div style="padding-left:40px; padding-right:40px;">
					<form class="form-horizontal" action="forgotten_password_action.php" method="post" enctype="multipart/form-data">
					
					<div class="form-group">
						<label for="exampleInputEmail1">Email Address</label>
						<input type="text" class="form-control" name="email" id="email" value="" required placeholder="Email Address *">
				    </div>
					
					<div class="form-group">
						<label for="exampleInputEmail1"></label>
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