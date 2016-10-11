<?php
	$color=array('white','green','red');

	foreach($color as $i){
		echo $i.', ';
	}

	sort($color);
	echo '<br>';

	echo '<ol>';
	foreach($color as $i){
		echo '<li style="color:'.$i.';">'.$i.'</li>';
	}
	echo '</ol>';
?>
