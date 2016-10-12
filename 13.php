<!--/*
	Author : Prashant Shahi
	CSE-5th Sem
	ihahstnahsarp@gmail.com
*/-->

<?php
	/* Alternative : Use time() function for simplicity.
			 Demerit : We will get same value for a value generated over a second. :-# */

	function generate_password($str,$key) {
		$len1=strlen($str);
		$passwd=' ';
		for($i=1;$i<=$key;$i++)
			$passwd[$i]=$str{(round(microtime()*100000)/$i)%$len1};
		/* microtime() is funciton(UNIX timestamp second as a float value) */
		return $passwd;
	}
	$sample_str='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	echo 'Sample string is : <br/>'.$sample_str;

	echo '<br/><br/><form method="GET">
		Enter a length of your password : <input type="text" name="key" /> 
				 <input type="submit" value="Generate Password" />
	      </form>';
	if(isset($_GET['key'])) {
		$res=generate_password($sample_str,$_GET['key']);
		echo '<p>';
			echo 'Generated password is : `'.$res.'`';
		echo '</p>';
	}
?>
