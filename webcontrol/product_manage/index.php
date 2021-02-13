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
	<script language="javascript" type="text/javascript">
	tinyMCE.init({
		mode : "exact",
		elements : "ajaxfilemanager",
		theme : "advanced",
	plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
	theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
	theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
	theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",

		theme_advanced_buttons1_add_before : "newdocument,separator",
		theme_advanced_buttons1_add : "fontselect,fontsizeselect",
		theme_advanced_buttons2_add : "separator,forecolor,backcolor,liststyle",
		theme_advanced_buttons2_add_before: "cut,copy,separator,",
		theme_advanced_buttons3_add_before : "",
		theme_advanced_buttons3_add : "media",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		extended_valid_elements : "hr[class|width|size|noshade]",
		file_browser_callback : "ajaxfilemanager",
		paste_use_dialog : false,
		theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : true,
		apply_source_formatting : true,
		force_br_newlines : true,
		force_p_newlines : false,	
		relative_urls : true
	});

	function ajaxfilemanager(field_name, url, type, win) {
		var ajaxfilemanagerurl = "jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php";
		switch (type) {
			case "image":
				break;
			case "media":
				break;
			case "flash": 
				break;
			case "file":
				break;
			default:
				return false;
		}
		tinyMCE.activeEditor.windowManager.open({
			url: "jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php",
			width: 782,
			height: 440,
			inline : "yes",
			close_previous : "no"
		},{
			window : win,
			input : field_name
		});
		
	}
</script>
	
</head>
<body style="background-color:#FFFFFF;">
	<div class="row" style="width:100%; padding-bottom:20px;">
	
		<?php require_once("../header.php");?>
	
		<div class="col-md-2">
			<?php require_once("../left_menu.php");?>
		</div>
		<div class="col-md-10">
			<div class="row shadow1" style="padding-top:10px; padding-bottom:10px; #CCCCCC; margin-top:15px; padding-left:15px;">
			<strong style="font-size:20px;">Products Manage</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Control panel</span>
			</div>
			<div class="row" style="padding-bottom:30px;">
				<div class="col-md-2">
				&nbsp;
				</div>
				<div class="col-md-8">
				<div class="row" style="padding-top:20px;">
				<form method="post" action="products_manage_insert_action.php" enctype="multipart/form-data">
			
					<label style="padding-top:20px;">Sub Products Category Name</label>
					<select name="sub_cat_id" id="sub_cat_id" class="form-control" onChange="product_view();">
					<option value="" selected>Select Sub Category</option>
					<?php
						$q1 = mysqli_query("select * from products_sub_category where status = 'Active' order by id desc");
						while($r1 = mysqli_fetch_array($q1))
						{		
						$sub_cat_id = $r1['id'];
						$sub_cat_name = $r1['sub_cat_name'];
					?>
					<option value="<?php echo $sub_cat_id; ?>"> <?php echo $sub_cat_name; ?></option>
					<?php } ?>
					</select>
					
					<label style="padding-top:20px;">Products Name</label>
					<input type="text" name="name" id="name" class="form-control" placeholder=" * Products Name" required>
					
					<label style="padding-top:20px;">Products Code</label>
					<input type="text" name="product_code" id="product_code" class="form-control" placeholder=" * Products Code">
					
					<label style="padding-top:20px;">Availability</label>
					<select name="availability" class="form-control" id="availability">
               		<option value="In Stock" selected="selected">In Stock</option>
                	<option value="Out Stock">Out Stock</option>
                	</select>
					
					<label style="padding-top:20px;">Discount Price</label>
					<input type="text" name="discount" id="discount" class="form-control" placeholder="Discount Price">
					
					<label style="padding-top:20px;">Products Old Price</label>
					<input type="text" name="old_price" id="old_price" class="form-control" placeholder="Products Old Price">
					
					<label style="padding-top:20px;">Products New Price</label>
					<input type="text" name="price" id="price" class="form-control" placeholder=" * Products New Price" required>
				
					<label style="padding-top:20px;">Status</label>
					<select name="status" class="form-control" id="status">
               		<option value="Active" selected="selected">Active</option>
                	<option value="Inactive">Inactive</option>
                	</select>
					
						<label style="padding-top:20px;">1st Image (Size-500X500)</label>
					<input name="image" type="file" class="myButton" id="image" required>
					
					<label style="padding-top:20px;">2nd Image</label>
					<input name="previous_image" type="file" class="myButton" id="previous_image" >
					
					<label style="padding-top:20px;">3th Image</label>
					<input name="last_previous_image" type="file" class="myButton" id="last_previous_image" >
					
					<label style="padding-top:20px;">Short details</label>
					<input type="text" name="short_details" id="short_details" class="form-control" placeholder=" * Short details" required>
					
					<label style="padding-top:20px;">Description</label>
					<textarea name="description" class="form-control" rows="20"></textarea>
					
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
			<div class="col-md-2">
				<div class="row">
				<strong>Sub Products Category Name</strong>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
				<strong>Products Name</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				<strong>Discount price</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				<strong>Old price</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				<strong>New price</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				<strong>Image</strong>
				</div>
			</div>
			<div class="col-md-1" align="center">
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
			<div class="row" id="div_for_view">
			<?php
				$sn = 1;
				$p1= mysqli_query ("select * from products_manage order by id desc");
				while($q1=mysqli_fetch_array($p1))
				{
				$id 					= $q1['id'];
				$sub_cat_id 			= $q1['sub_cat_id'];
				$name 					= $q1['name'];
				$product_code 			= $q1['product_code'];
				$discount 				= $q1['discount'];
				$old_price 				= $q1['old_price'];
				$price 					= $q1['price'];
				$status 				= $q1['status'];
				$image 					= $q1['image'];
				
				$q2 = mysqli_query("select sub_cat_name from  products_sub_category where id = '$sub_cat_id'");
              	$r2 = mysqli_fetch_array($q2);
                $sub_cat_name = $r2['0']; 
			?>
			<div class="row" style="border-bottom:solid 1px #CCCCCC; padding-left:15px; padding-right:15px;">
				<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<?php echo $sn++; ?>
				</div>
				</div>
				<div class="col-md-2">
				<div class="row">
				<?php echo $sub_cat_name; ?>
				</div>
				</div>
				<div class="col-md-3">
				<div class="row">
				<?php echo $name; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<?php echo $discount; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<?php echo $old_price; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<?php echo $price; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<img class="img-responsive" style="height:40px;; width:40px;" src="photo_gallery/<?php echo $image; ?>">
				</div>
				</div>
				<div class="col-md-1" align="center">
				<div class="row">
				<?php echo $status; ?>
				</div>
			</div>
				<div class="col-md-1">
				<div class="row">
				<a href="products_manage_edit.php?id_edit=<?php echo $id; ?>"><img src="../image/edit.png"></a> &nbsp;|&nbsp; <a href="products_manage_delete_action.php?id_delete=<?php echo $id; ?>"><img src="../image/delete.png"></a>
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