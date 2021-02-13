<?php session_start();

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
<title>
<?php require_once("title.php"); ?>
</title>
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
<link href="css_2/styles_1.css" rel="stylesheet">
<!--Anather end-->
<!--add to cart start-->
<script type="text/javascript" src="js/ajax_function.js"></script>
<!--add to cart end-->
<link rel="icon" href="image/fav.png" type="image/png" />
</head>
<body>
<div class="container" style="width:100%;">
  <!--Banner Top menu start-->
  <?php require_once("banner_top_menu.php"); ?>
  <!--Banner Top menu end-->
  <!--Middle start-->
  <?php

	$q1  = mysqli_query("select product_id from temp_details where temp_id = '$uniq_id'");
	$ra1 = mysqli_fetch_array($q1);
	$pro_id = $ra1[0];
	
	if($pro_id)
	{
	
?>
  <div class="row" style="padding-bottom:200px;">
    <div align="center" style="font-size:28px; color:#00acee; font-weight:bold; padding-bottom:30px; padding-top:20px;"> SHOPPING CART DETAILS </div>
    <div class="row" style="border:solid 1px #00acee; border-radius:8px; margin-left:20px; margin-right:20px;">
      <div class="col-md-12" style="background-color:#00acee; border-radius:8px 8px 0px 0px; padding:10px 10px;">
        <div class="col-md-1" style="border-right:solid 1px #00acee; color:#FFFFFF; font-weight:bold;"> Detete </div>
        <div class="col-md-1" style="border-right:solid 1px #00acee; color:#FFFFFF; font-weight:bold;"> Image </div>
        <div class="col-md-5" style="border-right:solid 1px #00acee; color:#FFFFFF; font-weight:bold;"> Product Name </div>
        <div class="col-md-2" style="border-right:solid 1px #00acee; color:#FFFFFF; font-weight:bold;"> Product Code </div>
        <div class="col-md-1" style="border-right:solid 1px #00acee; color:#FFFFFF; font-weight:bold;"> Quantity </div>
        <div class="col-md-1" style="border-right:solid 1px #00acee; color:#FFFFFF; font-weight:bold;"> Unit Price </div>
        <div class="col-md-1" style="color:#FFFFFF; font-weight:bold;"> Total </div>
      </div>
      <?php
				$sub_total = 0; $total = 0; $total_delivery_chrg = 0;
						
				$q2 = mysqli_query("select product_id, product_qty, product_price from temp_details where temp_id = '$uniq_id'");
				while($ra2 = mysqli_fetch_array($q2))
				{
					
					$pro_id 			= $ra2[0];
					$product_qty 		= $ra2[1];
					$product_price 		= $ra2[2];
					
					
					$product_price_decimal = number_format($product_price, 2, '.', ',');
				
					
								
					$duly2 = mysqli_query("select * from products_manage where id = '$pro_id'");
					$ras2 = mysqli_fetch_array($duly2);
								
					$product_id 		= $ras2['id'];
					$root_cat_id 		= $ras2['cetagory_id'];
					$product_name 		= $ras2['name'];
					$image 		    	= $ras2['image'];
					$product_code 		= $ras2['product_code'];
					
					
					$total_price 		= $product_qty*$product_price;			
					$sub_total 			= $sub_total + $total_price;			
					$total 				= $sub_total;
					
					/*$total_delivery_chrg 		= $total_delivery_chrg + ($product_qty * $delivery_charge);*/
					
					$sub_total_decimal 			= number_format($sub_total, 2, '.', ',');
					$total_decimal 				= number_format($total, 2, '.', ',');			
					/*$delivery_charge_deciamal 	= number_format($delivery_charge_dhaka, 2, '.', '');*/
					$total_price_decimal 		= number_format($total_price, 2, '.', ',');
		  
				?>
      <div class="col-md-12" style="border-top:solid 1px #00acee;">
        <div class="col-md-1" style="border-right:solid 1px #00acee; height:80px; padding-top:25px;"> <a href="#"> <img class="img-responsive" src="image/Delete.png" onClick="remove_product('<?php echo $product_id; ?>')" alt="Remove" title="Remove"> </a> </div>
        <div class="col-md-1" style="border-right:solid 1px #00acee; height:80px;"> <img class="img-responsive" src="webcontrol/product_manage/photo_gallery/<?php echo $image; ?>"> </div>
        <div class="col-md-5" style="border-right:solid 1px #00acee; height:80px; padding-top:30px;"> <?php echo $product_name; ?> </div>
        <div class="col-md-2" style="border-right:solid 1px #00acee; height:80px; padding-top:30px;"> <?php echo $product_code; ?> </div>
        <div class="col-md-1" style="border-right:solid 1px #00acee; height:80px; padding-top:30px;">
          <input type="text" readonly="" value="<?php echo $product_qty; ?>" style="width:80px;">
        </div>
        <div class="col-md-1" style="border-right:solid 1px #00acee; height:80px; padding-top:30px;"> ৳<?php echo $product_price; ?> </div>
        <div class="col-md-1 gf" style="height:80px; padding-top:30px;"> ৳<?php echo $total_price; ?> </div>
      </div>
      <?php } ?>
      <div class="col-md-12" style="border-top:solid 1px #00acee;">
        <div class="col-md-10" style="border-right:solid 1px #00acee; padding:5px 5px;"> &nbsp; </div>
        <div class="col-md-1" align="right" style="font-weight:bold; border-bottom:solid 1px #00acee; padding:5px 5px;"> Sub Total : </div>
        <div class="col-md-1" style="border-bottom:solid 1px #00acee; font-weight:bold; padding:5px 5px;"> ৳<?php echo $sub_total_decimal; ?> </div>
      </div>
      <div class="col-md-12" style="padding:10px 10px;">
        <div class="col-md-6" align="left"> <a href="index.php"><span class="abc left2_btn left2_btn-1 left2_btn-1c" style="background:#00acee;">Continue Shopping</span></a> </div>
        <div class="col-md-6" align="right">
          <?php if (!empty($customer_id)){ ?>
          <a href="delivery_page.php"><span class="abc left2_btn left2_btn-1 left2_btn-1c" style="background:#00acee;">Checkout</span></a>
          <?php } else {  ?>
          <a href="user_login_form.php"><span class="abc left2_btn left2_btn-1 left2_btn-1c" style="background:#00acee;">Checkout</span></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <?php }else{?>
  <div class="row" style="padding-bottom:80px;">
    <div align="center" style="font-size:28px; color:#00acee; font-weight:bold; padding-bottom:30px; padding-top:20px;"> SHOPPING CART DETAILS </div>
    <div class="row" style="border:solid 1px #00acee; border-radius:8px; margin-left:20px; margin-right:20px;">
      <div class="col-md-12" align="center" style="font-size:24px; padding:150px 150px;"> YOUR SHOPPING CART IS EMPTY </div>
    </div>
  </div>
  <?php } ?>
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
