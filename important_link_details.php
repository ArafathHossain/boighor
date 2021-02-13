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
  <div class="row">
    <div align="center" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:30px; padding-top:30px;"> IMPORTANT LINK DETAIELS </div>
    <div class="col-md-12">
      <div class="col-md-12" style="border:solid 1px #FF0000; border-radius:15px; padding-bottom:20px; padding-top:10px;">
        <?php
					$cat_id = $_REQUEST['details_id'];
					$res1 = mysqli_query("select * from important_link_category where id = '$cat_id'");
					$row = mysqli_fetch_array($res1);
					
					$id 					= $row['id'];
					$cat_name 				= $row['cat_name'];
					$status 				= $row['status'];
       			?>
        <div style="font-size:26px; color:#FF0000; font-weight:bold; padding-bottom:10px; padding-top:10px; padding-left:40px;"> <?php echo $cat_name; ?> </div>
        <div>
          <div class="col-md-6">
            <div style="font-size:16px; color:#FF0000; font-weight:bold; padding-bottom:10px; padding-top:20px; padding-left:30px; text-decoration:none;"> LINK & NAME </div>
          </div>
          <div class="col-md-6">
            <div style="font-size:16px; color:#FF0000; font-weight:bold; padding-bottom:10px; padding-top:20px; padding-left:30px; text-decoration:none;"> PHONE NO / ADDRESS </div>
          </div>
        </div>
        <?php
				$cat_id = $_REQUEST['details_id'];
						
				$res1 = mysqli_query("select * from important_link_manage where cetagory_id = '$cat_id'");
				while($row = mysqli_fetch_array($res1))
				{
				$pro_id 				= $row['id'];
				$name 					= $row['name'];
				$url 					= $row['url'];
				$mobile 				= $row['mobile'];
				$status 				= $row['status'];
				
       		?>
        <div class="col-md-6">
          <div style="color:#666666; text-align:justify;">
            <?php if(!empty($url)){?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-hand-o-right" aria-hidden="true" style="color:#FF0000;"></i> <a href="<?php echo $url; ?>" target="_blank"><?php echo $name; ?></a></br>
            <?php } else
						 {?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-hand-o-right" aria-hidden="true" style="color:#FF0000;"></i> <?php echo $name; ?></br>
            <?php } ?>
          </div>
        </div>
        <div class="col-md-6">
          <div style="color:#666666; text-align:justify;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mobile; ?></br>
          </div>
        </div>
        <?php } ?>
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
