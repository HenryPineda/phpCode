<?php 

//echo "test";

$haystack = 'Hello World!';
$needle = 'orld';





//use the strpos() function

$position = strpos($haystack, $needle);


echo 'The substring "' . $needle . '" in "  ' . $haystack . '" begins at character '. $position; 

// This works fine.

echo '<br/> Requiring Once: ';
require_once '/home/vagrant/Code/international/resources/views/testOfPhpFunctions/includeme.blade.php';

// This works fine as well

echo '<br/> Including: ';
include '/home/vagrant/Code/international/resources/views/testOfPhpFunctions/includeme.blade.php';

// Nothing happens as file is already included.

echo '<br/> Including Once: ';
include_once '/home/vagrant/Code/international/resources/views/testOfPhpFunctions/includeme.blade.php';


// This is fine

echo '<br/> Requiring: ';
require '/home/vagrant/Code/international/resources/views/testOfPhpFunctions/includeme.blade.php';

// Again nothing happens - the file is included

echo '<br/> Requiring Once again: ';
require_once '/home/vagrant/Code/international/resources/views/testOfPhpFunctions/includeme.blade.php';
// Include MySQL class
// require_once '/home/vagrant/Code/international/vendor/laravel/framework/src/Illuminate/Database/Connectors.php';


// Instantiate MySQL class, connect to MySQL and select database
$MySQL = mysqli_connect("127.0.0.1", "homestead", "secret", "homestead");

if (!$MySQL) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "<br/>Success: A proper connection to MySQL was made!" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($MySQL) . PHP_EOL;


if ($result = $MySQL->query("SELECT * FROM empleados LIMIT 10")) {
    printf("Select returned %d rows.\n", $result->num_rows);

    $array = $result->fetch_all();

    print_r(array_values($array));

    /* free result set */
    $result->close();
}


// Generates the top of the page

 function addHeader($page, $title){

 	$page .= <<<EOD
 <html> <head> <title>$title</title> </head>;body> <h1 align="center">$title</h1>

EOD;

return $page;

}

 function addFooter($page, $year, $copyright){

 	$page .= <<<EOD
 <div align="center">&copy; $year $copyright</div>
 </body>
 </html>
EOD;

return $page;

}

// Initialize the page variable

$page = '';

$page = addHeader($page, 'A procedural script');

// Add something to the body of the page

$page .= <<<EOD
<p align="center"> This page was generated with a procedural script </P>
EOD;

// Add the footer to the page
$page = addFooter($page, date('Y'), 'Procedural Designs Inc.');

//Display the page

echo $page;

// echo '<br/> Including: ';
// include '/home/vagrant/Code/international/resources/views/testOfPhpFunctions/page.blade.php';


class bankAccount{


	public $balance = 10.5;

	public function DisplayBalance(){

		return "Balance: ".$this->balance;
	}

	public function withDraw($amount){

		return $this->balance = $this->balance - $amount;

	}

}


	$ResultBalance = new bankAccount;
	$ResultBalance->withDraw(5);
	echo $ResultBalance->DisplayBalance();

	$name = 'alex';
	$age = 21;

	if ($name ===strtolower('Alex')){

		if ($age>=21){
			print '<strong>You\'re over 21</strong>'; //print is slower and uses more resources to execute.
			if (1===1){
				echo "<strong>Yes, 1 is equal to 1.</strong>";// echo is a language constructor and not a function and is a lot faster than print and used less resources to execute.
			}
		} else{
			echo 'Not over 21';
		}	
	}else{
		echo 'You\'are not Alex!';
	}

	echo '<input type="text" name="name">';
		echo "<input type=\"text\" name=\"name\" value=\"Henry\">";

	//phpinfo();


	require '/home/vagrant/Code/international/resources/views/testOfPhpFunctions/page.blade.php';

	$webPage = new page;
	$webPage->addHeader2('This is a script using classes');
	//echo $webPage->displayHeader();
	$webPage->addContent2('This page was generated using classes');
	$webPage->addFooter2(date('Y'), 'Object Designs Inc.');

	echo $webPage->get();
	echo '</br>';


// Video 17 Concatanation.
	echo '<strong>Video 17 Concatanation</strong>';
	echo '<hr>';

	$day = 'Monday';
	$date = 25;
	$year = '2017';

	echo 'The date is <strong>'.$day.' '.$date.' '.$year.'</strong>';
	echo "</br>The date is <strong>$day $date $year</strong>";
	echo '</br>';


// Video 18 If statement.

	echo '</br>';
	echo '<strong>Video 18 If statement</strong>';
	echo '<hr>';

	if (1){
		echo 'True.';
	}else{
	echo 'False.';
	}

	if (1==1){
		echo 'True.';
	}else{
	echo 'False.';
	}

	if (1==2){
		echo 'True.';
	}else{
	echo 'False.';
	}

	$text = 'Something';

	if ($text=='Something'){
		echo 'True.';
	}else{
		echo 'False.';

	}

	echo '</br>';


	// Video 19 If statement.

	echo '</br>';
	echo '<strong>Video 19 If statement</strong>';
	echo '<hr>';


	$number =10;

	if ($number==11){
		echo 'The variable is equal to 10';
	}elseif ($number>9) {
		echo 'The variable is greater than 9';
	}else{
		echo 'The variable is not equal to 10';
	}


	echo '</br>';


	// Video 20 Assignment operators.

	echo '</br>';
	echo '<strong>Video 20 Assignment operators</strong>';
	echo '<hr>';


	$number1 = 10;

	$number1 =$number1 +2;

	echo '</br>';
	echo $number1;

	$number1 +=2;
	echo '</br>';
	echo $number1;

	$number1 -=2;
	echo '</br>';
	echo $number1;

	$text = 'Hello';
	$text .= ' World';
	echo '</br>';
	echo $text;
	echo '</br>';

	echo '<hr>';


	// Video 21 Comparisons.

	echo '</br>';
	echo '<strong>Video 21 Comparisons</strong>';
	echo '<hr>';

	$number1 =10;
	$number2 =10;

	if (1==1){

		echo 'Inside';
	}

	echo '</br>';

	if (1!=2){

		echo 'Inside too!';
	}

	echo '</br>';

	if ($number1 >= $number2){
		echo 'Yes.Number 1 is greater than Number 2';
	}else{

		echo 'No. Number 1 is not greater than Number 2';
	}

	echo '</br>';



	echo '</br>';
	echo '<strong>Video 22 Arithmetic operators</strong>';
	echo '<hr>';


	$sum = 10 + 20;

	echo $sum;

	echo '</br>';

	$sub = 10 - 20;

	echo $sub;

	echo '</br>';

	$div = 10 / 20;

	echo $div;

	echo '</br>';

	$N1 = 100;
	$N2 =50;
	$N3 =2;

	$result = ($N1 + $N2) / $N3;

	echo $result;

	echo '</br>';

	$N4 = 100;
	$N5 =30;


	$result = $N4 % $N5;

	echo $result;

	$result ++;

	echo $result;


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 23 Logical operators</strong>';
	echo '<hr>';


	$number = 10500;
	$upper = 1000;
	$lower = 500;


	if ($number>=$lower && $number<=$upper){

		echo 'ok.';
	}else{

		echo 'Number must be between '.$lower.' and '.$upper;
	}


	echo '</br>';
	$n = 2;
	$canbe1 = 2;
	$canbe2 = 4;


	if ($n==$canbe1||$n==$canbe2){
		echo 'ok.';

	}else{

		echo 'Not ok';
	}


	echo '</br>';
	$n1 = 6;
	$canbe3 = 2;
	$canbe4 = 4;


	if (!($n1==$canbe3) && !($n1==$canbe4)){
		echo 'ok.';

	}else{

		echo 'Not ok';
	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 24 Triple Equals</strong>';
	echo '<hr>';


	$numero1 = '1';
	$numero2 = 1;

	if ($numero1===$numero2){

		echo 'Equal';
	}else{
		echo 'Not Equal';
	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 25  While Loop</strong>';
	echo '<hr>';

	$counter = 1;

	while ($counter<=10){

		echo 'Hello '.$counter.'<br>';

		$counter++;

	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 26 Do while loop</strong>';
	echo '<hr>';


    $counter = 1;

    do{

    	echo 'Itineracion No: '.$counter.'<br>';

    	$counter++;


    }while($counter<=10);



	echo '</br>';



	echo '</br>';
	echo '<strong>Video 27  for loop</strong>';
	echo '<hr>';

	for ($count=1; $count<=10; $count++){
		echo $count.'</br>';
	}


	echo '<hr>';

	for ($taty=10; $taty>=1; $taty--){
		echo 'Vuelta No: '.$taty.'</br>';
	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 28  Switch</strong>';
	echo '<hr>';

	$number =4;

	switch($number){

		case 1:
			echo 'One';
		break;

		case 2:
			echo 'Two';
		break;

		case 3:
			echo 'Three';
		break;

		default:
			echo 'Number not found';
		break;
	}

	echo '<hr>';

	$day = 'Taty';

	switch($day){

		case 'Monday':
			echo 'Monday';
		break;

		case 'Tuesday':
			echo 'Tuesday';
		break;

		case 'Wednesday':
			echo 'Wednesday';
		break;

		case 'Thursday':
			echo 'Thursday';
		break;

		case 'Friday':
			echo 'Friday';
		break;

		case 'Saturday':
		case 'Sunday':
			echo 'It\'s a weekend';
		break;

		default:
			echo 'No tengo idea';
		break;
	}



	echo '</br>';



	echo '</br>';
	echo '<strong>Video 29  Die and exit</strong>';
	echo '<hr>';


	echo 'This works!';
		mysqli_connect("127.0.0.1", "homestead", "secret", "homestead");
			// die('Connected to database but exited!');
				echo 'Connected to database';


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 30  Functions</strong>';
	echo '<hr>';


	function myName(){

		echo 'Henry';
	}

	echo 'My name is ';

	myName();


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 31  Functions with arguments</strong>';
	echo '<hr>';

	$iNumber1 = 10;
	$iNumber2= 5;

	function add($Numero1, $Numero2){

		echo $Numero1 + $Numero2;
	}

	add($iNumber1, $iNumber2);

	echo '</br>';


	function displayDate($day, $month, $year){

		echo $day.' '.$month.' '.$year;
	}

	displayDate('Monday','January', 2001);


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 32  Functions with a return value</strong>';
	echo '<hr>';



	function add2($number1, $number2){

		$result = $number1 + $number2;

		return $result;

	}


	function divide($number1, $number2){

		$result = $number1 / $number2;

		return $result;
	}

	$result = divide(add2(10,10), add2(5,5));

	echo $result;


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 33  Global Variables</strong>';
	echo '<hr>';


	 $user_ip = $_SERVER['REMOTE_ADDR'];


	function echo_ip($user_ip){
		
		$string = 'Your ip address is '.$user_ip;
		echo $string;
	}

	echo_ip($user_ip);


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 34  String functions 1</strong>';
	echo '<hr>';

	$string = 'This is an example string !';

	$string_word_count = str_word_count($string);

	echo $string_word_count;

	$string_word_count = str_word_count($string, 1);

	print_r($string_word_count);

	$string_word_count = str_word_count($string, 2, '!');

	print_r($string_word_count);


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 35  String functions 2 string shuffle</strong>';
	echo '<hr>';


	$string = 'This is an example string & this is a tutorial . !';

	$string_word_count = str_word_count($string, 2, '&.');

	print_r($string_word_count);

	echo '</br>';

	$string2 = 'abcedfghijklmnopqrstuwvxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

	$string_shuffled = str_shuffle($string2);

	echo $string_shuffled;

	$half = substr($string_shuffled, 0,strlen($string2)/2);

	echo '</br>';

	echo $half;

	echo '</br>';

	$string3 = 'This is another example';

	$string_reversed = strrev($string3);

	echo $string_reversed;


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 36  String functions 3 string similarity and length</strong>';
	echo '<hr>';

	$string_one = 'This is my essay. I\'m going to be talking about php.';
	$string_two = 'This is my essay. I wil be talking about the subject php.';

	similar_text($string_one, $string_two, $result);
	echo 'The similarity between is, '.$result;

	$string = 'This is an example string.';

	$string_length = strlen($string);

	echo '</br>';

	echo $string_length;


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 37  String functions 4 string</strong>';
	echo '<hr>';

	$string = '         This is an example string.     ';
	$string_trimmed = trim($string);

	echo $string_trimmed;

	$string = 'This is a <img src="image.jpg"> string.';

	$string_slashes = htmlentities(addslashes($string));

	echo stripslashes($string_slashes);

	echo '</br>';



	echo '</br>';
	echo '<strong>Video 38  Array</strong>';
	echo '<hr>';

	$food =array('Pasta', 'Pizza', 'Salad', 'Vegateble');

	echo $food[1];

	echo '</br>';

	$food[4] = 'Fruit';

	print_r($food);


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 39 Associative Array</strong>';
	echo '<hr>';

	$food =array('Pasta'=>300, 'Pizza'=>1000, 'Salad'=>150, 'Vegateble'=>50);

	echo $food['Pizza'];

	echo '</br>';

	print_r($food);



	echo '</br>';



	echo '</br>';
	echo '<strong>Video 40 Multidimentional array</strong>';
	echo '<hr>';

	$food2 = array('Healthy'=>array('Salad', 'Vagetables', 'Pasta'), 'Unhealthy'=> array('Pizza', 'Ice Cream'));

	echo $food2['Healthy'][0];


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 41 For each</strong>';
	echo '<hr>';

	foreach ($food2 as $element=>$inner_array){
		echo '-'.$element.'</br>';
		foreach($inner_array as $item){

			echo '--------'.$item.'</br>';
		}
	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 42 Include and require Functions</strong>';
	echo '<hr>';

	require '/home/vagrant/Code/international/resources/views/testOfPhpFunctions/header.php';
	
	echo $var1;
	echo $var2;


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 44 Expression Matching</strong>';
	echo '<hr>';

	$string = 'This is a string!';

	if(preg_match('/This/', $string)){

		echo 'Match found';

	}else{

		echo 'Match not found';
	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 45 More on Expression Matching</strong>';
	echo '<hr>';


	function has_space($string){

		if (preg_match('/ /', $string)){
			return true;
		}else{
			return false;
		}
	}

	$string = 'Thisdoesnothaveaspace';

	if(has_space($string)){
		echo 'Has at least one space';
	}else{

		echo 'has no space';
	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 46 String Functions String Length and Substrings</strong>';
	echo '<hr>';


	$string = 'Tatiana Tercero';

	$string_length = strlen($string);

	for($i=1; $i<=$string_length; $i++){

		echo $i.'='.substr($string, $i-1,1).'</br>';

	}

	echo substr($string, 0,1);



	echo '</br>';



	echo '</br>';
	echo '<strong>Video 47 String Functions To Lower Case and Upper Case</strong>';
	echo '<hr>';


	$string = 'Esto Podria Ser Cualquier Cosa!';

	$string_lower= strtolower($string);
	$string_upper= strtoupper($string);

	echo $string_lower;
	echo '</br>';

	echo $string_upper;
	echo '</br>';


	if (isset($_GET['user_name']) && !empty($_GET['user_name'])){

		$user_name = $_GET['user_name'];

		$user_name_lowerCase = strtolower($user_name);
		if($user_name_lowerCase =='henrypineda'){

			echo 'You are the best, '.$user_name;
		}
	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 48 and 49 String Functions Position</strong>';
	echo '<hr>';

	$offset = 0;
	$word = 'is';
	$find_length = strlen($word);

	$string = 'This is a string, and it is an example';

	while($string_position = strpos($string, $word, $offset)){

		echo '<strong>'.$word.'</strong> found at '.$string_position.'</br>';

		$offset = $string_position + $find_length;
	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 50 String Replace</strong>';
	echo '<hr>';

	$string = 'This part don\'t search. This part search.';

	$word_to_put_instaed = 'alex';
	$new_word_length =strlen($word_to_put_instaed);

	$string_new = substr_replace($string, $word_to_put_instaed, 29, $new_word_length);

	echo $string_new;

	echo '</br>';


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 51 String Functions Replacing a predifined part of a string</strong>';
	echo '<hr>';

	$string = 'This is a string, and is an example.!';

	$new_string = str_replace('is', '', $string);

	echo $new_string;

	$find = array('is', 'string', 'example');
	$replace =array('IS', 'STRING', 'EXAMPLE');

	$new_string = str_replace($find, $replace, $string);

	echo '</br>';

	echo $new_string;

	echo '</br>';



	echo '</br>';
	echo '<strong>Video 52 Word Sensoring Part 1</strong>';
	echo '<hr>';

	$find = array('alex','billy', 'dale');
	$replace_with = array('a**x', 'b**y', 'd**e');

	if(isset($_POST['user_input']) && !empty($_POST['user_input'])){

		 $user_input = $_POST['user_input'];

		 $lowerCase_string =strtolower($user_input);

		 $new_string = str_replace($find, $replace_with, $lowerCase_string);

		 echo $new_string;

	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 53 Word Sensoring Part 2</strong>';
	echo '<hr>';

		$find = array('alex','billy', 'dale');
	$replace_with = array('a**x', 'b**y', 'd**e');

	if(isset($_POST['user_input']) && !empty($_POST['user_input'])){

		 $user_input = $_POST['user_input'];


		 $new_string2 = str_ireplace($find, $replace_with, $user_input);

		 echo '</br>';

		 echo $new_string2;

	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 54,55,56,57 Creating a find and replace application</strong>';
	echo '<hr>';

	$offset =0;

	if(isset($_POST['text']) && isset($_POST['searchFor']) && isset($_POST['replaceWith'])){

		$text = $_POST['text'];
		$search = $_POST['searchFor'];//Monkey
		$replace = $_POST['replaceWith'];//mat
		$search_length = strlen($search);
		$replace_length = strlen($replace);
		$dif_length = $search_length - $replace_length;

		// if(!empty($text) && !empty($search) && !empty($replace)){
		// 	if($search_length>$replace_length){
		// 		while($strpos = strpos($text, $search, $offset)){
		// 		$text = substr_replace($text, $replace, $strpos, $replace_length);
		// 		$offset = $strpos + $dif_length;
		// 		}
		// 	}

		// 	echo $text;
		// }else{
		// 	echo 'Please fill in all fields.';
		// }


		if(!empty($text) && !empty($search) && !empty($replace)){
				
			$new_string2 = str_ireplace($search, $replace, $text);
			echo '</br>';
		 	echo $new_string2;
			
			// echo $text;
		}else{
			echo 'Please fill in all fields.';
		}

	}

	echo '</br>';



	echo '</br>';
	echo '<strong>Video 58, 59 Creating a find and replace application</strong>';
	echo '<hr>';

	$time = time();

	$actual_time = date('D d M Y H:i:s', $time);

	echo 'The current time is '.$actual_time;


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 60 Random Number Generator </strong>';
	echo '<hr>';

	$rand = rand();
	$max = getrandmax();
	echo $rand.' / '.$max;

	echo '</br>';

	if(isset($_POST['roll'])){
		$rand = rand(1, 6);
		echo 'You rolled a  '.$rand;
	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 61 $_SERVER variables script name </strong>';
	echo '<hr>';


	include '/home/vagrant/Code/international/resources/views/testOfPhpFunctions/includeme.blade.php';

	// $script_name = $_SERVER['SCRIPT_NAME'];

	// echo $script_name;

	if(isset($_POST['submit'])){


		echo 'Process 1';

	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 63 Using the header to force to redirect a page </strong>';
	echo '<hr>';


	$redirect_page = 'https://google.com.ni';
	$redirect = true;

	if($redirect == true){

		//  This code works but I dont want the page to redirect.
		// header('Location: '.$redirect_page); 

	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 64 Getting visitors IP address </strong>';
	echo '<hr>';

	require '/home/vagrant/Code/international/resources/views/testOfPhpFunctions/includeme.blade.php';

	echo $ip_address;

	foreach($ip_blocked as $ip){


		if($ip == $ip_address){


			// die('Your ip has been blocked');


		}

	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 66 Getting visitors IP address </strong>';
	echo '<hr>';

	$http_client_ip = $_SERVER['SERVER_ADDR'];

	
	// $http_x_forwarded_for = @$_SERVER['HTTP_X_FORWARDED_FOR'];

	echo '</br>';

	echo $http_client_ip;

	$remote_addr = $_SERVER['REMOTE_ADDR'];

	if(!empty($http_client_ip)){

		$ip_address =$http_client_ip;

	// }elseif(!empty($http_x_forwarded_for)){

	// 	$ip_address = $http_x_forwarded_for;

	}else{
		$ip_address = $remote_addr;
	}



	echo $ip_address;



	echo '</br>';



	echo '</br>';
	echo '<strong>Video  </strong>';
	echo '<hr>';

	// $agent = md5($_SERVER['HTTP_USER_AGENT']);

	// $browser = get_browser(null, true);

	// print_r($browser);


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 69 Working with $_GET variables </strong>';
	echo '<hr>';


	if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])){


		$day = $_GET['day'];
		$date = $_GET['date'];
		$year = $_GET['year'];

		if(!empty($day) && !empty($date) && !empty($year)){


			echo 'It is '.$day.' '.$date.' '.$year;


		}else{

			echo 'Fill in all fields';
		}

	}


	echo '</br>';



	echo '</br>';
	echo '<strong>Video 70 Working with $_POST variables </strong>';
	echo '<hr>';


	// echo $_POST['password'];

	$match = 'pass123';


	if(isset($_POST['password'])){

		$password = $_POST['password'];

		if(!empty($password)){

	
			if($password == $match){

				echo 'Password is correct';

			} else{

				echo 'Password is incorrect';

			}

		}else{

			echo 'Please enter a password';
		}

		

	}






?>

<!-- <form action="testOfPhpFunctions.php" method="GET"> -->

<hr>
<form method="GET" action="{{ url('/testphpfunction') }}" accept-charset="UTF-8" style="display:inline">
	
	</br></br>This is for video 47:</br>
	Name: <input type="text" name="user_name"></br></br>
	<input type="submit" value="Submit">
</form>

<hr>


<form method="POST" action="{{ url('/testphpfunction') }}" accept-charset="UTF-8" style="display:inline" >

	{{ csrf_field() }}

</br></br>This is for video 52:</br>

	<textarea name="user_input" rows="6" cols="30"></textarea></br></br>

	<input type="submit" value="Submit">

</form>

<hr>



<form method="POST" action="{{ url('/testphpfunction') }}" accept-charset="UTF-8" style="display:inline">

	{{ csrf_field() }}

	</br></br>This is for video 54:</br>

	</br></br><textarea name="text" rows="6" cols="30"></textarea></br></br>

	Search for:</br>

	<input type="text" name="searchFor"></br></br>

	Replace with:</br>
	<input type="text" name="replaceWith"></br></br>

	<input type="submit" value="Find and Replace">
</form>


<form method="POST" action="{{ url('/testphpfunction') }}" accept-charset="UTF-8" style="display:inline">

	{{ csrf_field() }}

</br></br>This is for video 60:</br>

	<input type="submit" name="roll" value="Roll the dice.">
</form>


<form method="GET" action="{{ url('/testphpfunction') }}" accept-charset="UTF-8" style="display:inline">

	{{ csrf_field() }}

</br></br>This is for video 69:</br>

	Day:</br>

	<input type="text" name="day"></br></br>

	Date:</br>

	<input type="text" name="date"></br></br>

	Year:</br>

	<input type="text" name="year"></br></br>

	<input type="submit" name="SendDate" value="Enviar Fecha">
</form>


<form method="POST" action="{{ url('/testphpfunction') }}" accept-charset="UTF-8" style="display:inline">

	{{ csrf_field() }}

</br></br>This is for video 70:</br>

	Password:</br>

	<input type="password" name="password"></br></br>


	<input type="submit" name="Send" value="Enviar">
</form>









<h3>Video 1 of Java script: Introduction</h3> 
<script type="text/javascript">
	
	document.write("Provando javascript");

	document.write("I love programming.");

	//Comments goes here.

	/*
	 More comments here.
	 */

</script>








