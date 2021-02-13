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
		
		<div class="col-md-10">
			<div class="row shadow1" style="padding-top:10px; padding-bottom:10px; #CCCCCC; margin-top:15px; padding-left:15px;">
			<strong style="font-size:20px;">My Profile Password Update</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Control panel</span>
			</div>
			<div class="row" style="padding-bottom:30px;">
				<div class="col-md-2">
				&nbsp;
				</div>
				<div class="col-md-8">
				<div class="row" style="padding-top:20px;">
				<?php 
					$user_id = $_SESSION['user_id'];
					$q	=	mysqli_query("select * from users where id = '$user_id'");
					$r	=	mysqli_fetch_array($q);
					$id	= $r['id'];
					
				?>
				
				<form method="post" action="changepassaction.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
					
					<label style="padding-top:20px;">Old Password</label>
					<input type="text" name="oldpass" id="oldpass" class="form-control" required >
					
					<label style="padding-top:20px;">New Password</label>
					<input type="text" name="newpass" id="newpass" class="form-control" required  placeholder="New Password *">
				
					<div style="padding-top:10px;"></div>
					<button class="btn btn-info">Update</button> &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-warning" type="reset">Reset</button>
				
				</form>
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