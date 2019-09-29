<?php						
	$SoA = $SoB = $Tong = ' ';
	
	if (isset($_REQUEST['soa'])) {
		$SoA = $_REQUEST['soa'];
	}

	if (isset($_REQUEST['sob'])) {
		$SoB = $_REQUEST['sob'];
	}

	if (isset($_REQUEST['cong'])) {
		//$Tong = $SoA + $SoB;
		echo "<br/>so a: ".$SoA;
		echo "<br/>so b: ".$SoB;
		//echo "tong 2 so a va b la: ".$Tong;
		echo "<br/>Tong 2 so a va b la: ";
		echo $SoA + $SoB;
	}

	if (isset($_REQUEST['tru'])) {
		echo "<br/>so a: ".$SoA;
		echo "<br/>so b: ".$SoB;
		echo "<br/>Hieu 2 so a va b la: ";
		echo $SoA - $SoB;
	}
	
	if (isset($_REQUEST['nhan'])) {
		echo "<br/>so a: ".$SoA;
		echo "<br/>so b: ".$SoB;	
		echo "<br/>Tich 2 so a va b la: ";
		echo $SoA * $SoB;
	}
	
	if (isset($_REQUEST['chia'])) {
		echo "<br/>so a: ".$SoA;
		echo "<br/>so b: ".$SoB;

		if ($SoB == 0) {
			echo "<br/>Ko xac dinh";
		}

		else {
			echo "<br/>Tich 2 so a va b la: ";
			echo $SoA / $SoB;
		}		
	}
?>