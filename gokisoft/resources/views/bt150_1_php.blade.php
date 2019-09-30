<?php
	$soN = ' ';

	if (isset($_REQUEST['son'])) {
		$soN = $_REQUEST['son'];
	}

	for ($i = 1; $i <=$soN; $i++) {
		for ($j = $i; $j >0; $j--) {
			echo "*";
		}
		echo "<br/>";
	}

?>