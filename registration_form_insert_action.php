<?php
	session_start();
	require_once("webcontrol/connect_db.php");

	$name 				= htmlspecialchars($_REQUEST['name']);
	$email 				= htmlspecialchars($_REQUEST['email']);
	$phone_no 			= htmlspecialchars($_REQUEST['phone_no']);
	$address 			= htmlspecialchars($_REQUEST['address']);
	$user_id 			= htmlspecialchars($_REQUEST['user_id']);
	$status 			= 'Active';
	$password 			= htmlspecialchars($_REQUEST['password']);
	$userpass_md5 		= md5($password);
	$password_con 		= htmlspecialchars($_REQUEST['password_con']);


	$folder = "webcontrol/registration_view/photo_gallery/";
	$extention = strrchr($_FILES['image']['name'], ".");
	$imgname = time();
	$imgname = $imgname+1;
	$imgname = $imgname.$extention;
	$uploaddir = $folder . $imgname;
	$points = 50;
	if($extention)
	{

	if($extention == ".jpg" || $extention == ".JPG" || $extention == ".jpeg" || $extention == ".JPEG" || $extention == ".png" || $extention == ".PNG" ||
		$extention == ".gif" || $extention == ".GIF" || $extention == ".pdf"|| $extention == ".PDF" || $extention == ".zip"|| $extention == ".ZIP")
		{
		move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir);

		$q1 = mysqli_query("insert into registration_form values('', '$name', '$email', '$phone_no', '$imgname', '$address', '', '', '', '', '', '$user_id', '$status', '$userpass_md5', '$password_con','$points')");

	} else {
			?>
				<script language="javascript" type="text/javascript">
					alert("Sorry, only PDF, JPG, JPEG, PNG, RTF, TXT & Doc files are allowed.");
					location.replace("registration_form.php");
				</script>
			<?php
		}

	} else {
		$q1 = mysqli_query("insert into registration_form values('', '$name', '$email', '$phone_no', '', '$address', '', '', '', '', '', '$user_id', '$status', '$userpass_md5', '$password_con','$points')");
	}


if($q1)

{

		$_SESSION['insert_msg'] = "Succesfully Insert";

		if(!empty($_SESSION['uniq_id'])){
		$uniq_id	 	= $_SESSION['uniq_id'];
		$result1234 = mysqli_query("select * from temp_details where temp_id = '$uniq_id'");
		$number_of_rows = mysqli_num_rows($result1234);
		}

?>
	<script language="javascript" type="text/javascript">
		alert("register has been successful.");

		<?php
			if(!empty($number_of_rows)){
				$result = mysqli_query("select id from registration_form order by id desc limit 0, 1");
				$rr1 = mysqli_fetch_array($result);
				$id = $rr1['id'];
				$_SESSION['customer_id'] = $id;
			?>
			location.replace("delivery_page.php");
			<?php } else { ?>

			location.replace("index.php");
			<?php }

		?>




	</script>
<?php
} else {

	$_SESSION['insert_msg'] = "Insert Failed";
?>
	<script language="javascript" type="text/javascript">
		alert("register has been Failed.");
		location.replace("registration_form.php");
	</script>
<?php
}
?>
