<?php 
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'test';

function execute($sql) {
	$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn,'utf8');

	mysqli_query($conn, $sql);

	mysqli_close($conn);
}

function executeResult($sql) {
	$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn,'utf8');

	$resultset = mysqli_query($conn, $sql);
	$data = [];

	while ($row = mysqli_fetch_array($resultset, 1)) {
		$data[] = $row;	
	}

	return $data;
}