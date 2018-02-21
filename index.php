<?php
	$date =  date('Y-m-d', time());
	$data = str_replace('-', '/', $date);
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	$results = strcmp($date, $tar);
	if ($results > 0) {
		echo "The future <br>";
	} elseif ($results < 0) {
		echo "The past <br>";
	} else {
		echo "Oops";
	}
	$search = strpos ($date, '/');
	echo "$seach <br>";
	$workCount = count($date);
	echo "There are" .$workCount. "words in the $date string. <br>";
	$StringLength = strlen('Of a string');
	echo "The string lenght is" .$StringLenght."<br>";
	$val = ord('Of a string');
	echo 'The ASCII value is' .$val. '.<br>';
	$last = substr($date, -2);
	echo "The last two characters are" .$last."<br>";
	$date = explode('/', $date);
	echo $date. "<br>";
	$leapYear=false;
	If ($year%4==0) {
		echo $leapYear = true .'<br>';
	} else {
		echo $leapYear = false. '<br>';
	}

?>