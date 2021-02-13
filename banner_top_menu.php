<?php
	require_once("webcontrol/connect_db.php");
	$customer_id 	= $_SESSION['customer_id'];
	$uniq_id	 	= $_SESSION['uniq_id'];

	$result1234 = mysqli_query("select * from temp_details where temp_id = '$uniq_id'");
	$number_of_rows = mysqli_num_rows($result1234);
	//echo "Number of rows fetched are : ". $number_of_rows;

	$result 		= mysqli_query("select * from users order by id desc");
	$row 			= mysqli_fetch_array($result);
	$image 			= $row['image'];


	$result = mysqli_query("select * from users order by id desc");
	$row 			= mysqli_fetch_array($result);
	$id 			= $row['id'];
	$phone_no		= $row['phone_no'];
	$email 			= $row['email'];
	$address 		= $row['address'];
	$facebook 		= $row['facebook'];
	$youtube 		= $row['youtube'];
	$googleplus 	= $row['googleplus'];
	$twitter 		= $row['twitter'];

	$q = mysqli_query("select points from registration_form where id = '$customer_id'");
	$q1 = mysqli_fetch_array($q);
	$points = $q1['points'];

?>
<script type="text/javascript" language="javascript" src="js/search_script.js"></script>
<!--Banner start-->

<div class="row hidden-sm hidden-xs" style="background:#ecdac1;">

  <div class="col-md-2 clo-sm-12 col-xs-12"><a href="index.php"><img class="img-responsive" src="webcontrol/profile/images/<?php echo $image; ?>" /></a></div>
  <div class="col-md-2 clo-sm-2 col-xs-2" style="font-size:18px; color:black; padding-top:20px;" align="right"> </div>
  <div class="col-md-2 clo-sm-2 col-xs-2" style="font-size:18px; padding-top:20px; color:black;" align="right">
  <?php if($customer_id=='') { ?>
  <a style="color:black;" href="registration_form.php">Register</a> | <a style="color:black;" href="user_login_form.php">Login</a>
   <?php } else { ?>
  <a style="color:black;" href="profile_update.php">Profile</a> | <a style="color:black;" href="user_form_logout.php">Log Out</a>
   <?php } ?>
  </div>
 <div class="col-md-3" align="right" style="color:black; padding-top:15px;"> <a href="check_out.php" style="color:black;"> <img class="img_efect" src="image/cart_1.png" alt="shopping cart"><span style="font-size:18px;"> Shopping Cart <?php echo $number_of_rows; ?> item(s)</span></a></div>
<?php if($customer_id !='') { ?>
 <div class="col-md-3" align="center" style="color:black; padding-top:15px;"> <h4>Points: <?php echo $points ?></h4></div>
<?php } ?>

</div>

<div class="row hidden-lg hidden-md" style="background:#39619c;">
  <div class="col-xs-6"><a href="index.php"><img style="height:40px;" class="img-responsive" src="webcontrol/profile/images/<?php echo $image; ?>" /></a></div>
  <div class="col-xs-6"><a href="check_out.php" style="color:black;"> <img class="img_efect" src="image/cart_1.png" alt="shopping cart"><span style="font-size:10px;"> Shopping Cart <?php echo $number_of_rows; ?> item(s)</span></a></div>

  <div>
 <div class="col-xs-5" style="font-size:13px; padding-top:15px; color:#FFFFFF;" align="center">
  <?php if($customer_id=='') { ?>
  <a style="color:#FFFFFF;" href="registration_form.php">Register</a> | <a style="color:#FFFFFF;" href="user_login_form.php">Login</a>
   <?php } else { ?>
  <a style="color:#FFFFFF;" href="profile_update.php">Profile</a> | <a style="color:#FFFFFF;" href="user_form_logout.php">Log Out</a>
   <?php } ?>
  </div>
  <div class="col-xs-7" style="font-size:18px; padding-top:10px; padding-bottom:5px; color:#FFFFFF;" align="center">
  <a class="img_efect2" href="<?php echo $facebook; ?>" target="_blank"><img style="height:30px;" src="image/socials/facebook.png" title="Facebook"></a>
<a class="img_efect2" href="<?php echo $youtube; ?>" target="_blank"><img style="height:30px;" src="image/socials/youtube.png" title="Youtube"></a>
<a class="img_efect2" href="<?php echo $googleplus; ?>" target="_blank"><img style="height:30px;" src="image/socials/google.png" title="Google+"></a>
<a class="img_efect2" href="<?php echo $twitter; ?>" target="_blank"><img style="height:30px;" src="image/socials/twitter.png" title="Twitter"></a>
  </div>
  </div>
</div>

<!--Banner end-->
<!--Top menu start-->
<div class="row">
  <div class="col-md-9" style="padding:0px; background:#39619c;">
    <div id='cssmenu'>
      <ul>
        <li class='active'><a href='index.php'><span >Home</span></a></li>


          <li>
            <li><a href='about_us.php'><span >About Us</span></a></li>
          </li>
        </li>
        <li class='last'><a href='contact_us.php'><span >Contact Us</span></a></li>
				<?php if($customer_id !='') { ?>
				<li class='last'><a href='customer_order_view.php'><span >History</span></a></li>
			<?php }?>
      </ul>
    </div>
  </div>
  <div class="col-md-3" style="padding:0px;">
    <div>
      <form method="post" name="form1" action="product_search.php">
        <div class="input-group">
          <div>
            <input type="text" class="form-control searchfield"  name="search_field" id="search_field" placeholder="Search Product" style="border-bottom:3px solid #39619c;">
          </div>
          <span class="input-group-btn" >
          <button type="submit" class="btn btn-default bg_color_1" name="Submit" value="Search"><i class="fa fa-search"></i></button>
          </span> </div>
      </form>
    </div>
  </div>
</div>
<!--Top menu end-->
