<?php
	$temp=array(78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73);
	$sum=0;
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
	foreach($temp as $key=>$value){
		if($key<5)
			array_push($low,$value);
		if($key>(count($temp)-6))
			array_push($high,$value);
	}
	echo '<br/><br/>Average Temperature : '.$avg;
	echo '<br/><br/>List of five lowest temperatures :<br/>';
	for($i=0;$i<count($low);$i++){
		echo $low[$i];
		if($i<count($low)-1)
			echo ', ';
	}
	echo '<br/><br/>List of five highest temperatures :<br/>';
	for($i=0;$i<count($high);$i++){
		echo $high[$i];
		if($i<count($high)-1 )
			echo ', ';
	}
?>
