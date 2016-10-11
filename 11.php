<!--/*
	Author : Prashant Shahi
	CSE-5th Sem
	ihahstnahsarp@gmail.com
*/-->

<?php
	/* Alternative : Find Reverse, check all elements of reverse (boring) :# */

	function check($str) {
		$length=strlen($str);
		for($i=0;$i<$length/2;$i++)
			if($str[$i]!=$str{$length-$i-1})
				return false;
		return true;
	}
	echo '<form method="GET">
		Enter a string : <input type="text" name="str" /> 
				 <input type="submit" value="Submit" />
	      </form>';
	if(isset($_GET['str'])) {
		$res=check($_GET['str']);
		echo '<p>';
		if($res)
			echo $_GET['str'].' is Palindrome.';
		else
			echo $_GET['str'].' is not Palindrome.';
		echo '</p>';
	}
?>
