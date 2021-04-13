<?php

/*$weekday = 1;

switch ($weekday) {
	case 1:            #case 1: case 2: case 3:
		echo "Today is  Monday";
		echo "<br>This is valid option";
		break;

	case 2:
		echo "Today is  Tuesday";
		break;

	case 3:
		echo "Today is  Wednesday";
		break;

	case 4:
		echo "Today is  Thursday";
		break;

	case 5:
		echo "Today is  Friday";
		break;

	case 6:
		echo "Today is  Sutarday";
		break;

	case 7:
		echo "Today is Sunday";
		break;

	default:
		echo "Invalide Option";
		
} */

$age = 25;

switch (true) {
	case ($age >= 15 && $age <= 20):
		echo "You are eligible";
		break;

	case ($age >= 21 && $age <= 30):
		echo "You are not eligible";
		break;

	default:
		echo "Enter the valid age.";
		break;
}

?>