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
	<div class="row" style="padding-bottom:50px;">
		<div align="center" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:30px; padding-top:20px;">
			USER ID & PASSWORD UPDATE 
		</div>
		
		<?php
				$q = mysqli_query("select*from registration_form where id = '$customer_id'");
				$r = mysqli_fetch_array($q);
				$id 			= $r['id'];
				$user_id 		= $r['user_id'];
			?>
		
		<div class="col-md-1">
			&nbsp;
		</div>
		<div class="col-md-5">
			<div class="col-md-12" style="border:solid 1px #FF0000; border-radius:15px; padding-bottom:20px; padding-top:10px;">
				<h4 style="color:#FF0000; padding-left:28px;">USER ID UPDATE</h4>
				<div style="padding-left:40px; padding-right:40px;">
					<form class="form-horizontal" action="userid_update_action.php?id=<?php echo $customer_id; ?>" method="post" enctype="multipart/form-data">
					
					<div class="form-group">
						<label for="exampleInputEmail1">User Id</label>
						<input type="text" class="form-control" name="user_id" id="user_id" value="<?php echo $user_id; ?>" placeholder="User Id *">
				    </div>
					
					<div class="form-group">
						<label for="exampleInputEmail1"></label>
						<button type="submit" value="Submit" class="btn btn-info btn-sm conf_btn">Update</button>
				    </div>
				  
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="col-md-12" style="border:solid 1px #FF0000; border-radius:15px; padding-bottom:20px; padding-top:10px;">
				<h4 style="color:#FF0000; padding-left:28px;">UPDATE PASSWORD</h4>
				<div style="padding-left:40px; padding-right:40px;">
					<form class="form-horizontal" action="user_password_update_action.php?id=<?php echo $customer_id; ?>" method="post" enctype="multipart/form-data">
					
					<div class="form-group">
						<label for="exampleInputEmail1">Old Password</label>
						<input type="text" class="form-control" name="oldpass" id="oldpass" placeholder="Old Password *">
				    </div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">New Password</label>
						<input type="password" class="form-control" name="newpass" id="newpass" placeholder="New Password *">
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

</body>
</html>