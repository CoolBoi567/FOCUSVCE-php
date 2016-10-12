<?php
	function is_prime($num) {
		for($i=2;$i<$num;$i++) {
			if($num%$i==0)
				return true;
		}
		return false;
	}
	for($x=1;$x<=100;$x++){
		echo "$x";
		if(!is_prime($x))
			echo " is a Prime Number";
		echo "<br />";
	}
?>
