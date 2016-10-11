<!--/*
	Author : Prashant Shahi
	CSE-5th Sem
	ihahstnahsarp@gmail.com
*/-->

<?php
	/* Alternative : Play around with ASCII using chr() function
			ASCII for 'A' = 65 and 'a' = 97		 */

	function next_char($str,$key) {
		$len1=strlen($str);
		$pos=-1;
		for($i=0;$i<$len1;$i++)
			if($key==$str[$i]) {
				$pos=$i;
				break;
			}
		if($pos==-1)
			return 'NOT VALID';
		if($str[$pos]=='z' or $str[$pos]=='Z')
			$pos=$pos-26;
		else if($str[$pos]=='0')
			$pos=$pos-10;
		return $str[$pos+1];
	}

	$sample_str='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
#	echo 'Sample string is : <br/>'.$sample_str;

	echo '<br/><br/><form method="GET">
		Enter a character : <input type="text" name="key" /> 
				 <input type="submit" value="Generate next character" />
	      </form>';
	if(isset($_GET['key'])) {
		$res=next_char($sample_str,$_GET['key']);
		echo '<p>';
			echo 'Next character is : `'.$res.'`';
		echo '</p>';
	}
?>
