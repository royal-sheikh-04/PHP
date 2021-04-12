<!DOCTYPE html>
<html>
<head>
	<title>This is Functions in PHP</title>
</head>
<body>
	<h2>functions</h2>
	<?php

	function printName($f="abc",$l="def") {
		#echo "First Name: ".$f. "<br>";
		#echo "Last Name: ".$l. "<br>";
		return($f." ".$l."<br>"); 
	}
	#printName();
	#printName("Arman", "Sheikh");
	$first = printName("Aman", "Sheikh");
	echo $first;
	?>
</body>
</html>