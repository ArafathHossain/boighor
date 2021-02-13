<?php
	require_once("webcontrol/connect_db.php");
	$customer_id 	= $_SESSION['customer_id'];		
?>
<div class="col-md-12" style="background-color:#39619c; padding:10px 0px 10px 0px; margin-top:10px;">
		<div class="col-md-12">
			<div class="col-md-3">
				<h4 style="padding-left:40px; color:#FFFFFF; font-weight:bold;">INFORMATION</h4>
				<ul class="footer_li">
					<li><a href="about_us.php"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;About Us</a></li>
					<li><a href="contact_us.php"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Contact Us</a></li>

				</ul>
			</div>
			<div class="col-md-3">
				<h4 style="padding-left:40px; color:#FFFFFF; font-weight:bold;">MY ACCOUNT</h4>
				<ul class="footer_li">
					<li><a href="registration_form.php"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Register</a></li>
					<?php if($customer_id=='') { ?>
					<li><a href="user_login_form.php"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Log IN</a></li>
					<?php } else { ?>
					<li><a href="user_form_logout.php"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Log OUT</a></li>
					 <?php } ?>
					<li><a href="forgotten_password_form.php"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Forgotten Password</a></li>
					
				</ul>
			</div>
			<div class="col-md-3">
			<div class="row res_fb">
			<h4 style="color:#FFFFFF; font-weight:bold;">FOLLOW US</h4>
			
			<?php
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
			?>
			
			
			<span><a class="img_efect2" href="<?php echo $facebook; ?>" target="_blank"><img src="image/socials/fb.png" title="Facebook"></a></span>
			<span><a class="img_efect2" href="<?php echo $youtube; ?>" target="_blank"><img src="image/socials/utube.png" title="Youtube"></a></span>
			<span><a class="img_efect2" href="<?php echo $googleplus; ?>" target="_blank"><img src="image/socials/g+.png" title="Google+"></a></span>
			<span><a class="img_efect2" href="<?php echo $twitter; ?>" target="_blank"><img src="image/socials/tweet.png" title="Twitter"></a></span>
			</div>
		</div>
			<div class="col-md-3 res_fb">
		
		
			<h4 style="color:#FFFFFF; font-weight:bold; text-align:left;">CONTACT US NOW!</h4>
			<div><i class="fa fa-phone-square" style="color:#FFFFFF; font-size:18px;"></i><span style="font-size:14px; color:#FFFFFF">&nbsp;<?php echo $phone_no; ?></span></div>
			<div><i class="fa fa-envelope-square" style="color:#FFFFFF; font-size:18px;"></i><a href="#"><span style="font-size:14px; color:#FFFFFF; font-family:Cambria;">&nbsp; <?php echo $email; ?></span></a></div>
			<div style="font-size:14px; color:#FFFFFF; font-family:Cambria;"><?php echo $address; ?></div>
		</div>
		</div>
		
		
		
	</div>
	</div>