<?php
	$arr=array("one","two","three");
	echo "<br>Contents of Array in the beginning :<br>";
	for($i=0;$i<count($arr);$i++)
		echo $arr[$i]."<br>";
	
	array_push($arr,"four");
	echo "<br>Contents of Array after push of 'four':<br>";
	for($i=0;$i<count($arr);$i++)
		echo $arr[$i]."<br>";

//#	$rem="two";
	array_pop($arr);
	echo "<br>Contents of Array after pop :<br>";
	for($i=0;$i<count($arr);$i++)
		echo $arr[$i]."<br>";

	if(($index=array_search('two', $arr)))
		unset($arr[$index]);
	echo "<br>Contents of Array after removing 'two' :<br>";
	for($i=0;$i<count($arr);$i++)
		if($arr[$i]!="")
			echo $arr[$i]."<br>";
?>
