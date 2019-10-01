<!DOCTYPE html>
<html>
<head>
	<title>bt153_WELCOME</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div style="text-align: center; color: red;">
		<h1>LIST</h1>
	</div>

	<div class ="container-fluid">
		<table class="table table-bordered table-hover">
			<tr>
				<th>No</th>
				<th>Full name</th>
				<th>User name</th>
				<th>Password</th>
				<th>Email</th>
				<th>Phone number</th>
			</tr>
			<tbody>
<?php
require_once ("sql_connect.php");

$query = "SELECT * FROM STUDENT";
$data = array();

while ($row = mysqli_fetch_array($result, 1)) {
	$data[] = $row;
}

require_once ("sql_close.php");

for ($i =0; $i <count($data);$i++) {
	echo '<tr>
		<td>'.($i +1).'</td>
		<td>'.$data[$i]['FULL_NAME'].'</td>
		<td>'.$data[$i]['USER_NAME'].'</td>
		<td>'.$data[$i]['PASSWORD'].'</td>
		<td>'.$data[$i]['EMAIl'].'</td>
		<td>'.$data[$i]['PHONE_NUMBER'].'</td>
	</tr>';
}

?>				

			</tbody>

	</div>
</body>
</html>