<?php 
	session_start();
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
<div class="container" style="width:100%;">
  <!--Banner Top menu start-->
  <?php require_once("banner_top_menu.php"); ?>
  <!--Banner Top menu end-->
  <!--Middle start-->
  <div class="row">
    <div align="center" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:30px; padding-top:20px;"> PAYMENT METHORD </div>
    <div class="col-md-1"> &nbsp; </div>
    <div class="col-md-10" style="border:solid 1px #FF0000; border-radius:15px; padding-bottom:20px;">
      <div class="row payment_menu" style="margin-bottom:20px;"> <a href="payment_process.php" class="border">Payment Process</a><a href="payment_Methord.php">Payment Methord</a> </div>
      <?php
				$p77= mysqli_query ("select * from payment_methord order by id asc");
				while ($q77=mysqli_fetch_array($p77))
				{
				$id 			= $q77['id'];
				$description 	= htmlspecialchars_decode($q77['description'], ENT_QUOTES);
			?>
      <div> <?php echo $description; ?> </div>
      <?php } ?>
    </div>
    <div class="col-md-1"> &nbsp; </div>
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
