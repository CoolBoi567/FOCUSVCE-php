<!--/*
	Author : Prashant Shahi
	CSE-5th Sem
	ihahstnahsarp@gmail.com
*/-->
<?php
	$id_number=array("Ram"=>"99","Abhinav"=>"141","Messi"=>"10","Ronaldo"=>"7");

	echo '<br/><ul><li>Ascending order sort by value: <br/>';
	asort($id_number);
	echo '<ol>';
	foreach($id_number as $key=>$value){
		echo '<li>'.$key.' => '.$value.'</li>';
	}
	echo '</ol></li>';

	echo '<br/><li>Ascending order sort by key: <br/>';
	ksort($id_number);
	echo '<ol>';
	foreach($id_number as $key=>$value){
		echo '<li>'.$key.' => '.$value.'</li>';
	}
	echo '</ol></li>';

	echo '<br/><li>Descending order sort by value: <br/>';
	asort($id_number);
	echo '<ol>';
	foreach($id_number as $key=>$value){
		echo '<li>'.$key.' => '.$value.'</li>';
	}
	echo '</ol></li>';

	echo '<br/><li>Descending order sort by key: <br/>';
	ksort($id_number);
	echo '<ol>';
	foreach($id_number as $key=>$value){
		echo '<li>'.$key.' => '.$value.'</li>';
	}
	echo '</ol></li></ul>';
?>
