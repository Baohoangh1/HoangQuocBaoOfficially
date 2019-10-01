<?php
require_once("base.php"); 

if (isset($_GET['delete_id'])) {
	$delete_id = $_GET['delete_id'];
	$sql = 'delete from students where id ='.$delete_id;
	execute($sql);
}   

$Fullname = $Email = $Address = '';

if (isset($_POST['fullname'])) {
	$Fullname = $_POST['fullname'];
}

if (isset($_POST['email'])) {
	$Email = $_POST['email'];
}

if (isset($_POST['address'])) {
	$Address = $_POST['address'];
}

if ($Fullname != '' && $Email != '' && $Address != '') {
	$sql = 'insert into students (fullname, email, address) values ("'.$Fullname.'", "'.$Email.'", "'.$Address.'")';

	execute($sql);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>bt161</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('http://briansheridanphotography.ie/wp-content/uploads/2016/10/straw-field-col.jpg');">
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				INFORMATION MANAGEMENT
			</div>
			<div class="panel-body">
				<table class="table table-hover tabe-bordered">
					<tr>
						<th>No</th>
						<th>Full name</th>
						<th>Email</th>
						<th>Address</th>
						<th width="60px;"></th>
					</tr>
<?php
$sql = 'select * from students';
$result = executeResult($sql);
$no = 1;
foreach ($result as $row) {
	echo '<tr>
			<td>'.($no++).'</td>
			<td>'.$row['fullname'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['address'].'</td>
			<td><a href="?delete_id='.$row['id'].'"><button class="btn btn-danger">XOA</button></a></td>
		</tr>';
}

?>

				</table>
			</div>
		</div> 
	</div>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				INFORMATION INPUT
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					<lable>Fullname</lable>
					<input type="text" name="fullname" class="form-control">
				</div>
				<div class="form-group">
					<lable>Email</lable>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<lable>Address</lable>
					<input type="text" name="address" class="form-control">
				</div>
				<button class="btn btn-success">THEM</button>
				</form>
			</div>
		</div> 
	</div>

</body>
</html>