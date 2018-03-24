<?php


// includeme.php

echo 'I\'ve been included! <br/>';


// $script_name = $_SERVER['SCRIPT_NAME'];

// echo $script_name;



$ip_address = $_SERVER['REMOTE_ADDR'];

$ip_blocked = array('127.0.0.1', '100.100.100.100', '192.168.10.1');

// $path = '/resources/views/testOfPhpFunctions/testOfPhpFunctions.blade.php';

$path = $_SERVER['PHP_SELF'];

echo $path;


?>


<form action="<?php  echo $path ?>" method="POST">

	<input type="submit" name="submit" value="Submit">
	


</form>