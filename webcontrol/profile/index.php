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
		
	<script language="javascript" type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
	
	
</head>
<body style="background-color:#FFFFFF;">
	<div class="row" style="width:100%; padding-bottom:20px;">
	
		<?php require_once("../header.php");?>
	
		<div class="col-md-2">
			<?php require_once("../left_menu.php");?>
		</div>
		
		<?php
					$result 		= mysqli_query("select * from users order by id desc");
					$row 			= mysqli_fetch_array($result);
					$id 			= $row['id'];
					$userid 		= $row['userid'];
					$web 			= $row['web'];
					$email 			= $row['email'];
					$phone_no		= $row['phone_no'];
					$facebook 		= $row['facebook'];
					$youtube 		= $row['youtube'];
					$googleplus 	= $row['googleplus'];
					$address 		= $row['address'];
					$skype 			= $row['skype'];
					$image 			= $row['image'];
					$title 			= $row['title'];
					
		?>
		
		<div class="col-md-10">
			<div class="row shadow1" style="padding-top:10px; padding-bottom:10px; #CCCCCC; margin-top:15px; padding-left:15px;">
				<div class="col-md-11">
					<strong style="font-size:20px;">My Profile Update</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Control panel</span>
				</div>
				<div class="col-md-1">
					<img class="img-responsive" src="images/<?php echo $image; ?>" style="border-radius:8px;">
				</div>
			</div>
			<div class="row" style="padding-bottom:30px;">
				<div class="col-md-2">
				&nbsp;
				</div>
				<div class="col-md-8">
				<div class="row" style="padding-top:20px;">
				
				<form method="post" action="profile_upadate_action.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
					
					<label style="padding-top:20px;">Title</label>
					<input type="text" name="title" id="title" value="<?php echo $title; ?>" class="form-control" placeholder=" * Title" required>
					
					<label style="padding-top:20px;">Website Name</label>
					<input type="text" name="web" id="web" value="<?php echo $web; ?>" class="form-control" placeholder=" * Website Name" required>
					
					<label style="padding-top:20px;">Email Address</label>
					<input type="text" name="email" id="email" value="<?php echo $email; ?>" class="form-control" placeholder=" * Email Address" required>
					
					<label style="padding-top:20px;">User ID(Login ID)</label>
					<input type="text" name="user_id" id="user_id" value="<?php echo $userid; ?>" class="form-control" >
					
					<label style="padding-top:20px;">Phone No</label>
					<input type="text" name="phone_no" id="phone_no" value="<?php echo $phone_no; ?>" class="form-control" placeholder=" * Phone No" required>
					
					<label style="padding-top:20px;">Facebook</label>
					<input type="text" name="facebook" id="facebook" value="<?php echo $facebook; ?>" class="form-control" placeholder=" Facebook">
					
					<label style="padding-top:20px;">Youtube</label>
					<input type="text" name="youtube" id="youtube" value="<?php echo $youtube; ?>" class="form-control" placeholder=" Youtube">
					
					<label style="padding-top:20px;">Google Plus</label>
					<input type="text" name="googleplus" id="googleplus" value="<?php echo $googleplus; ?>" class="form-control" placeholder=" Google Plus">
					
					<label style="padding-top:20px;">Twitter</label>
					<input type="text" name="twitter" id="twitter" value="<?php echo $twitter; ?>" class="form-control" placeholder=" Twitter">
					
					<label style="padding-top:20px;">Address</label>
					<input type="text" name="address" id="address" value="<?php echo $address; ?>" class="form-control" placeholder=" * Address" required>
					
					<label style="padding-top:20px;">Skype</label>
					<input type="text" name="skype" id="skype" value="<?php echo $skype; ?>" class="form-control">
				
					<label style="padding-top:20px;">Photo</label> &nbsp;(269px  X  86px) 
					<input name="image" type="file" id="image" value="" class="myButton">
				
					<div style="padding-top:10px;"></div>
					<button class="btn btn-info">Update</button> &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-warning" type="reset" value="">Reset</button>
				
				</form>
			</div>
			
				<div class="row shadow1" align="center" style="padding-top:10px; padding-bottom:10px; #CCCCCC; margin-top:15px; padding-left:15px; margin-right:400px;">
				<a href="password_change.php" class="ch_pass"><strong>Change Password?</strong></a>
				</div>
			
				</div>
				<div class="col-md-2">
				&nbsp;
				</div>
			</div>
		</div>
	</div>
</body>
</html>