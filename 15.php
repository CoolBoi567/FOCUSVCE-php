<?php
	/* Alternative : Use time() function for simplicity.
			 Demerit : We will get same value for a value generated over a second. :-# */

	$str='abcdefghijklmnopqrstuvwxyz';
#	echo 'Sample string is : <br/>'.$sample_str;

	$len=strlen($str);
	echo '<p>';
		for($i=0;$i<$len;$i++)
			echo $str[$i];
	echo '</p>';
?>
