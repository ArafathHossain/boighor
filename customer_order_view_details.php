<?php 
	session_start();
	$customer_id = $_SESSION['customer_id'];	
	require_once("webcontrol/connect_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- ON PAGE META SEO START -->
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

	<div class="row" style="padding-bottom:175px;">
		<div align="center" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:30px; padding-top:20px;">
			CUSTOMER ORDER HISTORY	
		</div>
		
		<div align="center" style="font-size:20px; color:#FF4242; padding-bottom:20px;">
			Your order has been received. Thank you for sending order. <a href="index.php"><span class="abc left2_btn left2_btn-1 left2_btn-1c" style="background:#FF0000;">OK</span></a>
		</div>
		
		<div class="row" style="border:solid 1px #FF0000; border-radius:8px; margin-left:20px; margin-right:20px;">
			<div class="col-md-12" style="background-color:#FF0000; border-radius:8px 8px 0px 0px; padding:10px 10px;">
				<div class="col-md-1" style="border-right:solid 1px #FFFFFF; color:#FFFFFF; font-weight:bold;">
					SL NO	
				</div>
				<div class="col-md-2" style="border-right:solid 1px #FFFFFF; color:#FFFFFF; font-weight:bold;">
					Image	
				</div>
				<div class="col-md-4" style="border-right:solid 1px #FFFFFF; color:#FFFFFF; font-weight:bold;">
					Product Name	
				</div>
				<div class="col-md-2" style="border-right:solid 1px #FFFFFF; color:#FFFFFF; font-weight:bold;">
					Product Code	
				</div>
				<div class="col-md-1" style="border-right:solid 1px #FFFFFF; color:#FFFFFF; font-weight:bold;">
					Unit Price	
				</div>
				<div class="col-md-1" style="border-right:solid 1px #FFFFFF; color:#FFFFFF; font-weight:bold;">
					 Quantity	
				</div>
				<div class="col-md-1" style="border-right:solid 1px #FFFFFF; color:#FFFFFF; font-weight:bold;">
				 Price	
				</div>
				
			</div>
			
			<?php
				$i = 1;
				$sub_total = 0; 
				$total = 0; 
				$grand_total = 0;
				$TotalProdQnt = 0;
				$TotalOrderAmt =  0;
				
				$uniq_id	 = $_REQUEST['uniq_id'];
				
				$qa2 = mysqli_query("select * from order_details where uniq_id = '$uniq_id'");
				while($ra2 = mysqli_fetch_array($qa2))
					{				
						$product_id 	= $ra2['product_id'];
						$product_qty 	= $ra2['product_qty'];
						$product_price 	= $ra2['product_price'];
						
						$TotalProdQnt 		= $TotalProdQnt + $product_qty;
						$TotalOrderAmt 		= $TotalOrderAmt + ($product_qty * $product_price);
						
						$sub_total = $sub_total + $product_price;
						$GrandTotal 	= $product_price * $product_qty;
						
					$q341 = mysqli_query("select * from order_info where uniq_id = '$uniq_id' order by id desc");
					$r423421 = mysqli_fetch_array($q341);
				
					$total_delivery_crge 			  	= $r423421['total_delivery_crge'];
					$total_amounts 			  	= $sub_total + $total_delivery_crge;
					
					
					$q20 = mysqli_query("select * from  products_manage where id = '$product_id'");
					$r20 = mysqli_fetch_array($q20);
					$image 	        = $r20['image'];
					$product_name 	= $r20['name'];
					$product_code 	= $r20['product_code'];
			 ?>
			<div class="col-md-12" style="border-top:solid 1px #FF0000;">
				<div class="col-md-1" style="border-right:solid 1px #FF0000; height:80px; padding-top:30px;">
					<?php echo $i++; ?>
				</div>
				<div class="col-md-2" style="border-right:solid 1px #FF0000; height:80px; padding-left:60px;">
					<img height="80" width="80" src="webcontrol/product_manage/photo_gallery/<?php echo $image; ?>">	
				</div>
				<div class="col-md-4" style="border-right:solid 1px #FF0000; height:80px; padding-top:30px;">
					<?php echo $product_name; ?>	
				</div>
				<div class="col-md-2" style="border-right:solid 1px #FF0000; height:80px; padding-top:30px;">
					<?php echo $product_code; ?>	
				</div>
				<div class="col-md-1" style="border-right:solid 1px #FF0000; height:80px; padding-top:30px;">
					<?php echo $product_price; ?>	
				</div>
				<div class="col-md-1" style="border-right:solid 1px #FF0000; height:80px; padding-top:30px; text-align:center">
					 <?php echo $product_qty; ?>
				</div>
				<div class="col-md-1" style="border-right:solid 0px #FF0000; height:80px; padding-top:30px;">
					৳<?php echo $GrandTotal; ?>
				</div>
				
			</div>
			 <?php } ?>
			 
			 <div class="col-md-12" style="border-top:solid 1px #FF0000;">
				<div class="col-md-9"></div>
				<div class="col-md-2" style="border-right:solid 1px #FF0000; height:40px; padding-top:10px; text-align:right;">
					 Sub Total Amount =
				</div>
				<div class="col-md-1" style="border-right:solid 0px #FF0000; height:40px; padding-top:10px;">
					৳<?php echo $sub_total; ?>
				</div>
				
			</div>
			 <div class="col-md-12">
				<div class="col-md-9"></div>
				<div class="col-md-2" style="border-right:solid 1px #FF0000; height:40px; padding-top:10px; text-align:right;">
					 Delivery cost =
				</div>
				<div class="col-md-1" style="border-right:solid 0px #FF0000; height:40px; padding-top:10px;">
					৳ <?php echo $total_delivery_crge; ?>
				</div>
				
			</div>
			<div class="col-md-12">
				<div class="col-md-9"></div>
				<div class="col-md-2" style="border-right:solid 1px #FF0000; height:40px; padding-top:10px; text-align:right;">
					Total Amount =
				</div>
				<div class="col-md-1" style="border-right:solid 0px #FF0000; border-top:2px #FF0000 solid; height:40px; padding-top:10px;">
					৳ <?php echo $total_amounts; ?>/=
				</div>
				
			</div>
			 
			 
		</div>
	</div>

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