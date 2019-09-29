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
		<form method="get">
		{{ csrf_field() }}
			<div class="form-group" style="background-color: #349">
			<h2 style="color: white; text-align: center;">ULTIMATE CALCULATOR</h2>
			</div>
			
			<div class="form-group">
				<label for="username" style="color: white; font-weight: 200%;">SO A</label>
				<input type="text" name="soa" class="form-control" placeholder="Nhap so a">
			</div>
				
			<div class="form-group">
				<label for="username" style="color: white; font-weight: 200%;">SO B</label>
				<input type="text" name="sob" class="form-control" placeholder="Nhap so b">
			</div>			
			
			<div style="align-self: center; text-align: center;">
				<button class="btn btn-default" name="cong" style="margin: 0 auto;">CONG</button>
				<button class="btn btn-default" name="tru" style="margin: 0 auto;">TRU</button>
				<button class="btn btn-default" name="nhan" style="margin: 0 auto;">NHAN</button>
				<button class="btn btn-default" name="chia" style="margin: 0 auto;">CHIA</button>
			</div>	

			<?php						
	$SoA = $SoB = ' ';
	
	if (isset($_REQUEST['soa'])) {
		$SoA = $_REQUEST['soa'];
	}

	if (isset($_REQUEST['sob'])) {
		$SoB = $_REQUEST['sob'];
	}

	if (isset($_REQUEST['cong'])) {
		echo '<br/><p style="color: white;">Tong 2 so a va b la: '.($SoA + $SoB).'</p>';
	}

	if (isset($_REQUEST['tru'])) {
		echo '<br/><p style="color: white;">Hieu 2 so a va b la: '.($SoA - $SoB).'</p>';
	}
	
	if (isset($_REQUEST['nhan'])) {	
		echo '<br/><p style="color: white;">Tich 2 so a va b la: '.($SoA * $SoB).'</p>';
	}
	
	if (isset($_REQUEST['chia'])) {
		if ($SoB == 0) {
			echo '<br/><p style="color: white">Ko xac dinh</p>';
		}

		else {
		echo '<br/><p style="color: white;">Thuong 2 so a va b la: '.($SoA / $SoB).'</p>';
		}		
	}
?>			
		</form>
	</div>
</body>
</html>