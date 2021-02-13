<?php 
	require_once("../uservelidation.php");
	require_once("../connect_db.php");
	
	$id = $_REQUEST['id_edit'];
	$q1 = mysqli_query("select * from products_manage where id = '$id'");
	$r1 = mysqli_fetch_array($q1);
	
	$sub_cat_id				= $r1['sub_cat_id'];
	$name 					= $r1['name'];
	$product_code 			= $r1['product_code'];
	$availability 			= $r1['availability'];
	$discount 				= $r1['discount'];
	$old_price 				= $r1['old_price'];
	$price 					= $r1['price'];
	$status 				= $r1['status'];
	$image 					= $r1['image'];
	$description 			= $r1['description'];
	$short_details 			= $r1['short_details'];
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
			<strong style="font-size:20px;">Products Manage Update</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Control panel</span>
			</div>
			<div class="row" style="padding-bottom:30px;">
				<div class="col-md-2">
				&nbsp;
				</div>
				<div class="col-md-8">
				<div class="row" style="padding-top:20px;">
				<form method="post" action="products_manage_edit_action.php?id_edit=<?php echo $id; ?>" enctype="multipart/form-data">
			
					<label style="padding-top:20px;">Sub Products Category Name</label>
					<select name="sub_cat_id" id="sub_cat_id" class="form-control">
					<?php
						$q1 = mysqli_query("select * from products_sub_category where status = 'Active' order by id desc");
						while($r1 = mysqli_fetch_array($q1))
						{		
						$cetagory_id_db = $r1['id'];
						$sub_cat_name   = $r1['sub_cat_name'];
					?>
					<option <?php if($cetagory_id_db == $sub_cat_id) { ?> selected="selected" <?php } ?> value="<?php echo $cetagory_id_db; ?>"> <?php echo $sub_cat_name; ?> </option>
					<?php } ?>
					</select>
					
					<label style="padding-top:20px;">Products Name</label>
					<input type="text" name="name" id="name" value="<?php echo $name; ?>" class="form-control">
					
					<label style="padding-top:20px;">Products Code</label>
					<input type="text" name="product_code" id="product_code" value="<?php echo $product_code; ?>" class="form-control">
					
					<label style="padding-top:20px;">Availability</label>
					<select name="availability" class="form-control" id="availability">
					<option <?php if($availability == 'In Stock') { ?> selected="selected" <?php } ?> value="In Stock">In Stock</option>
                    <option <?php if($availability == 'Out Stock') { ?> selected="selected" <?php } ?> value="Out Stock">Out Stock</option>
                	</select>
					
					<label style="padding-top:20px;">Products Old Price</label>
					<input type="text" name="old_price" id="old_price" value="<?php echo $old_price; ?>" class="form-control">
					
					<label style="padding-top:20px;">Discount Price</label>
					<input type="text" name="discount" id="discount" value="<?php echo $discount; ?>" class="form-control">
					
					<label style="padding-top:20px;">Products New Price</label>
					<input type="text" name="price" id="price" class="form-control" value="<?php echo $price; ?>"  placeholder=" * Products New Price" required>
					
				
					<label style="padding-top:20px;">Status</label>
					<select name="status" class="form-control" id="status">
					<option <?php if($status == 'Active') { ?> selected="selected" <?php } ?> value="Active">Active</option>
                    <option <?php if($status == 'Inactive') { ?> selected="selected" <?php } ?> value="Inactive">Inactive</option>
                	</select>
					
					<label style="padding-top:20px;">1st Image</label>
					<input name="image" type="file" class="myButton" id="image" >
					
					<label style="padding-top:20px;">2nd Image</label>
					<input name="previous_image" type="file" class="myButton" id="previous_image" >
					
					<label style="padding-top:20px;">3th Image</label>
					<input name="last_previous_image" type="file" class="myButton" id="last_previous_image" >
					
					<label style="padding-top:20px;">Short details</label>
					<input type="text" name="short_details" id="short_details" value="<?php echo $short_details; ?>" class="form-control">
					
					<label style="padding-top:20px;">Description</label>
					<textarea name="description"  class="form-control" rows="20"><?php echo $description; ?></textarea>
				
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