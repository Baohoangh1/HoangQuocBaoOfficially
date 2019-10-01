<?php
	require_once('database.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>ASSIGNMENT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top: 30px;">
	<div class="form-group" style="background-color: black;">
		<h2 style="color: white; text-align: center;">BAN QUAN AO</h2>
	</div>

	<div class="row">
<?php
	$sql = 'select count(id) as number from sanpham';
	$result = executeResult($sql);
	$number = 0;
	if ($result != null && count($result) > 0) {
		$number = $result[0]['number'];
	}

	$pages = ceil($number /12);
	$current_page = 1;


	if (isset($_GET['page'])) {
		$current_page = $_GET['page'];
	}

	$index = ($current_page -1) *12;

	$sql = 'select * from sanpham limit '.$index.', 12';
	$result = executeResult($sql);

	foreach ($result as $sanpham) {
		echo '<div class="col-md-3">
			<img src="'.$sanpham['thumbnail'].'" width="100%">
			<p>'.$sanpham['title'].'</p>
			<p>'.$sanpham['price'].'$ <del>'.$sanpham['des'].'</del></p>	
		</div>';
	}
?>
	</div>

	<div class="row">
		<ul class="pagination">
<?php
	for ($i=0; $i < $pages; $i++) { 
		echo '<li><a href="?page='.($i +1).'">'.($i +1).'</a></li>';
	}
?>
		</ul>
	</div>	
</div>


</body>
</html>