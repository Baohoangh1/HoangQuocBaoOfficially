<?php
	$A = $B = $C = $Delta = ' ';

	if (isset($_REQUEST['a'])) {
		$A = $_REQUEST['a'];
	}
	
	if (isset($_REQUEST['b'])) {
		$B = $_REQUEST['b'];
	}

	if (isset($_REQUEST['c'])) {
		$C = $_REQUEST['c'];
	}

	if ($A == 0) {
		if ($B == 0 && $C != 0) echo '<br/>PT vo nghiem';
		else if ($B == 0 && $C == 0) echo '<br/>PT co vo so nghiem';
		else if ($B != 0) echo 'PT co nghiem duy nhat la: '.(-$C /$B);
	}

	else if ($A != 0) {
		$Delta = $B*$B - (4 *$A *$C);
		if ($Delta < 0) echo '<br/>PT vo nghiem';
			
		else if ($Delta == 0) echo '<br/>PT co nghiem duy nhat la: '. (-$B /(2 *$A));
			
		else if ($Delta > 0) echo '<br/>PT co 2 nghiem phan biet x1 x2 lan luot la: '.((-$B + sqrt($Delta))/ (2 *$A)).' va '. ((-$B - sqrt($Delta))/ (2 *$A));
	}
?>