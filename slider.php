<div id="wowslider-container1">
  <div class="ws_images">
    <ul>
      <?php
				require_once("webcontrol/connect_db.php");
				$p11= mysqli_query ("select * from slider_manage where status = 'Active'");
				while($q1=mysqli_fetch_array($p11))
				{
				$id 			= $q1['id'];
				$title 			= $q1['title'];
				$status 		= $q1['status'];
				$image2 		= $q1['image2']; 
			?>
      <li><img src="webcontrol/slider_manage/photo_gallery/<?php echo $image2; ?>" alt="Alder branches: Photo Slider" title="<?php echo $title; ?>" id="wows1_0"/></li>
      <?php } ?>
    </ul>
  </div>
</div>
<script type="text/javascript" src="slider/images/demo/wowslider.js"></script>
<script type="text/javascript" src="slider/images/demo/cloud-fly/engine1/script.js"></script>
