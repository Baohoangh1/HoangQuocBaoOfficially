<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'BanHang';

function createDatabase() {
	// connection to database
	$conn = new mysqli(HOST, USERNAME, PASSWORD);
	mysqli_set_charset($conn, 'utf8');

	//create query
	$sql = 'create database if not exists '.DATABASE;
	mysqli_query($conn, $sql); 

	//close
	mysqli_close($conn);
}

function createTable() {
	// connection to database
	$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//create query
	$sql = 'create table if not exists sanpham (
		id int primary key auto_increment,
		thumbnail varchar(200),
		title varchar(150) not null,
		price int default 0,
		des varchar(50)
	)';
	mysqli_query($conn, $sql); 

	//close
	mysqli_close($conn);
}

function initData() {
	// connection to database
	$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//create query
	for ($i=0; $i < 50; $i++) { 
	 	# code...
	 	$sql = 'insert into sanpham(thumbnail, title, price, des) values ("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxpXL8RZLjeCtfrOCExnlbhb6UO_UzlDY_TIor90_l0AcxMI7kRQ","Ao khoac du '.$i.'","'.(200 + 3*$i).'","Rat re")';
		mysqli_query($conn, $sql);
	 } 

	//close
	mysqli_close($conn);
}

function executeResult($sql) {
	// connection to database
	$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//create query
	$data = [];
	$result = mysqli_query($conn, $sql); 

	while($row = mysqli_fetch_array($result, 1)) {
		$data[] = $row;
	}

	//close
	mysqli_close($conn);

	return $data;
}


createDatabase();
createTable();
initData();