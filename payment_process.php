<?php
	session_start();
	error_reporting(0);
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
<title><?php require_once("title.php"); ?></title>
<?php require_once("metatag.php"); ?>
<!--Banner start-->
<script src="js/jquery.2.1.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<!--Banner end-->
<!--calender start-->
<script src="js/daterangepicker.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<link href="css/datepicker.css" rel="stylesheet">
<link href="css/datepicker.min.css" rel="stylesheet">
<!--calender end-->
<!--Top menu start-->
<link rel="stylesheet" href="top_menu/styles.css">
<script src="top_menu/script.js"></script>
<!--Top menu end-->
<!--Left menu start-->
<link rel="stylesheet" href="left_menu/styles.css">
<!--Left menu end-->
<!--slider start-->
<link rel="stylesheet" type="text/css" href="slider/images/demo/cloud-fly/engine1/style.css" />
<!--slider menu end-->
<!--Anather start-->
<link href="css_2/image_effect.css" rel="stylesheet">
<link href="css_2/styles_1.css" rel="stylesheet">
<!--Anather end-->
<link rel="icon" href="image/fav.png" type="image/png" />
</head>
<body>

		<?php
				$sub_total = 0; $total = 0; $total_delivery_chrg = 0;

				$q2 = mysqli_query("select product_id, product_qty, product_price from temp_details where temp_id = '$uniq_id'");
				$points=0;
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

					$total_price_int 		= $product_qty*$product_price;
					$total_price			=  number_format($total_price_int, 2, '.', '');

					$sub_total 			= $sub_total + $total_price;
					$points = $sub_total*3;
					$sub_total_decimal 			= number_format($sub_total, 2, '.', '');


				?>

<?php } ?>


<div class="container" style="width:100%;">
  <!--Banner Top menu start-->
  <?php require_once("banner_top_menu.php"); ?>
  <!--Banner Top menu end-->
  <!--Middle start-->
  <div class="row">
    <div align="center" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:30px; padding-top:20px;"> PAYMENT PROCESSING </div>
    <div class="col-md-1"> &nbsp; </div>
    <div class="col-md-10" style="border:solid 1px #FF0000; border-radius:15px; padding-bottom:20px;">
      <div class="row payment_menu" style="margin-bottom:20px;"> <a href="payment_process.php" class="border">Payment Process</a><a href="payment_Methord.php">Payment Method</a> </div>
      <?php
				$q = mysqli_query("select*from registration_form where id = '$customer_id'");
				$r = mysqli_fetch_array($q);
				$id 				= $r['id'];
				$District 			= $r['District'];

				if($District == 'Dhaka'){
				$sub_total_decimal2 			= $sub_total_decimal + 60;
				$delevery_cost 			=  60;
				$Tpoints= $points + 60*3;
				} else {
				$sub_total_decimal2 			= $sub_total_decimal + 80;
				$delevery_cost 			=  80;
				}

			?>
      <form class="form-horizontal" action="payment_process_insert_action.php?customer_id=<?php echo $customer_id ;?>" method="post" enctype="multipart/form-data">

	  <input type="hidden" class="form-control input-sm" name="total_delivery_crge" id="total_delivery_crge" value="<?php echo $delevery_cost; ?>" placeholder="Receipt Number">
        <div class="col-md-6">
          <h4 style="color:#FF0000; padding-left:15px; padding-bottom:20px;">
            <input type="radio" name="payment_type" id="payment_type" value="1" required>
            Point Payment</h4>
          <div>



            <span class="col-md-4 control-label" style="text-align:left; color:#666666;">Amount in Points</span>
            <div class="col-md-8" style="padding-bottom:10px;">
              <input type="text" class="form-control input-sm" name="amount" value="<?php echo $Tpoints; ?>" readonly="readonly" id="amount" placeholder="Amount">
            </div>
            <span class="col-md-4 control-label" style="text-align:left; color:#666666;">Payment Date</span>
            <div class="col-md-8" style="padding-bottom:10px;">
              <input id="payment_date" class="form-control input-sm date-picker" type="text" placeholder="YYYY-MM-DD" data-date-format="yyyy-mm-dd" name="payment_date">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h4 style="color:#FF0000; padding-left:15px; padding-bottom:20px;">
            <input type="radio" name="payment_type" id="payment_type" value="2" required>
            BKash Payment &nbsp; (Our Bkash Number : +8801785551244)</h4>
          <div> <span class="col-md-4 control-label" style="text-align:left; color:#666666;">BKash Phone Number</span>
            <div class="col-md-8" style="padding-bottom:10px;">
              <input type="text" class="form-control input-sm" name="bksh_account_number" id="bksh_account_number" placeholder="BKash Phone Number">
            </div>
            <span class="col-md-4 control-label" style="text-align:left; color:#666666;">Amount</span>

            <div class="col-md-8" style="padding-bottom:10px;">
              <input type="text" class="form-control input-sm" name="bkash_amount" id="bkash_amount" value="<?php echo $sub_total_decimal2; ?>" readonly="readonly" placeholder="Amount">
            </div>

			<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Bkash TrxID</span>

            <div class="col-md-8" style="padding-bottom:10px;">
              <input type="text" class="form-control input-sm" name="trxid" id="trxid" placeholder="Bkash TrxID">
            </div>

            <span class="col-md-4 control-label" style="text-align:left; color:#666666;">Payment Date</span>
            <div class="col-md-8" style="padding-bottom:10px;">
              <input id="bash_payment_date" class="form-control input-sm date-picker" type="text" placeholder="YYYY-MM-DD" data-date-format="yyyy-mm-dd" name="bash_payment_date">
            </div>
          </div>
        </div>
        <div class="col-md-12 without_payment_button">
          <button type="submit" value="Submit" class="btn btn-info btn-sm" style="background-color:#FF0000; border:#FF0000;">Confirm order</button>
        </div>
      </form>
        </div>
    <div class="col-md-1"> &nbsp; </div>
  </div>
  <!--Middle end-->
  <script type="text/javascript">
	jQuery(function($){
	 $('.date-picker').datepicker({
			autoclose: true,
			todayHighlight: true
		});
	});
</script>
  <!--footer start-->
  <?php require_once("footer.php"); ?>
  <!--footer end-->
</div>

</body>
</html>
