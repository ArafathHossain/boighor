<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php require_once("title.php"); ?></title>

	<!-- bootstrap  start -->
  <script src="js/jquery.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- bootstrap  end -->

	<link rel="stylesheet" href="css_2/style_1.css">



</head>
<body style="background-color:#FFFFFF;">
	<div class="row">

		<div class="col-md-4">
		&nbsp;
		</div>
		<div class="col-md-4">
			<div class="row thumbimage1" style="background-color:#fafdfe; margin-top:150px;">
				<div class="col-md-12">
					<div class="row thumbimage2" align="center" style="background-color:#2ca6e5; padding:10px; margin:10px; font-size:18px; color:#FFFFFF;">
						<strong>Login to Admin Panel</strong>
					</div>
					<div class="row" style="padding-top:20px;">
					<form class="form-horizontal" method="post" action="login_action.php">
					<div class="form-group">
					<label class="col-sm-3 control-label"  style="color:#2ca6e5;">User Name</label>
					<div class="col-sm-8">
					<input type="trxt" class="form-control" name="userid" id="userid" placeholder="User Name">
					</div>
					</div>
					<div class="form-group">
					<label class="col-sm-3 control-label" style="color:#2ca6e5;">Password</label>
					<div class="col-sm-8">
					<input type="password" class="form-control" name="userpassword" id="userpassword" placeholder="Password">
					</div>
					</div>
					<div class="form-group">
					<div class="col-sm-offset-3 col-sm-8">
					<button type="submit" class="btn btn-default thumbimage2" style="color:#ffffff; background-color:#2ca6e5;">Login</button>
					</div>
					</div>
					</form>
				</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
		&nbsp;
		</div>

	</div>
</body>
</html>
