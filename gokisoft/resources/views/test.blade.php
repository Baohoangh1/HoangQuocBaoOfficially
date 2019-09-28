<?php
	$name = $image = ' ';

	if(!empty($_REQUEST['name']) && !empty($_REQUEST['image'])) {
		//return redirect('http://localhost:81/gokisoft/public/view');
		
		//$triggersms = file_get_contents('http://localhost:81/gokisoft/public/view');
		
		//return $triggersms;

		// $url ="http://localhost:81/gokisoft/public/view";

		// Redirect::away($url)
		echo 'okok';
	}

	else {
		echo '<script language="javascript">';
		echo 'alert("Missing info neccessary")';
		echo '</script>';
		exit;
	}

	// if(isset($_REQUEST['image'])) {
	// 	$name = $_REQUEST['image'];
	// }


?>