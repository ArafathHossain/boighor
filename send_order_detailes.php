<?php 
	session_start();
	//require_once("sess_chk.php"); 
	require_once("webcontrol/connect_db.php");
	
	$customer_id 	= $_REQUEST['customer_id'];	
    $uniq_id		= $_REQUEST['uniq_id'];
	

	$q = mysqli_query("select * from registration_form where id = '$customer_id'");
	$r = mysqli_fetch_array($q);
	
	$id 			= $r['id'];
	$name 			= $r['name'];
	$email 			= $r['email'];
	$phone_no 		= $r['phone_no'];
	$address 		= $r['address'];
	
	
	$d_name 		= $r['d_name'];
	$d_email 		= $r['d_email'];
	$d_phone_no 	= $r['d_phone_no'];
	$d_address 		= $r['d_address'];
	
?>
<body style="background:#EEF3FA">
<table width="800" align="center" cellpadding="0" cellspacing="0" style="background:#FFF">
  <tr>
    <td height="89">&nbsp;</td>
    <td align="center" valign="top"><table width="750" align="center" cellpadding="0" cellspacing="0" bgcolor="">
      <tr>
        <td width="374" height="72">
<img src="<?php echo (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/image/1549709922.PNG'; ?>" width="374" height="80" /></td>
        <td width="28">&nbsp;</td>
        <td width="346" align="right" valign="middle" style="font-style: italic; font-size: 28px; color: #333333;">Thanks for your Order</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="63">&nbsp;</td>
    <td><table width="750" align="center" cellpadding="0" cellspacing="0" bgcolor="#4477aa">
      <tr style="background:#C9C8C4">
        <td height="40" style="color:#333333;font-size:20px; font-weight:bold">&nbsp;ORDER CONFIRMATION</td>
        </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>  <table width="750" align="center" cellpadding="0" cellspacing="0">
      <tr  style="background:#C9C8C4">
        <td height="30" colspan="3" style="color:#333333;font-size:20px; font-weight:bold">&nbsp;ORDER DETAILES</td>
        </tr>
      <tr>
        <td width="421" colspan="3" align="left" valign="top" style="color:#ffffff;font-size:20px; font-weight:bold">
          <table width="373" border="1" align="left" cellpadding="0" cellspacing="0" style="font-size:14px; color: #000;padding-top:10px">
            <tr>
              <td align="left" valign="middle"><strong>&nbsp;Shipping Address :</strong></td>
              </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;<?php echo $d_name; ?></td>
              </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;<?php echo $d_phone_no; ?></td>
              </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;<?php echo $d_email; ?></td>
              </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;<?php echo $d_address; ?></td>
              </tr>
          </table></td>
        </tr>
      
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center" valign="top">
	<table width="750" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#005c86" style="border-radius:0px; padding:0px; margin-top:5px">
      <tr>
        <td height="40" colspan="6" align="center" valign="middle" bgcolor="#FFFFFF" style="color:#003; font-size:18px; font-family:'Comic Sans MS', cursive">Your Shopping Cart Details</td>
      </tr>
      <tr class="sub_total">
        <td height="30" align="center" valign="middle" bgcolor="#FFFFFF">SN</td>
        <td height="30" align="center" valign="middle" bgcolor="#FFFFFF">Products</td>
		<td height="30" align="center" valign="middle" bgcolor="#FFFFFF">Products Name</td>
        <td width="133"  align="center" valign="middle" bgcolor="#FFFFFF">Price</td>
        <td width="55"  align="center" valign="middle" bgcolor="#FFFFFF">Qty.</td>
        <td width="166"  align="center" valign="middle" bgcolor="#FFFFFF">Total</td>
      </tr>
      <?php
	  	$i = 1;
  		$sub_total = 0; 
		$total = 0; 
		$grand_total = 0;
		
				
		$q2 = mysqli_query("select product_id, product_qty, product_price from temp_details where temp_id = '$uniq_id'");
		while($ra2 = mysqli_fetch_array($q2))
		{
			
			$pro_id 			= $ra2[0];
			$product_qty 		= $ra2[1];
			$product_price 		= $ra2[2];
			
			$product_price_decimal = number_format($product_price, 2, '.', ',');
		
			$duly2 = mysqli_query("select * from products_manage where id = '$pro_id'");
			$ras2 = mysqli_fetch_array($duly2);
						
			$product_id 		= $ras2['id'];
			$product_name 		= $ras2['name'];
			$product_image 		= $ras2['image'];

			
			
			
			$total_price 		= $product_qty*$product_price;			
			$sub_total 			= $sub_total + $total_price;			
			$total 				= $sub_total;
			
			$sub_total_decimal 			= number_format($sub_total, 2, '.', ',');
			$total_price_decimal 		= number_format($total_price, 2, '.', ',');
			
			$grand_total = $sub_total;
			$grand_total_decimal = number_format($grand_total, 2, '.', ',');
			
?>
      <tr class="remove_pro_name">
        <td width="48"  align="center" valign="middle" bgcolor="#FFFFFF" ><?php echo $i++; ?></td>
        <td width="127" align="center" valign="middle" bgcolor="#FFFFFF" class="">
		<a href="http://priyoshops.com/product_details.php?pro_id=<?php echo $product_id; ?>" class="writer_name">
		<img src="<?php echo (empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'webcontrol/product_manage/photo_gallery/<?php echo $product_image; ?>'; ?>" width="50" height="50" />
		</a>
		</td>
		 <td width="202" align="center" valign="middle" bgcolor="#FFFFFF" class=""><a href="http://priyoshops.com/product_details.php?pro_id=<?php echo $product_id; ?>" class="writer_name"><?php echo $product_name; ?></a></td>
        
        <td align="center" valign="middle" bgcolor="#FFFFFF"><?php echo $product_price_decimal; ?> (TK)</td>
        <td align="center" valign="middle" bgcolor="#FFFFFF"><?php echo $product_qty; ?></td>
        <td align="center" valign="middle" bgcolor="#FFFFFF"><span class="total_price"><strong><?php echo $total_price_decimal; ?> (TK)</strong></span></td>
      </tr>
      <?php
		}
	 ?>
    </table>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center" valign="top">
	<table width="750" border="0" align="center" cellpadding="1" cellspacing="0">
      <tr>
        <td width="245" align="left" valign="middle"><div class="allstoreswrapper"> &nbsp;</div></td>
        <td width="184" align="center" valign="middle">&nbsp;</td>
        <td width="56" align="center" valign="middle">&nbsp;</td>
        <td width="109" align="left" valign="middle"><span class="sub_total">Sub Total:</span></td>
        <td width="146" align="right" valign="middle"><span class="remove_pro_name"><?php echo $sub_total_decimal; ?> (TK)&nbsp;&nbsp;</span></td>
      </tr>
      <tr>
        <td align="left" valign="middle">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td height="25" align="left" valign="middle" class="sub_total" style="border-top:2px solid #903;">Grand Total:</td>
        <td align="right" valign="middle" class="remove_pro_name"  style="border-top:2px solid #903;"><?php echo $grand_total_decimal; ?>(TK)&nbsp;&nbsp; </td>
      </tr>
      <tr>
        <td align="left" valign="middle">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td height="25" align="left" valign="middle" class="sub_total">&nbsp;</td>
        <td align="right" valign="middle" class="remove_pro_name">&nbsp;</td>
      </tr>
      
    </table>  
    <td>&nbsp;</td>
  </tr>
</table>
</body>