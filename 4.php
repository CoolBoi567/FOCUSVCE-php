<!--/*
	Author : Prashant Shahi
	CSE-5th Sem
	ihahstnahsarp@gmail.com
*/-->

<?php

	echo '<br/>';
	if(isset($_GET['add'])) {
		$list=$_GET['add'];
		$fp1=fopen('./4.txt','a') or die('Error Appending');
		fwrite($fp1,$list.PHP_EOL);
		fclose($fp1);
	}

	$fp2=file("./4.txt");
	if($fp2===false)
		echo 'Error Occurred';
	$min=1000;
	$max=0;
	echo 'The Array Contents are :<br><ol>';
	foreach($fp2 as $line) {
		echo '<li>'.$line.'</li>';
		$temp=0;
		for($i=0;$line[$i+1]!='';$i++) {
			$temp++;
		}
		if($min>$temp) $min=$temp;
		if($max<$temp) $max=$temp;
	}
	echo '</ol>';
	echo '<br/>The shortest array length is '.$min.'.';
	echo '<br/>The longest array length is '.$max.'.';
?>
<!--/*	To input `new_data`
	Usage : `http://localhost/focus/4.php?add=new_data`  */-->

<!-- Let's not make bugs' house.. -->
<!--
	<form method="GET">
		Add string to the list : <input type="text" name="add"/>
		<input type="submit" value="Add" />
	</form>
-->
