<!--/*
	Author : Prashant Shahi
	CSE-5th Sem
	ihahstnahsarp@gmail.com
*/-->
<?php
	function rev_str($str) {
		$length=strlen($str);
		$rev=' ';
		for($i=0;$i<$length;$i++)
			$rev[$length-$i-1]=$str[$i];
		return $rev;
	}
	echo '<form method="GET">
		Enter a string : <input type="text" name="str" /> 
				 <input type="submit" value="Submit" />
	      </form>';
	if(isset($_GET['str'])) {
		$res=rev_str($_GET['str']);
		echo '<p>';
		if($res==' ')
			echo 'Error: Not a valid text';
		else
			echo 'Reverse of '.$_GET['str'].' is '.$res;
		echo '</p>';
	}
?>
