<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('https://images.techhive.com/images/article/2014/12/math_blackboard-100534564-large.jpg');">
	<div class="container" style="background-color: midnightblue;padding-bottom: 20px;">
		<form method="get" action="http://localhost:81/gokisoft/public/bt150_1_php">
		{{ csrf_field() }}
			<div class="form-group" style="background-color: #349">
			<h2 style="color: white; text-align: center;">IN HINH TAM GIAC</h2>
			</div>		
			<div class="form-group">
				<label for="username" style="color: white; font-weight: 200%;">SO N</label>
				<input type="text" name="son" class="form-control" placeholder="Nhap so n">
			</div>
			<div style="align-self: center; text-align: center;">
				<button class="btn btn-success" name="nhap" style="margin: 0 auto;">NHAP</button>
			</div>						
		</form>
	</div>
</body>
</html>