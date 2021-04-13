<?php

$per = 32;

if ($per >= 80 && $per <= 100) {
	echo "You are in Merit.";
} elseif ($per >= 60 && $per <= 80) {
	echo "You are in Ist Class.";
}elseif ($per >= 45 && $per <= 60) {
	echo "You are in IInd Class.";
}elseif ($per >= 33 && $per <= 45) {
	echo "You are in IIInd Class.";
}elseif ($per < 33) {
	echo "You are Fail nahi koshis ko.";
}else{
	echo "Please Enter valid Percentage.";
}

?>