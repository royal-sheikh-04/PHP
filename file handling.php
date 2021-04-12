<!DOCTYPE html>
<html>
<head>
	<title>This is a File Handling in php</title>
</head>
<body>
	<h2>This is a File Handling in php</h2>
	<?php

	#file handling in php
	#echo readfile(" demo.txt");

	$file = fopen("demo.txt", "a");
	#echo fread($file, filesize("demo.txt"));
	#fclose($file);
	#echo fgets($file);

	#echo fgetc($file);

	/*while (!feof($file)) {
		echo fgetc($file);
	}*/

	#$txt1 =  "This is going to be written in file..";
	#fwrite($file, $txt1);

	
	
	?>

</body>
</html>