<?php
if (!empty($_POST)) {
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username != '' && $password != '') {
		//redirect login.php
		header('Location: login.php?username='.$username.'&password='.$password);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>bt153_RESGISTER</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('http://briansheridanphotography.ie/wp-content/uploads/2016/10/straw-field-col.jpg')">
	<div class="container" style="background-color: lightblue; margin: auto; padding-bottom: 20px; float: center;">
		<form method="post">
			
			<div class="form-group" style="background-color: mediumturquoise;">
			<h2 style="color: white; text-align: center;">Register Account</h2>
			</div>
			<div class="form-group">
				<label for="username">User Name</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Full Name</label>
				<input type="text" name="fullname" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Age</label>
				<input type="text" name="age" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Sex</label>
				<input type="text" name="sex" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Email</label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Phone</label>
				<input type="text" name="phone" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Address</label>
				<input type="text" name="address" class="form-control">
			</div>
			<div style="text-align: left;">				
				<button class="btn btn-success">REGISTER</button>
			</div>
		</form>
	</div>
</body>
</html>