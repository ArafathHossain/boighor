<?php
	session_start();
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
<!--Bootstrap start-->
<script src="js/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<!--Bootstrap end-->
<!--Top menu start-->
<link rel="stylesheet" href="top_menu/styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="top_menu/script.js"></script>
<!--Top menu end-->
<!--Back to Top start-->
<!-- CSS reset -->
<link rel="stylesheet" href="css/style.css">
<!-- Gem style -->
<script src="js/modernizr.js"></script>
<!-- Modernizr -->
<!--Back to Top end-->
<!--Back to Top start-->
<link rel="stylesheet" href="css/resmenu.css">
<!-- Gem style -->
<script src="js/resmenu.js"></script>
<!-- Modernizr -->
<!--Back to Top end-->
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
<link rel="icon" href="" type="image/png" />
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container" style="width:100%;">
  <!--Banner Top menu start-->
  <?php require_once("banner_top_menu.php"); ?>
  <!--Banner Top menu end-->
  <!--Left menu & slider start-->
  <div class="row" style="padding:10px 0px 10px 0px;">
    <div class="col-md-2  hidden-sm hidden-xs  ">
      <?php require_once("left_menu.php"); ?>
    </div>
    <?php /*?><div class="col-md-2 hidden-md hidden-lg">
      <?php require_once("left_menu_responsive.php"); ?>
    </div><?php */?>
    <div class="col-md-8 " style="margin-left:12%">
      <?php require_once("slider.php"); ?>

    </div>
  </div>
  <!--Left menu & slider end-->
  <!--Middle start-->
  <?php
		$res1 = mysqli_query("select * from products_category order by cat_name asc");
		while($row = mysqli_fetch_array($res1)){

		$id 				= $row['id'];
		$cat_name 		= $row['cat_name'];
		$status 			= $row['status'];
	?>
  <div class="row" style="padding:5px 0px 10px 0px;">
    <div class="col-md-12">
      <div style=" background-color:#39619c; border-radius:8px 8px 0px 0px; color:#FFFFFF; font-size:20px; padding:10px 0px 10px 10px;"> <span style="text-align:left;"><?php echo $cat_name; ?></span> <span class="more_products_style" style="float:right; padding-right:20px;"> <a href='more_details.php?subdetails_id=<?php echo $id; ?>'><span>More Products</span></a> </span> </div>
    </div>
    <?php
		  $p2 = mysqli_query("select id from products_sub_category where cat_id = '$id'");
			while($q2 = mysqli_fetch_array($p2))
			{
			$ID = $q2['id'];
			$p1 = mysqli_query("select * from products_manage where sub_cat_id = '$ID' order by id desc limit 0,4");
			while($q1 = mysqli_fetch_array($p1))
			{
			$pro_id 				= $q1['id'];
			$sub_cat_id 			= $q1['sub_cat_id'];
			$name 					= $q1['name'];
			$old_price 				= $q1['old_price'];
			$price 					= $q1['price'];
			$image 					= $q1['image'];
			$status 				= $q1['status'];
		?>
    <div class="col-md-3" style="padding-top:25px;">
      <div class="col-md-12" style="border:solid 1px #39619c; padding-bottom:10px;">
        <div class="row">
          <div class="hovereffect"><img class="img-responsive" src="webcontrol/product_manage/photo_gallery/<?php echo $image; ?>" alt="product image" style="height:200px; padding-left:60px; padding-top:30px;">
            <div class="overlay"> <a class="info" href="product_details.php?pro_id=<?php echo $pro_id;?>">BUY NOW</a> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12" style="color:#666666; font-weight:bold; text-align:justify; padding-bottom:10px; padding-top:10px;"> <?php echo $name; ?> </div>
          <div>
            <div class="col-md-6">
              <?php if(!empty($old_price)){?>
              <div style="color:#39619c; text-decoration:line-through; font-weight:bold;">Reg : ৳<?php echo $old_price; ?></div>
              <?php } else { ?>
              <div>&nbsp;</div>
              <?php } ?>
              <div>Price : ৳<?php echo $price; ?></div>
            </div>
            <div class="col-md-6" align="center">
              <div class="row"> <a href="product_details.php?pro_id=<?php echo $pro_id;?>"><span class="abc left1_btn left1_btn-1 left1_btn-1c" style="background:#FF0000;">View Details</span></a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php } }?>
  </div>
  <?php } ?>


  <?php require_once("footer.php"); ?>





</div>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow23.js"></script>
<noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>
