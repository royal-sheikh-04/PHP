<!DOCTYPE html>
<html>
<head>
	<title>This is switch-case statement in PHP</title>
</head>
<body>
	<h2>switch case statement</h2>
	<?php
	$x = 5;
	switch ($x = 5) {
		case 1:
			echo "x = 1";
			break;
		case 5:
			echo "x = 5";
			break;
		
		default:
			echo "no match";
			break;
	}
	?>

</body>
</html>