<!DOCTYPE html>
<html>
<head>
	<title>bt151_1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('https://images.techhive.com/images/article/2014/12/math_blackboard-100534564-large.jpg');">
	<div class="container" style="background-color: midnightblue;padding-bottom: 20px;">
		<form method="post" action="http://localhost:81/gokisoft/public/bt151_1_php">
		{{ csrf_field() }}
			<div class="form-group" style="background-color: #349">
			<h2 style="color: white; text-align: center;">COMPARISON</h2>
			</div>
			<div class="form-group">
				<label for="username" style="color: white;">NUMBER TO COMPARE</label>
				<input type="text" name="number" class="form-control">
			</div>
			<button class="btn btn-success" name="compare">COMPARE TO 100</button>			
		</form>
	</div>
</body>
</html>