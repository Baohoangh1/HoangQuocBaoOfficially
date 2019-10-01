<?php
require_once ("define.php");

	$connect = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($connect, "utf8");

	if ($connect ->connect_error) {
		var_dump($connect ->connect_error);
		die();
	}
