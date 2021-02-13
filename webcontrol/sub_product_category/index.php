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
	<script type="text/javascript" language="javascript" src="sub_category_ajax_function.js"></script>

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
			<strong style="font-size:20px;">Sub Products Category Manage</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Control panel</span>
			</div>
			<div class="row" style="padding-bottom:30px;">
				<div class="col-md-2">
				&nbsp;
				</div>
				<div class="col-md-8">
				<div class="row" style="padding-top:20px;">
				<form method="post" action="product_categories_action.php" enctype="multipart/form-data">
				
					<label style="padding-top:20px;">Products Category Name</label>
					<select name="cat_id" id="cat_id" class="form-control" onChange="datewise();">
					<option value="" selected>Select Category</option>
					<?php
						$q1 = mysqli_query("select * from products_category where status = 'Active' order by id desc");
						while($r1 = mysqli_fetch_array($q1))
						{		
						$cetagory_id = $r1['id'];
						$cat_name = $r1['cat_name'];
					?>
					<option  value="<?php echo $cetagory_id; ?>"> <?php echo $cat_name; ?></option>
					<?php } ?>
					</select>
					
					<label style="padding-top:20px;">Sub Products Category Name</label>
					<input type="text" name="sub_cat_name" id="sub_cat_name" class="form-control" placeholder=" * Sub Products Category Name" required>
				
					<label style="padding-top:20px;">Status</label>
					<select name="status" class="form-control" id="status">
               		<option value="Active" selected="selected">Active</option>
                	<option value="Inactive">Inactive</option>
                	</select>
				
					<div style="padding-top:10px;"></div>
					<button class="btn btn-info">Submit</button> &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-warning" type="reset">Reset</button>
				
				</form>
			</div>
				</div>
				<div class="col-md-2">
				&nbsp;
				</div>
			</div>
			<div class="row" style="padding-top:5px; padding-bottom:5px; border-top:solid 1px #CCCCCC; border-bottom:solid 1px #CCCCCC; background-color:#F8F8F8;">
			<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<strong>Sr. No</strong>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
				<strong>Products Category Name</strong>
				</div>
			</div>
			<div class="col-md-5">
				<div class="row">
				<strong>Sub Products Category Name</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				 <strong>Status</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				 <strong>Action</strong>
				</div>
			</div>
			</div>
		<div class="row" id="div_for_view" style="border-bottom:solid 1px #CCCCCC;">
			<?php
				$sn = 1;
				$p1= mysqli_query ("select * from products_sub_category order by id asc");
				while($q1=mysqli_fetch_array($p1))
				{
				$id 					= $q1['id'];
				$cat_id 				= $q1['cat_id'];
				$sub_cat_name 			= $q1['sub_cat_name'];
				$status 				= $q1['status']; 
				
				$q2 = mysqli_query("select cat_name from  products_category where id = '$cat_id'");
              	$r2 = mysqli_fetch_array($q2);
                $cat_name = $r2['0']; 
				
			?>
			<div class="row"  style="border-bottom:solid 1px #CCCCCC; padding-left:15px; padding-right:15px;">
				<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<?php echo $sn++; ?>
				</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<?php echo $cat_name; ?>
					</div>
				</div>
				<div class="col-md-5">
					<div class="row">
					<?php echo $sub_cat_name; ?>
					</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<?php echo $status; ?>
				</div>
			</div>
				<div class="col-md-1">
				<div class="row">
				<a href="product_categories_edit.php?id_edit=<?php echo $id; ?>"><img src="../image/edit.png"></a> &nbsp;|&nbsp; 
				<a href="#=<?php echo $id; ?>"><img src="../image/delete.png" onClick="menu_delete(<?php echo $id; ?>);"></a>
				</div>
			</div>
			</div>
			<?php
			}
				
			?>
		</div>
		</div>
	</div>
</body>
</html>
<script src="ajax.js"></script>