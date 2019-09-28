<!DOCTYPE html>
<html>
<head>
	<title>bt151_2</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('https://images.techhive.com/images/article/2014/12/math_blackboard-100534564-large.jpg');">
	<div class="container" style="background-color: midnightblue;padding-bottom: 20px;">
		<form method="post" action="http://localhost:81/gokisoft/public/bt151_2_php">
		{{ csrf_field() }}
			<div class="form-group" style="background-color: #349">
			<h2 style="color: white; text-align: center;">PT AX^2 + BX + C = 0</h2>
			</div>
			<div class="form-group">
				<label for="username" style="color: white;">A INPUT</label>
				<input type="text" name="a" class="form-control">
			</div>
			<div class="form-group">
				<label for="username" style="color: white;">B INPUT</label>
				<input type="text" name="b" class="form-control">
			</div>
			<div class="form-group">
				<label for="username" style="color: white;">C INPUT</label>
				<input type="text" name="c" class="form-control">
			</div>
			<button class="btn btn-success" name="find">FIND X VALUE</button>			
		</form>
	</div>
</body>
</html>