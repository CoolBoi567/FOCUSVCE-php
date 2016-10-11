<!--/*
	Author : Prashant Shahi
	CSE-5th Sem
	ihahstnahsarp@gmail.com
*/-->
<?php
	/* Alternative : ctype_lower($str) returns TRUE if all lowercase */

	function check($str) {
		$length=strlen($str);
		for($i=0;$i<$length;$i++)
			if(ctype_upper($str[$i])==$str[$i])
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
			echo $_GET['str'].' has all lower case alphabets.';
		else
			echo $_GET['str'].' has doesn\'t have all lower case alphabets.';
		echo '</p>';
	}
?>
