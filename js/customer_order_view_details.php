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
    <meta name="keywords" content=":cctv camera,ip camera,Wireless ap camera,PTZ camera,AHDVR,DVR,NVR,Box Camera,Bullet Camera,Dome Camera,Plug and Play,Time attendance Machine, security camera and hidden camera wholesale,retail sales company,Dealer in Dhaka,Bangladesh." />
    <meta name="description" content="We are the best, reliable,latest and original cctv camera,AHDVR,NVR,DVR and ip camera wholesale retail sales company,Dealer in Dhaka,Bangladesh.">
    
    <meta name="author" content="HOLIDAY IT SMART(HITS)">
    <meta name="language" content="EN">
    <meta name="owner" content="Badruzzaman Khan Pathan">
    <meta name="rating" content="General">
    <meta name="distribution" content="Global">
    
    <!-- Add the following three tags inside head -->
    <meta itemprop="name" content="HOLIDAY IT SMART(HITS)">
    <meta itemprop="description" content="We are the best, reliable,latest and original cctv camera,AHDVR,NVR,DVR and ip camera wholesale retail sales company,Dealer in Dhaka,Bangladesh.">
    <meta itemprop="image" content="http://hitscctv-ipcamera.com/image/itsmart_logo.png">
    <meta name="robots" content="INDEX,FOLLOW">
    <!-- End: Google +1 Button -->
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="HITS | Buy ahdvr,dvr,nvr,cctv and ip camera  in Bangladesh | CCTV,IP camera Services."/>
    <meta property="og:description" content="We are the best, reliable,latest and original cctv camera,AHDVR,NVR,DVR and ip camera wholesale retail sales company,Dealer in Dhaka,Bangladesh."/>
    <meta property="og:url" content="http://hitscctv-ipcamera.com/customer_order_view.php"/>
    <meta property="og:site_name" content="HOLIDAY IT SMART(HITS)"/>
    <meta property="og:image" content="http://hitscctv-ipcamera.com/image/itsmart_logo.png"/>
<!-- ON PAGE META SEO END -->

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

</head>
<body>

<div class="container" style="width:100%;">
<!--Banner Top menu start-->
	<?php require_once("banner_top_menu.php"); ?>
<!--Banner Top menu end-->

<!--Middle start-->

	<div class="row" style="padding-bottom:175px;">
		<div align="center" style="font-size:28px; color:#00acee; font-weight:bold; padding-bottom:30px; padding-top:20px;">
			CUSTOMER ORDER HISTORY	
		</div>
		
		<div align="center" style="font-size:20px; color:#5d9901; padding-bottom:20px;">
			Your order has been received. Thank you for sending order. <a href="index.php"><span class="abc left2_btn left2_btn-1 left2_btn-1c" style="background:#00acee;">OK</span></a>
		</div>
		
		<div class="row" style="border:solid 1px #00acee; border-radius:8px; margin-left:20px; margin-right:20px;">
			<div class="col-md-12" style="background-color:#00acee; border-radius:8px 8px 0px 0px; padding:10px 10px;">
				<div class="col-md-1" style="border-right:solid 1px #00acee; color:#FFFFFF; font-weight:bold;">
					SL NO	
				</div>
				<div class="col-md-2" style="border-right:solid 1px #00acee; color:#FFFFFF; font-weight:bold;">
					Image	
				</div>
				<div class="col-md-4" style="border-right:solid 1px #00acee; color:#FFFFFF; font-weight:bold;">
					Product Name	
				</div>
				<div class="col-md-2" style="border-right:solid 1px #00acee; color:#FFFFFF; font-weight:bold;">
					Product Code	
				</div>
				<div class="col-md-1" style="border-right:solid 1px #00acee; color:#FFFFFF; font-weight:bold;">
					Unit Price	
				</div>
				<div class="col-md-1" style="border-right:solid 1px #00acee; color:#FFFFFF; font-weight:bold;">
					 Quantity	
				</div>
				<div class="col-md-1" style="border-right:solid 1px #00acee; color:#FFFFFF; font-weight:bold;">
					Total Price	
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
				
				$qa2 = mysql_query("select * from order_details where uniq_id = '$uniq_id'");
				while($ra2 = mysql_fetch_array($qa2))
					{				
						$product_id 	= $ra2['product_id'];
						$product_qty 	= $ra2['product_qty'];
						$product_price 	= $ra2['product_price'];
						
						$TotalProdQnt 		= $TotalProdQnt + $product_qty;
						$TotalOrderAmt 		= $TotalOrderAmt + ($product_qty * $product_price);
				
					$GrandTotal 	= $TotalOrderAmt * $TotalProdQnt;
					
					$q20 = mysql_query("select * from  products_manage where id = '$product_id'");
					$r20 = mysql_fetch_array($q20);
					$image 	        = $r20['image'];
					$product_name 	= $r20['name'];
					$product_code 	= $r20['product_code'];
			 ?>
			<div class="col-md-12" style="border-top:solid 1px #00acee;">
				<div class="col-md-1" style="border-right:solid 1px #00acee; height:80px; padding-top:30px;">
					<?php echo $i++; ?>
				</div>
				<div class="col-md-2" style="border-right:solid 1px #00acee; height:80px;">
					<img height="80" width="80" src="webcontrol/product_manage/photo_gallery/<?php echo $image; ?>">	
				</div>
				<div class="col-md-4" style="border-right:solid 1px #00acee; height:80px; padding-top:30px;">
					<?php echo $product_name; ?>	
				</div>
				<div class="col-md-2" style="border-right:solid 1px #00acee; height:80px; padding-top:30px;">
					<?php echo $product_code; ?>	
				</div>
				<div class="col-md-1" style="border-right:solid 1px #00acee; height:80px; padding-top:30px;">
					<?php echo $product_price; ?>	
				</div>
				<div class="col-md-1" style="border-right:solid 1px #00acee; height:80px; padding-top:30px; text-align:center">
					 <?php echo $product_qty; ?>
				</div>
				<div class="col-md-1" style="border-right:solid 0px #00acee; height:80px; padding-top:30px;">
					৳<?php echo $GrandTotal; ?>
				</div>
				
			</div>
			 <?php } ?>
		</div>
	</div>

<!--Middle end-->

<!--footer start-->
	<?php require_once("footer.php"); ?>
<!--footer end-->

</div>

</body>
</html>