 <div style="border:solid 1px #CCCCCC; border-radius:4px; background-color:#FFFFFF; padding:5px;">    
<?php
	require_once("webcontrol/connect_db.php"); 
	$search_field = $_REQUEST['search_field'];	
	
	if(!empty($search_field)){
	$q1 = mysqli_query("select * from sub_products_category where name like '%$search_field%' order by id desc");
	while($r1 = mysqli_fetch_array($q1))
	{
	
	$id 	    = $r1['id'];
	$name 	    = $r1['name'];
	
?>
          
	<a class="search_font" href="product_details.php?pro_id=<?php echo $id;?>"><?php echo $name; ?></a><br />

                 
<?php } } ?>
	</div>