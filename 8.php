<!--/*
	Author : Prashant Shahi
	CSE-5th Sem
	ihahstnahsarp@gmail.com
*/-->

<?php
	function fact($num) {
		if($num<0)
			return -1;
		if($num==0)
			return 1;
		return $num*fact($num-1);
	}
	echo '<form method="GET">
		Enter a number : <input type="text" name="num" /> 
				 <input type="submit" value="Submit" />
	      </form>';
	if(isset($_GET['num'])) {
		if(intval($_GET['num'])==0)
			$res=0;
		else
			$res=fact($_GET['num']);
		echo '<p>';
		if($res==0)
			echo 'Error: Not a valid number';
		else if ($res==-1)
			echo 'Error: Negative number';
		else
			echo 'Factorial of '.$_GET['num'].' is '.$res;
		echo '</p>';
	}
?>
