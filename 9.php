<?php

$allTheStates="Mississippi Alabama Texas Massachusetts Kansas";

$statesArray=[];

$states1=explode(' ',$allTheStates);

$i=0;

foreach($states1 as $state){

	if(preg_match('/xas$/',($state))) {

		$statesArray[$i]=($state);

		$i=$i+1;

		print "\n The states that end in xas:".$state;
		echo"<br>";

	}

}



foreach($states1 as $state){

	if(preg_match('/^k.*s$/i',($state))) {

		$statesArray[$i]=($state);

		$i=$i+1;

		print "\n The states that begin with k and ends in s:".$state;
		echo"<br>";

	}

}



foreach($states1 as $state){

	if(preg_match('/^M.*s$/',($state))) {

		$statesArray[$i]=($state);

		$i=$i+1;

		print "\n The states that begin with M and ends in s:".$state;
		echo"<br>";

	}

}



foreach($states1 as $state){

	if(preg_match('/a$/',($state))) {

		$statesArray[$i]=($state);

		$i=$i+1;

		print "\n The states that end in a:".$state;
		echo"<br>";

	}

}



foreach($statesArray as $element => $value) {

	print("<br>".$value." is the element".$element);

}

?>
