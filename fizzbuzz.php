<?php
	echo '<h1 style="text-align:center; color: black; background-color:white;"> FOCUSVCE </h1><div">';
	echo "<hr><br>";
	for($i=1;$i<=100;$i++) {
		if($i%3==0 && i%5==0){
			echo "fizzbuzz";
		}
		else if($i%3==0) {
			echo "fizz";
		}
		else if($i%5==0) {
			echo "buzz";
		}
		else {
			echo $i;
		}
		echo "<br>";
	}
	echo "</div>";
?>
