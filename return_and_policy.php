<?php
	/*session_start();*/
	require_once("webcontrol/connect_db.php");
	$result 	= mysqli_query("select * from users order by id desc");
	$row 		= mysqli_fetch_array($result);
	$id 		= $row['id'];
	$userid 	= $row['userid'];
	$web 		= $row['web'];
	$email 		= $row['email'];
	$phone_no	= $row['phone_no'];
	$facebook 	= $row['facebook'];
	$address 	= $row['address'];
	$skype 		= $row['skype'];
	$image 		= $row['image'];
	$title		= $row['title'];
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
<link rel="icon" href="image/fav.png" type="image/png" />
</head>
<body>
<div class="container" style="width:100%;">
  <!--Banner Top menu start-->
  <?php require_once("banner_top_menu.php"); ?>
  <!--Banner Top menu end-->
  <!--Middle start-->
  <div align="center" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:30px; padding-top:20px;"> Return and Policy </div>
  <div class="row" style="border:solid 1px #FF0000; border-radius:15px; padding-bottom:20px; padding-top:10px; margin:0px 15px 30px 15px;">
  <?php 
	$result 	= mysqli_query("select * from returns_manage order by id desc");
	$row 		= mysqli_fetch_array($result);
	$id 			= $row['id'];
	$title 			= $row['title'];
	$status 		= $row['status'];
	$image2 		= $row['image2']; 
  ?>
    <div class="col-md-12" style="text-align:center;">
      <h4 style="color:#FF0000; text-align:center; padding:0px 0px 5px 0px; "><?php echo $title; ?></h4>
    <div style="color:#666666; text-align:center; padding:0px 10px 10px 10px;">
		<img class="img-responsive" src="webcontrol/Return_and_Policy/photo_gallery/<?php echo $image2; ?>"/>
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
