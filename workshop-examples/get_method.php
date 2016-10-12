<?php
	$student=array("username"=>$_POST["username"],"passwd"=>$_POST["passwd"]);

	if(empty($student["username"]) or empty($student["passwd"]))
		echo "  <p>Unauthorized user</p>
			<br>
			<a href='./form.html' alt='Go To Main Page'>Go Back to Main Page</a>";
	else
		echo "Welcome ".$student["username"]."<br>You are authorized here..<br>Your password is ".$student["passwd"];
?>
