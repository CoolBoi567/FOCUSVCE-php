<!--/*
	Author : Prashant Shahi
	CSE-5th Sem
	ihahstnahsarp@gmail.com
*/-->

<?php
	/* Alternative : Play around with ASCII using chr() function
			ASCII for 'A' = 65 and 'a' = 97		 */

	$str='abcdefghijklmnopqrstuvwxyz';
#	echo 'Sample string is : <br/>'.$sample_str;

	$len=strlen($str);
	echo '<p>';
		for($i=0;$i<$len;$i++)
			echo $str[$i];
	echo '</p>';
?>
