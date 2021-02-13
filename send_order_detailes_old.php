<?php 
	session_start();
	//require_once("sess_chk.php"); 
	require_once("admin_panel/classes/config.php");
	
	//$customer_id 	= $_REQUEST['customer_id'];	
//	$uniq_id		= $_REQUEST['uniq_id'];
//	$d_district 	= $_REQUEST['d_district'];
	$d_district		= $_SESSION['d_district'];
	$customer_id 	= $_SESSION['customer_id'];
	$uniq_id		= $_SESSION['uniq_id'];
	
	$q1 = mysqli_query("select*from order_info where uniq_id = '$uniq_id'");
	$r1 = mysqli_fetch_array($q1);	
	$date_time 	= $r1['date_time'];	
		
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
          <td width="374" height="72"><img src="<?php echo (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/images/osder-publication_banner.jpg'; ?>" width="374" height="80" /></td>
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
          <td width="302" style="color:#333333;font-size:20px; font-weight:bold">ORDER CONFIRMATION</td>
          <td width="36">&nbsp;</td>
          <td width="410" align="left" valign="middle" style="font-style: italic; font-size: 28px; color: #ffffff;">&nbsp;</td>
        </tr>
      </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table width="750" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>Dear (<?php echo $name; ?>)<br />
            Thank you for shopping with <strong>Osder Publication</strong><strong>.</strong><strong>com</strong>. Your order with invoice number <?php echo $uniq_id; ?> is currently being processed. To check your order status, login to <a href="http://osderpublications.com/info.php" target="_blank">MY ACCOUNT</a> with your e-mail address and password. You will receive a tracking number via e-mail once your order has shipped.<br />
            If you have any questions or need assistance, please <a href="http://www.osderpublications.com/content.php?content_type=Contact Us" target="_blank">Contact us</a>. <br />
            <br />
            <br />
            Sincerely,<br />
            <a href="http://osderpublications.com/" target="_blank"> Osder Publications<br />
            <br />
            </a></td>
        </tr>
      </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table width="750" align="center" cellpadding="0" cellspacing="0">
        <tr  style="background:#C9C8C4">
          <td width="302" style="color:#333333;font-size:20px; font-weight:bold">ORDER DETAILES</td>
          <td width="25">&nbsp;</td>
          <td width="421" align="left" valign="middle" style="font-style: italic; font-size: 28px; color: #ffffff;">&nbsp;</td>
        </tr>
        <tr>
          <td align="left" valign="top" style="color:#ffffff;font-size:20px; font-weight:bold"><table width="100%" align="left" cellpadding="0" cellspacing="0" style="padding-top:10px;">
              <tr>
                <td width="44%" align="left" valign="middle" style="font-size:17px; color: #000000"><strong>Invoice Number</strong></td>
                <td width="3%" align="left" valign="middle">:</td>
                <td width="53%" align="left" valign="middle" style="font-size:14px; color:#000; font-weight:100;"><?php echo $uniq_id; ?></td>
              </tr>
              <tr>
                <td height="20" align="left" valign="top" style="font-size:17px; color: #000000"><strong>Invoice Date</strong></td>
                <td align="left" valign="top">:</td>
                <td align="left" valign="top" style="font-size:14px; color:#000; font-weight:100;"><?php echo $date_time; ?></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          <td>&nbsp;</td>
          <td align="left" valign="middle" style="font-style: italic; font-size: 28px; color: #ffffff;"><table width="373" align="left" cellpadding="0" cellspacing="0" style="font-size:14px; color: #000;padding-top:10px">
              <tr>
                <td width="26" align="left" valign="middle">&nbsp;</td>
                <td width="342" align="left" valign="middle"style="font-size:17px; color: #000000"><strong>Shipping Address :</strong></td>
              </tr>
              <tr>
                <td align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle"><?php echo $d_name; ?></td>
              </tr>
              <tr>
                <td align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle"><?php echo $d_phone_no; ?></td>
              </tr>
              <tr>
                <td align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle"><?php echo $d_email; ?></td>
              </tr>
              <tr>
                <td align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle"><?php echo $d_address; ?></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td style="color:#ffffff;font-size:20px; font-weight:bold">&nbsp;</td>
          <td>&nbsp;</td>
          <td align="left" valign="middle" style="font-style: italic; font-size: 28px; color: #ffffff;">&nbsp;</td>
        </tr>
      </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#005c86" style="border-radius:0px; padding:0px; margin-top:5px">
        <tr>
          <td height="40" colspan="6" align="center" valign="middle" bgcolor="#FFFFFF" style="color:#003; font-size:18px; font-family:'Comic Sans MS', cursive">Your Shopping Cart Details</td>
        </tr>
        <tr class="sub_total">
          <td height="30" align="center" valign="middle" bgcolor="#FFFFFF">SN</td>
          <td height="30" align="center" valign="middle" bgcolor="#FFFFFF">Products</td>
          <td  align="center" valign="middle" bgcolor="#FFFFFF">Price</td>
          <td  align="center" valign="middle" bgcolor="#FFFFFF">Qty.</td>
          <td  align="center" valign="middle" bgcolor="#FFFFFF">Total</td>
        </tr>
        <?php
	  	$i = 1;
  		$sub_total = 0; 
		$total = 0; 
		$grand_total = 0;
		
		$q321 = mysqli_query("select * from delivery order by id desc");
		$r321 = mysqli_fetch_array($q321);
		
		$dhaka_per_piece  = $r321['dhaka_per_piece'];
		$out_of_dhaka_per_piece  = $r321['out_of_dhaka_per_piece'];
		$dhaka_min_charge  = $r321['dhaka_min_charge'];
		$out_of_dhaka_min_charge   = $r321['out_of_dhaka_min_charge'];
		
		$duly12 = mysqli_query("select sum(product_qty) from temp_details where temp_id = '$uniq_id'");
		$ra12 = mysqli_fetch_array($duly12);
		
		$t_qty = $ra12[0];		list($total_qnty_item, $zero) = split('[/.]', $t_qty);
		$total_qnty_item;	
		
		if(($d_district=='Dhaka')&&($total_qnty_item>='3')) {
			
		$delivery_crg = $total_qnty_item * $dhaka_per_piece; 
		}else 
		if(($d_district=='Dhaka')&&($total_qnty_item<'3'))
		{
		$delivery_crg = $dhaka_min_charge; 
		
		} else {
		if(($d_district!=='Dhaka')&&($total_qnty_item>='3')) {
			
		$delivery_crg = $total_qnty_item * $out_of_dhaka_per_piece; 
		}else 
		if(($d_district!=='Dhaka')&&($total_qnty_item<'3'))
		{
		$delivery_crg = $out_of_dhaka_min_charge; 
		}}
				
		$q2 = mysqli_query("select product_id, product_qty, product_price, type from temp_details where temp_id = '$uniq_id'");
		while($ra2 = mysqli_fetch_array($q2))
		{
			
			$pro_id 			= $ra2[0];
			$product_qty 		= $ra2[1];
			$product_price 		= $ra2[2];
			$product_type 		= $ra2[3];
			
			$product_price_decimal = number_format($product_price, 2, '.', ',');
		
			$duly2 = mysqli_query("select * from product where id = '$pro_id'");
			$ras2 = mysqli_fetch_array($duly2);
						
			$product_id 		= $ras2['id'];
			$product_name 		= $ras2['product_name'];
			$font_item 			= $ras2['font_item'];
			$author_name_id 	= $ras2['author_name_id'];
			
			$q321 = mysqli_query("select * from author_list where id = '$author_name_id'");
			$r321 = mysqli_fetch_array($q321);
			
			$author_name 		= $r321['author_name'];
			
			$total_price 		= $product_qty*$product_price;			
			$sub_total 			= $sub_total + $total_price;			
			$total 				= $sub_total;
			
			$sub_total_decimal 			= number_format($sub_total, 2, '.', ',');
			$total_price_decimal 		= number_format($total_price, 2, '.', ',');
			
			$total_delivery_charge = number_format($delivery_crg, 2, '.', ',');
			$grand_total = $sub_total;
			$grand_total_decimal = number_format($grand_total, 2, '.', ',');
			
?>
        <tr class="remove_pro_name">
          <td width="61"  align="center" valign="middle" bgcolor="#FFFFFF" ><?php echo $i++; ?></td>
          <td width="376" align="center" valign="middle" bgcolor="#FFFFFF" class=""><a href="http://osderpublications.com/product_details.php?ProductID=<?php echo $product_id; ?>" class="writer_name"><?php echo $product_name; ?></a>-          Written By <a href="http://osderpublications.com/author_books_list.php?author_id=<?php echo $author_name_id; ?>" ><?php echo $author_name; ?></a></td>
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
    <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="1" cellspacing="0">
        <tr>
          <td width="256" align="left" valign="middle"><div class="allstoreswrapper"> &nbsp;</div></td>
          <td width="192" align="center" valign="middle">&nbsp;</td>
          <td width="94" align="center" valign="middle">&nbsp;</td>
          <td width="118" align="left" valign="middle"><span class="sub_total">Sub Total:</span></td>
          <td width="108" align="right" valign="middle"><span class="remove_pro_name"><?php echo $sub_total_decimal; ?> (TK)&nbsp;&nbsp;</span></td>
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
        <tr>
          <td align="left" valign="middle">&nbsp;</td>
          <td align="center" valign="middle">&nbsp;</td>
          <td colspan="3" align="right" valign="middle"></td>
        </tr>
        <tr>
          <td align="left" valign="middle">&nbsp;</td>
          <td align="center" valign="middle">&nbsp;</td>
          <td colspan="3" align="center" valign="middle">&nbsp;</td>
        </tr>
      </table>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
sales@hitscctv-ipcamera.com