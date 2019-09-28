<?php
	$No = ' ';
	if (isset($_REQUEST['number'])) {
		$No = $_REQUEST['number'];
		if ($No < 100) {
			echo '<br/><p style="color:black;">Nho hon 100</p>';
		}
		else if ($No > 100) {
			echo '<br/><p style="color:black;">Lon hon 100</p>';
		}
		else if ($No == 100) {
			echo '<br/><p style="color:black;">Bang 100</p>';
		}
	}
?>