<?php

	if (isset($_REQUEST['add'])) {
		$name = $image = ' ';

		if(isset($_REQUEST['name']) && isset($_REQUEST['image'])) {
			//return redirect('http://localhost:81/gokisoft/public/view');
			
			//$triggersms = file_get_contents('http://localhost:81/gokisoft/public/view');
			
			//return $triggersms;

			// $url ="http://localhost:81/gokisoft/public/view";

			// Redirect::away($url)
			echo '<script language="javascript">
			alert("ADD INFO SUCCESSFULLY")
			</script>';
			exit;
		}

		else {
			echo '<script language="javascript">
			alert("Missing info neccessary")
			</script>';
			exit;
		}

		// if(isset($_REQUEST['image'])) {
		// 	$name = $_REQUEST['image'];
		// }
	}
?>