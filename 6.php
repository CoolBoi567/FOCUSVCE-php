<!--/*
	Author : Prashant Shahi
	CSE-5th Sem
	ihahstnahsarp@gmail.com
*/-->
<?php
	// # For First RHS
	for($i=1;$i<=5;$i++) {
		for($j=1;$j<=$i;$j++)
			echo '* ';
		echo '<br />';
	}

	// # For Second inverted RHS
	for($i=5;$i>0;$i--) {
		for($j=$i;$j>0;$j--)
			echo '* ';
		echo '<br />';
	}
?>
