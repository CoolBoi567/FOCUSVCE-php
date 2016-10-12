<!--/*
	Author : Prashant Shahi
	CSE-5th Sem
	ihahstnahsarp@gmail.com
*/-->
<?php
	$temp=array(78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73);
	$sum=0;
	function check($arr,$key) {
		foreach($arr as $i)
			if($key===$i)
				return false;
		return true;
	}
	function print_array($arr) {
		for($i=0;$i<count($arr);$i++){
			echo $arr[$i];
			if($i<count($arr)-1)
				echo ', ';
		}
	}
	echo 'Recorded Temperatures :<br>';
	foreach($temp as $key=>$value){
		$sum+=$value;
		echo $value;
		if($key<count($temp)-1)
			echo ', ';
	}
	sort($temp);
	$avg=$sum/count($temp);
	$low=array( );
	$high=array( );
	echo '<br/>';

	for($i=0;$i<count($temp);$i++) {
		if(count($low)<=5) {
			if(check($low,$temp[$i]))
				array_push($low,$temp[$i]);
		}
	}
	for($i=count($temp)-1;$i>=0;$i--) {
		if(count($high)<=5) {
			if(check($high,$temp[$i]))
				array_push($high,$temp[$i]);
		}
	}
	echo '<br/><br/>Average Temperature : '.$avg;
	echo '<br/><br/>List of five lowest temperatures :<br/>';
	print_array($low);
	echo '<br/><br/>List of five highest temperatures :<br/>';
	$high=array_reverse($high);
	print_array($high);
?>
