<?php
	require_once("../uservelidation.php");
	require_once("../connect_db.php");
	
	$OrderNO = htmlspecialchars($_REQUEST['OrderNO'], ENT_QUOTES, 'UTF-8');
	
	$q1 = mysqli_query("select * from order_details where uniq_id = '$OrderNO'");
	$r1 = mysqli_fetch_array($q1);
	
	$customer_id  = $r1['customer_id'];
	$uniq_id      = $r1['uniq_id'];
	$order_from   = $r1['order_from'];
	$order_status = $r1['order_status'];
	
	$q11 = mysqli_query("select email from registration_form where id = '$customer_id'");
	$r11 = mysqli_fetch_array($q11);
	$email = $r11[0];
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
		<div class="row shadow1" style="padding-top:10px; padding-bottom:10px; margin-top:15px; padding-left:15px;">
			<strong style="font-size:20px;">Product Order Details</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Control panel</span>
			</div>
        <form name="duly" method="post" action="pro_order_update.php?OrderID=<?php echo $OrderNO; ?>">
        <?php
		  		$q4321 = mysqli_query("select * from registration_form where email = '$email'");
				$r4321 = mysqli_fetch_array($q4321);
				
				$cust_name     = $r4321['d_name'];
				$cust_phone    = $r4321['d_phone_no'];
				$d_email       = $r4321['d_email'];
				$cust_address  = $r4321['d_address'];
				
			
				$q1 = mysqli_query("select * from order_info where uniq_id = '$OrderNO'");
				$r1 = mysqli_fetch_array($q1);
			
				$date_time 			    = $r1['date_time'];
				$uniq_id 				= $r1['uniq_id'];
				$total_delivery_crge 	= $r1['total_delivery_crge'];
				$status 				= $r1['status'];
				
		  ?>
		  
		<div class="row" style="padding-top:20px;">
			<div class="col-md-12">
				<div class="row">
				<div class="col-md-6">
				<strong style="font-size:18px; color:#666666; margin-left:15px; border-bottom:solid 1px #666666;">Shipping Address</strong>
				<div style="padding-top:10px;">
					<div class="col-md-4" style="text-align:left; color:#666666;">Name</div>
					<div class="col-md-8" style="color:#666666;">: <?php echo $cust_name; ?></div>
				</div>
				<div>
					<div class="col-md-4" style="text-align:left; color:#666666;">Phone No</div>
					<div class="col-md-8" style="color:#666666;">: <?php echo $cust_phone; ?></div>
				</div>
				<div>
					<div class="col-md-4" style="text-align:left; color:#666666;">Email Address</div>
					<div class="col-md-8" style="color:#666666;">: <?php echo $d_email; ?></div>
				</div>
				<div>
					<div class="col-md-4" style="text-align:left; color:#666666;">Address</div>
					<div class="col-md-8" style="color:#666666;">: <?php echo $cust_address; ?></div>
				</div>
				</div>
				
				
				<?php
					$q99 = mysqli_query("select * from payment_process where uniq_id = '$uniq_id'");
					$r99 = mysqli_fetch_array($q99);
					
					$payment_type     		= $r99['payment_type'];
					$receipt_number     	= $r99['receipt_number'];
					$bank_account_number    = $r99['bank_account_number'];
					$bank_account_name     	= $r99['bank_account_name'];
					$bank_name     			= $r99['bank_name'];
					$amount     			= $r99['amount'];
					$trxid     				= $r99['trxid'];
					$payment_date     		= $r99['payment_date'];
				?>
				
				<?php if($payment_type == 1) { ?> 
				<div class="col-md-6">
				<strong style="font-size:18px; color:#666666; margin-left:15px; border-bottom:solid 1px #666666;">Bank Payment Details</strong>
				<div style="padding-top:10px;">
					<div class="col-md-4" style="text-align:left; color:#666666;">Receipt Number</div>
					<div class="col-md-8" style="color:#666666;">: <?php echo $receipt_number; ?></div>
				</div>
				<div>
					<div class="col-md-4" style="text-align:left; color:#666666;">Bank Account Number</div>
					<div class="col-md-8" style="color:#666666;">: <?php echo $bank_account_number; ?></div>
				</div>
				<div>
					<div class="col-md-4" style="text-align:left; color:#666666;">Bank Account Name</div>
					<div class="col-md-8" style="color:#666666;">: <?php echo $bank_account_name; ?></div>
				</div>
				<div>
					<div class="col-md-4" style="text-align:left; color:#666666;">Bank Name</div>
					<div class="col-md-8" style="color:#666666;">: <?php echo $bank_name; ?></div>
				</div>
				<div>
					<div class="col-md-4" style="text-align:left; color:#666666;">Amount</div>
					<div class="col-md-8" style="color:#666666;">: <?php echo $amount; ?></div>
				</div>
				<div>
					<div class="col-md-4" style="text-align:left; color:#666666;">Payment Date</div>
					<div class="col-md-8" style="color:#666666;">: <?php echo $payment_date; ?></div>
				</div>
				</div>
				<?php } else { ?>
				<div class="col-md-6">
				<strong style="font-size:18px; color:#666666; margin-left:15px; border-bottom:solid 1px #666666;">BKash Payment Details</strong>
				<div style="padding-top:10px;">
					<div class="col-md-4" style="text-align:left; color:#666666;">BKash Phone Number</div>
					<div class="col-md-8" style="color:#666666;">: <?php echo $bank_account_number; ?></div>
				</div>
				<div>
					<div class="col-md-4" style="text-align:left; color:#666666;">Amount</div>
					<div class="col-md-8" style="color:#666666;">: <?php echo $amount; ?></div>
				</div>
				<div>
					<div class="col-md-4" style="text-align:left; color:#666666;">Bkash TrxID</div>
					<div class="col-md-8" style="color:#666666;">: <?php echo $trxid; ?></div>
				</div>
				<div>
					<div class="col-md-4" style="text-align:left; color:#666666;">Payment Date</div>
					<div class="col-md-8" style="color:#666666;">: <?php echo $payment_date; ?></div>
				</div>
				</div>
				 <?php } ?>
				
				
				</div>
						
				<div class="row" style="padding-top:5px; padding-bottom:5px; border-top:solid 1px #CCCCCC; border-bottom:solid 1px #CCCCCC; background-color:#F8F8F8; margin-top:40px;">
			<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<strong>Sl. No</strong>
				</div>
			</div>
            <div class="col-md-1">
				<div class="row">
				<strong>Image</strong>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
				<strong>Product Name</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				<strong>Code</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				 <strong>Price</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				<strong>Quantity</strong>
				</div>
			</div>
            
			<div class="col-md-1">
				<div class="row" align="right">
				 <strong>Total</strong>
				</div>
			</div>
			</div>
	<?php
		$i = 1;
  		$sub_total = 0; 
		$total = 0; 
		$grand_total = 0;
		
		$q1 = mysqli_query("select * from order_info where uniq_id = '$OrderNO'");
		$r1 = mysqli_fetch_array($q1);
		
			
			$date_time 			    = $r1['date_time'];
			$uniq_id 				= $r1['uniq_id'];
			$total_delivery_crge 	= $r1['total_delivery_crge'];
			$status 				= $r1['status'];
		
		$qa2 = mysqli_query("select * from order_details where uniq_id = '$uniq_id'");
		while($ra2 = mysqli_fetch_array($qa2))
		{
			$product_id 	 = $ra2['product_id'];
			$product_qty 	 = $ra2['product_qty'];
			$product_price 	 = $ra2['product_price'];
			$order_date_time = $ra2['order_date_time'];
			
			$product_price_decimal = number_format($product_price, 2, '.', ',');
			
			$duly2 = mysqli_query("select * from products_manage where id = '$product_id'");
			$ras2 = mysqli_fetch_array($duly2);	
			
			//$root_cat_id 	= $ras2['root_cat_id'];
			$product_name 	= $ras2['name'];
			$product_code 	= $ras2['product_code'];
			$font_item 		= $ras2['image'];
			
			
			
			$total_price 		= $product_qty*$product_price;			
			$sub_total 			= $sub_total + $total_price;			
			$total 				= $sub_total;
			
			
			$sub_total_decimal 			= number_format($sub_total, 2, '.', ',');
			$total_price_decimal 		= number_format($total_price, 2, '.', ',');
			
			//$total_delivery_charge = number_format($total_delivery_crge, 2, '.', ',');
			//$grand_total = $sub_total + $total_delivery_charge;
			$grand_total_decimal = number_format($grand_total, 2, '.', ',');
  		?>
			<div class="row" style="border-bottom:solid 1px #CCCCCC;">
				<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<?php echo $i++; ?>
				</div>
				</div>
                <div class="col-md-1">
				<div class="row">
				<img src="../product_manage/photo_gallery/<?php echo $font_item; ?>" title="<?php echo $product_name; ?>" alt="<?php echo $product_name; ?>" width="50"  />
				</div>
				</div>
				<div class="col-md-6">
				<div class="row">
				<?php echo $product_name; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<?php echo $product_code; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<?php echo $product_price_decimal; ?>Tk.
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<?php echo $product_qty; ?>
				</div>
				</div>
                <div class="col-md-1">
				<div class="row" align="right">
				<?php echo $total_price_decimal; ?>
				</div>
				</div>
			</div>
         
			<?php
				}
			?>
			<div class="row pull-right" style="border-bottom:solid 1px #CCCCCC;">
				<div class="col-md-6">
                   
                    <strong>Total</strong>
                    
				</div>
                
				<div class="col-md-6">
                    <?php echo $sub_total_decimal; ?>
				</div>
                
				
			</div>
						
			</div>
		</div>
		
        <div class="row" style="padding-top:20px;">
            	
                <label style="padding-top:20px;">Select Your Option</label>
				<select name="order_status" id="order_status" class="form-control">
          <option <?php if($order_status == 'Pending') { ?> selected="selected" <?php } ?> value="Pending">Pending</option>
          <option value="Paid">Paid</option>
        </select>
                
            </div><br/>
            <button class="btn btn-info">Submit</button>
		</form>
		</div>
	</div>
</body>
</html>