<?php
	echo '<h1 style="text-align:center; color: green; background-color:black;"> FOCUSVCE </h1><hr><br><div style="margin: 0 auto; padding 0; background-color:black; color:green; text-align:center;">';
	$i = 5;
	if($i>1){
		echo "Greater than 1";
	}
	else if($i>5) {
		echo "Greater than 5";
	}
	else {
		echo "Damn !!!";
	}
	echo "<br>";
	for($i=1;$i<=100;$i++) {
		echo $i;
		echo "<br>";
	}
	echo "</div>";
?>
