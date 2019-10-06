<!DOCTYPE html>
<html lang="en">
<head>
	<title>bt646 index</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary" >
			<div class="panel-heading">
				danh san pham		
			</div>
			<div class="panel-body">
				<table class="table table-bordered">

					<thead>
						<tr>
							<th>STT</th>
							<th>ten san pham</th>
							<th>gia Tien</th>
							<th>Giam Gia</th>
							<th>mo Ta</th>
						</tr>
					</thead>
					<tbody>
						@foreach($productList as $items)
							<tr>
								<td>{{ $index++ }}</td>
								<td>{{ $items->tenSanPham }} </td>
								<td>{{ $items->giaTien }} </td>
								<td>{{ $items->giamGia }} </td>
								<td>{{ $items->moTa }} </td>
								

							</tr>

						@endforeach
					</tbody>
				</table>
				{{ $productList->links() }}
			</div>
			
		</div>
	</div>

</body>
</html>