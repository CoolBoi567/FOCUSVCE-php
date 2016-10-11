<!--/*
	Author : Prashant Shahi
	CSE-5th Sem
	ihahstnahsarp@gmail.com
*/-->

<?php
	/* Alternative : Find Reverse, check all elements of reverse (boring) :-# */

	function check($str,$key) {
		$len1=strlen($str);
		$len2=strlen($key);

		for($i=0;$i<$len1;$i++) {
			for($j=0;$j<$len2;$j++) {
				if($str{$i+$j}!==$key[$j])
					break;
				else if($j+1==$len2)
					return true;
			}
		}
		return false;
	}
	$sample_str='The quick brown fox jumps over the lazy dog.';
	echo 'Sample string is : <br/>'.$sample_str;

	echo '<br/><br/><form method="GET">
		Enter a key string : <input type="text" name="key" /> 
				 <input type="submit" value="Submit" />
	      </form>';
	if(isset($_GET['key'])) {
		$res=check($sample_str,$_GET['key']);
		echo '<p>';
		if($res)
			echo '`'.$_GET['key'].'` exists in the sample string.';
		else
			echo '`'.$_GET['key'].'` does not exist in the sample string.';
		echo '</p>';
	}
?>
