<div id='resmenu'>
  <ul>
  	<li style="padding:13px; font-size:16px; font-weight:bold; color:#FFFFFF; background-color:#39619c;"><span>CATEGORY</span></li>
	
			<?php 
					$result = mysqli_query("select * from products_category where status = 'Active' order by id desc");
					while($rrr = mysqli_fetch_array($result))
					{
					$cetagory_id 	= $rrr['id'];
					$cat_name 		= $rrr['cat_name'];
					$status 		= $rrr['status'];
									
					$result1 = mysqli_query("select * from  products_sub_category where cat_id = '$cetagory_id'");
					$rr1= mysqli_fetch_array($result1);
					$menu_id_for_sub = $rr1['cat_id'];
			?>
    <li class='active has-sub'><a href="#"><span><?php echo $cat_name; ?></span></a>
			<?php if($menu_id_for_sub) { ?>
      <ul style="border:solid 2px #39619c;">
			<?php
					$result520 		= mysqli_query("select * from  products_sub_category where cat_id = '$cetagory_id' and status = 'Active'");
					while($rr100 	= mysqli_fetch_array($result520))
					{
					$subdetails_id 	= $rr100['id'];
					$cat_id	   		= $rr100['cat_id'];
					$sub_cat_name 	= $rr100['sub_cat_name'];
					
			?>
        <li><a href='sub_category_details.php?subdetails_id=<?php echo $subdetails_id; ?>'><span><?php echo $sub_cat_name; ?></span></a></li>
			<?php }?>
      </ul>
	  		<?php }?>
    </li>
			<?php }?>
  </ul>
</div>