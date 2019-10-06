<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('https://images.techhive.com/images/article/2014/12/math_blackboard-100534564-large.jpg');">
	<div class="container" style="background-color: midnightblue;padding-bottom: 20px;">
		<form method="post">
		{{ csrf_field() }}
			<div class="form-group" style="background-color: #349">
			<h2 style="color: white; text-align: center;">PRODUCTS</h2>
			</div>
			<div class="form-group">
				<label for="username" style="color: white;">Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="username" style="color: white;">images</label>
				<input type="text" name="image" class="form-control">
			</div>
			<div class="form-group">
				<label for="username" style="color: white;">Price</label>
				<input type="text" name="price" class="form-control">
			</div>
			<div class="form-group">
				<label for="username" style="color: white;">Discount</label>
				<input type="text" name="discount" class="form-control">
			</div>
			<div class="form-group">
				<label for="username" style="color: white;">Description</label>
				<input type="text" name="description" class="form-control">
			</div>
			<div>
				<button class="btn btn-success" name="add">Add</button>	
			</div>			
			
			<?php

	if (isset($_REQUEST['add'])) {
		$name = $image = ' ';

		if(!empty($_REQUEST['name']) && !empty($_REQUEST['image'])) {
			//return redirect('http://localhost:81/gokisoft/public/view');
			
			//$triggersms = file_get_contents('http://localhost:81/gokisoft/public/view');
			
			//return $triggersms;

			// $url ="http://localhost:81/gokisoft/public/view";

			// Redirect::away($url)
			echo '<script language="javascript">
			alert("ADD INFO SUCCESSFULLY")
			</script>';
			exit;
		}

		else {
			echo '<script language="javascript">
			alert("Missing info neccessary")
			</script>';
			exit;
		}

		// if(isset($_REQUEST['image'])) {
		// 	$name = $_REQUEST['image'];
		// }
	}
?>
		</form>
	</div>
</body>
</html>