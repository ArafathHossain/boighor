<?php
	error_reporting(0); 
	session_start();
	$uniq_id	 = $_SESSION['uniq_id'];
	$customer_id = $_SESSION['customer_id'];
	$ebl		 = $_REQUEST['ebl'];
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
	<div class="row">
		       
		<div align="center" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:30px; padding-top:20px; text-align:center;">
			DELIVERY ADDRESS 
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
				$address 	 	= $r['address'];
				$District 	 	= $r['District'];
				$d_name 		= $r['d_name'];
				$d_email 		= $r['d_email'];
				$d_phone_no 	= $r['d_phone_no'];
				$d_address 	 	= $r['d_address'];
			?>
			<form class="form-horizontal" action="delivery_insert_action.php?customer_id=<?php echo $customer_id ;?>" method="post" enctype="multipart/form-data"> 
			<div class="col-md-6">
				<h4 style="color:#FF0000; padding-left:15px; padding-bottom:20px;"><i class="fa fa-user" aria-hidden="true"></i> BILLING ADDRESS</h4>
				<div>
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
					
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Address</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <textarea class="form-control" rows="2" name="address" id="address" value="" placeholder="Address"><?php echo $address;?></textarea>
					</div>
				</div>
			</div>
			
			<div class="col-md-6">
				<h4 style="color:#FF0000; padding-left:15px; padding-bottom:20px;"><i class="fa fa-truck" aria-hidden="true"></i> SHIPPING ADDRESS</h4>
				<div>
					<div class="checkbox" style="padding:0px 0px 15px 15px;">
						<label><input type="checkbox" id="willbsame">Shipping address will be same.</label>
					</div>
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Your Name</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="text" class="form-control input-sm" name="d_name" id="d_name" value="<?php echo $d_name;?>" placeholder="Your Name *" required>
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Email Address</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="email" class="form-control input-sm" name="d_email" id="d_email" value="<?php echo $d_email;?>" placeholder="Email Address *" required>
					</div>
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Mobile Number</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="text" class="form-control input-sm" name="d_phone_no" id="d_phone_no" value="<?php echo $d_phone_no;?>" placeholder="Mobile Number *" required>
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">District</span>
					<div class="col-md-8" style="padding-bottom:10px;">
						<select name="District" id="District" class="form-control" required>
							<option value="">Select District</option>
							<option  <?php if($District == 'Dhaka') { ?> selected="selected" <?php } ?> value="Dhaka">Dhaka</option>
							<option  <?php if($District == 'Others') { ?> selected="selected" <?php } ?> value="Others">Comilla</option>
							<option  <?php if($District == 'Others') { ?> selected="selected" <?php } ?> value="Others">Khulna</option>
						</select>
					</div>
					
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Address</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <textarea class="form-control" rows="2" name="d_address" id="d_address" value="" placeholder="Shipping Address"><?php echo $d_address;?></textarea>
					</div>
					
				</div>
			</div>
			<div class="col-md-12" align="center" style="padding-top:20px;">
				<button type="submit" value="Submit" class="btn btn-info btn-sm conf_btn"">Confirm order</button>
			</div>
			</form>
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


<script>
	
$(document).ready(function() {	 
  $('#willbsame').on('click', function ()
	{
		if ($(this).is(':checked') ) {
            $('#d_name').val($('#name').val());
			$('#d_email').val($('#email').val());
			$('#d_phone_no').val($('#phone_no').val());
			$('#d_address').val($('#address').val());
        }
        else {
			$('#d_name').val('');
			$('#d_email').val('');
			$('#d_phone_no').val('');
			$('#d_address').val('');
			
        }
 });
 });
 
 	
</script>


</body>
</html>