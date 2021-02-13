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
    <script src="../../js/jquery.min.js"></script>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<!-- bootstrap  end -->

	<!-- menu start -->
	<link rel="stylesheet" href="../menu/styles.css">
   	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   	<script src="../menu/script.js"></script>
    <script src="sub_menu_ajax_function.js"></script>
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
			<strong style="font-size:20px;">Dashboard</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Control panel</span>
			</div>

			<div class="row" align="center" style="padding-top:50px;">
			<strong style="font-size:30px;">ORDER DETAILS</strong>
			</div>

			<form>
				 <div class="row" style="padding-top:50px;">
					  <div class="col-md-4" style="padding-left:0px;">
					  	<label style="padding-right:5px;">Search Order By Date</label>
					  <input type="date" id="dateid" name="dateid">
					  </div>
					  <div class="col-md-2">
					  	<button type="button" class="btn btn-primary datewise">Serch</button>
					  </div>
				</div>
				</form>

			<div class="row" style="padding-top:20px;">
                <label style="padding-top:20px;">Select Your Option</label>
				<select name="order_status" id="order_status" class="form-control" onChange="pro_order_show();">
                  <option value="Pending" selected="selected">Unpaid</option>
                  <option value="Paid">Paid</option>
               </select>
            </div>
            <div id="div_for_view_order">
				<div class="col-md-12">
					<div class="row" style="padding-top:5px; padding-bottom:5px; border-top:solid 1px #CCCCCC; border-bottom:solid 1px #CCCCCC; background-color:#F8F8F8; margin-top:40px;">
						<div class="col-md-1">
							<div class="row" style="padding-left:5px;">
							<strong>Sl. No</strong>
							</div>
						</div>
						<div class="col-md-2">
							<div class="row">
							 <strong>Date and Time</strong>
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
							<strong>Name</strong>
							</div>
						</div>
						<div class="col-md-2">
							<div class="row">
							<strong>Mobile NO</strong>
							</div>
						</div>
						<div class="col-md-1">
							<div class="row">
							<strong>Price</strong>
							</div>
						</div>

						<div class="col-md-1">
							<div class="row" align="center">
							 <strong>Action</strong>
							</div>
						</div>
					</div>
			<?php
				$i = 1;
				$sub_total = 0;
				$total = 0;
				$grand_total = 0;

				$q1 = mysqli_query("select * from order_info where status = 'Pending' order by id desc");
				while($r1 = mysqli_fetch_array($q1))
				{

				$date_time 			  = $r1['date_time'];
				$uniq_id 			  = $r1['uniq_id'];
				//$total_delivery_crge  = $r1['total_delivery_crge'];
				$status 			  = $r1['status'];
				$customer_id 		  = $r1['customer_id'];

				$du = mysqli_query("select name, phone_no from registration_form where id = '$customer_id'");
				$ra1 = mysqli_fetch_array($du);

				$name  = $ra1[0];
				$phone_no   = $ra1[1];

				$TotalProdQnt 	=  0;
				$TotalOrderAmt 	= 0;


				$qa2 = mysqli_query("select * from order_details where uniq_id = '$uniq_id'");
				while($ra2 = mysqli_fetch_array($qa2))
				{
					$product_id 	= $ra2['product_id'];
					$product_qty 	= $ra2['product_qty'];
					$product_price 	= $ra2['product_price'];
					$order_id 		= $ra2['order_id'];

					$TotalProdQnt 		= $TotalProdQnt + $product_qty;
					$TotalOrderAmt 		= $TotalOrderAmt + ($product_qty * $product_price);


				}

				$GrandTotal 	= $TotalOrderAmt;

				?>
				<div class="row" style="border-bottom:solid 1px #CCCCCC;">
					<div class="col-md-1">
					<div class="row" style="padding-left:5px;">
					<?php echo $i++; ?>
					</div>
					</div>
					<div class="col-md-2">
					<div class="row">
					<?php echo $date_time; ?>
					</div>
					</div>
					<div class="col-md-5">
					<div class="row">
					<?php echo $name; ?>
					</div>
					</div>
					<div class="col-md-2">
					<div class="row">
					<?php echo $phone_no; ?>
					</div>
					</div>
					<div class="col-md-1">
					<div class="row">
					<?php echo $GrandTotal; ?>
					</div>
					</div>
					<div class="col-md-1">
					<div class="row" align="center">
					<a href="product_order_details.php?OrderNO=<?php echo $uniq_id; ?>"><img src="../image/details.png"></a> || <a href="pro_order_delete_action.php?uniq_id=<?php echo $uniq_id; ?>"><img src="../image/delete.png"></a>
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
