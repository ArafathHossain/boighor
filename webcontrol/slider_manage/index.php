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
			<div class="row shadow1" style="padding-top:10px; padding-bottom:10px; #CCCCCC; margin-top:15px; padding-left:15px;">
			<strong style="font-size:20px;">Slider Image Manage</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Control panel</span>
			</div>
			<div class="row" style="padding-bottom:30px;">
				<div class="col-md-2">
				&nbsp;
				</div>
				<div class="col-md-8">
				<div class="row" style="padding-top:20px;">
				<form method="post" action="slider_insert_action.php" enctype="multipart/form-data">
										
					<label style="padding-top:20px;">Title</label>
					<input type="text" name="title" id="title" class="form-control" placeholder=" * Title" required>
				
					<label style="padding-top:20px;">Status</label>
					<select name="status" class="form-control" id="status">
               		<option value="Active" selected="selected">Active</option>
                	<option value="Inactive">Inactive</option>
                	</select>
					
					
                    
                    <label style="padding-top:20px;">Large Image</label>&nbsp;&nbsp;(960px &nbsp;X&nbsp; 360px)
					<input name="image2" type="file" class="myButton" id="image2" required>
					
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
				<strong>Title</strong>
				</div>
			</div>
            
            <div class="col-md-5">
				<div class="row">
				<strong>Large Image</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row" align="center">
				 <strong>Status</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				 <strong>Action</strong>
				</div>
			</div>
			</div>
			<?php
				$sn = 1;
				$p1= mysqli_query ("select * from slider_manage order by id asc");
				while($q1=mysqli_fetch_array($p1))
				{
				$id 				= $q1['id'];
				$title 				= $q1['title'];
				
				$image2 			= $q1['image2'];
				$status 			= $q1['status'];
				
			?>
			<div class="row" style="border-bottom:solid 1px #CCCCCC;">
				<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<?php echo $sn++; ?>
				</div>
				</div>
				<div class="col-md-4">
				<div class="row">
				<?php echo $title; ?>
				</div>
				</div>
                
                <div class="col-md-5">
				<div class="row">
                <img class="img-responsive" src="photo_gallery/<?php echo $image2; ?>">
				</div>
				</div>
				<div class="col-md-1">
				<div class="row" align="center">
				<?php echo $status; ?>
				</div>
			</div>
				<div class="col-md-1">
				<div class="row">
				<a href="slider_edit.php?id_edit=<?php echo $id; ?>"><img src="../image/edit.png"></a> &nbsp;|&nbsp; <a href="slider_delete_action.php?id_delete=<?php echo $id; ?>"><img src="../image/delete.png"></a>
				</div>
			</div>
			</div>
			<?php
				}
			?>
		</div>
	</div>
</body>
</html>