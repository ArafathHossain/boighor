<?php
	require_once("../connect_db.php");

	$sub_cat_id 			= htmlspecialchars($_REQUEST['sub_cat_id']);
	$name 					= htmlspecialchars($_REQUEST['name']);
	$product_code          	= htmlspecialchars($_REQUEST['product_code']);
	$availability          	= htmlspecialchars($_REQUEST['availability']);
	$discount          		= htmlspecialchars($_REQUEST['discount']);
	$old_price          	= htmlspecialchars($_REQUEST['old_price']);
	$price          		= htmlspecialchars($_REQUEST['price']);
	$status 				= htmlspecialchars($_REQUEST['status']);
	$description 			= htmlspecialchars($_REQUEST['description']);

	$p1= mysqli_query ("select * from products_manage order by id desc");
	$q1=mysqli_fetch_array($p1);
	$image 					= $q1['image'];
	$points = 3*$price;


	$time = time();

	$pro_image = $_FILES['image']['name'];
	$extention = strstr($pro_image, '.');
	$pro_image = $time.'1'. $extention;
	$upload_directory = "photo_gallery/" . $pro_image;
	$upload_now = move_uploaded_file($_FILES['image']['tmp_name'], $upload_directory);

	$pro_image_1 = $_FILES['previous_image']['name'];
	$extention1 = strstr($pro_image_1, '.');
	$pro_image_1 = $time.'2'. $extention1;
	$upload_directory1 = "photo_gallery/" . $pro_image_1;
	$upload_now1 = move_uploaded_file($_FILES['previous_image']['tmp_name'], $upload_directory1);


	$pro_image_2 = $_FILES['last_previous_image']['name'];
	$extention2 = strstr($pro_image_2, '.');
	$pro_image_2 = $time.'3'. $extention2;
	$upload_directory2 = "photo_gallery/" . $pro_image_2;
	$upload_now2 = move_uploaded_file($_FILES['last_previous_image']['tmp_name'], $upload_directory2);

    $psmail1= mysqli_query ("select * from registration_form order by id desc");
	while($qsmail11=mysqli_fetch_array($psmail1))
	{
	$id 					= $qsmail11['id'];
	$email 			= $qsmail11['email'];



    $to = $email;
    $subject = "Priyoshops.com";
    $message = "
    <html>
    <head>
    <title>Priyoshops.com</title>
    </head>
    <body>

    <table style='width:70%; border:1px #FF0000 solid;'>
    <tr>
    <th colspan='1' style='background:#e2e4d7;'>
	Priyo Shops

	<table style='width:100%; background:#ffffff; padding-left:50px; border:1px #FF0000 solid;'>



	<tr>
    <td colspan='8' style='padding-left:10px; width:100%;'> </td>
    </tr>
	<tr>
    <td colspan='8' style='padding-left:10px; width:100%;'> </td>
    </tr>
	<tr>
    <td colspan='8' style='padding-left:10px; width:100%;'> </td>
    </tr>

	<tr style='background:#FFFFFF;'>
    <td colspan='2' style='padding-left:10px;  text-align:left; border:1px #000000 solid;'><strong>Product Name</strong></td>
	<td colspan='2' style='padding-left:10px;  text-align:left; border:1px #000000 solid;'><strong>Product Image</strong></td>
	<td colspan='1' style='padding-left:10px; text-align:left; border:1px #000000 solid;'><strong>Product Code </strong></td>
	<td colspan='1' style='padding-left:10px;  text-align:left; border:1px #000000 solid;'><strong>Product Discount </strong></td>
	 <td colspan='1' style='padding-left:10px; text-align:left; border:1px #000000 solid;'><strong>Product Price</strong></td>
	<td colspan='1' style='padding-left:10px; text-align:left; border:1px #000000 solid;'><strong>Availability</strong></td>
    </tr>

	<tr style='background:#FFFFFF;'>
    <td colspan='2' style='padding-left:10px;  text-align:left; border:1px #000000 solid;'>$name</td>
	<td colspan='2' style='padding-left:10px;  text-align:left; border:1px #000000 solid;'> <img class='img-responsive' style='height:40px; width:40px;' src='http://www.priyoshops.com/webcontrol/product_manage/photo_gallery/' .$image;></td>
	<td colspan='1' style='padding-left:10px; text-align:left; border:1px #000000 solid;'>$product_code</td>
	<td colspan='1' style='padding-left:10px;  text-align:left; border:1px #000000 solid;'>$discount</td>
	 <td colspan='1' style='padding-left:10px; text-align:left; border:1px #000000 solid;'>$price</td>
	<td colspan='1' style='padding-left:10px; text-align:left; border:1px #000000 solid;'>$availability</td>
    </tr>






		<tr style='background:#f3f3f3;'>
    <td colspan='8' style='padding-left:10px; width:100%; text-align:left;'><strong>ADDRESS</strong><br/>Gulgolarmoor, Thana, Rod, Turag, Dhaka - 1230<br/>Mobile : 09638900325<br/>
Web : www.priyoshops.com

</td>


    </tr>

	<tr style='background:#FFFFFF;'>
    <td colspan='8' style='padding-left:10px; width:100%; text-align:center; padding-top:10px; padding-bottom:10px;'><strong>THANK FOR YOU SHOPPING AT WWW.PRIYOSHOPS.COM</strong></td>
    </tr>

    </table>
	www.priyoshops.com

	</th>
    </tr>

    </table>
    </body>
    </html>
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
    $headers .= 'From: name' . "\r\n";
    mail($to,$subject,$message,$headers);
	}

	$result = mysqli_query("insert into products_manage values('', '$sub_cat_id', '$name', '$product_code', '$availability', '$discount', '$old_price', '$price', '$status', '$pro_image', '$description', '', '', '$pro_image_1', '$pro_image_2','$points')");
	if($result)
	{
	?>
		<script type="text/javascript" language="javascript">
			alert("successfully Insert......");
			location.replace("index.php");

		</script>
	<?php
	}
	else
	{
	?>
		<script type="text/javascript" language="javascript">
			alert("Insert Failed");
			location.replace("index.php");

		</script>

	<?php
	}

?>
