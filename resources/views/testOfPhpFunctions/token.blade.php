<?php

$script = file_get_contents('/home/vagrant/Code/international/resources/views/testOfPhpFunctions/testOfPhpFunctions.blade.php');

$tokens = token_get_all($script);

echo '<pre>';
print_r($tokens);
echo '</pre>';

$variable = array(1,2,3,4,5);

foreach ($variable as $key => $value){

	echo  $value;

}



?>