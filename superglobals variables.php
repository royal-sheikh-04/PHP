<!DOCTYPE html>
<html>
<head>
	<title>This is a Super Globals in PHP</title>
</head>
<body>
	<h2>This is a Super Globals in PHP</h2>

	<?php
	#GLOBALS, SERVER, REQUEST, GET, POST

/*	$x = 50;
	$y = 40;

	#Globals

	function sumXy()
	{
		echo $GLOBALS["x"] + $GLOBALS["y"];
	}

	sumXy();  */



	#SERVER

/*cho $_SERVER["SERVER_NAME"]."<br>";    #server name
	echo $_SERVER["PHP_SELF"]."<br>";    #current file name
	echo $_SERVER["HTTP_HOST"]."<br>";       #host name
	echo $_SERVER["SCRIPT_NAME"]."<br>";				#current file path
	echo $_SERVER["SERVER_ADDR"]."<br>";	#returns address of server
 */

	#date print

	echo "Today is: ".date("d/m/y")."<br>";
	echo "Today is: ".date("l")."<br>";   #days
	echo "Today is: ".date("y")."<br>";
	echo "Today is: ".date("h:i:sa")."<br>";   #time
	?>
</body>
</html>