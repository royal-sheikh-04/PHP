<!DOCTYPE html>
<html>
<head>
	<title>This is a Cookies in PHP</title>
</head>
<body>
	<h2>This is a Cookies in PHP</h2>

	<?php

/*	$cookie_name = "ChannelName";
	$cookie_value = "Royal Sheikh";

	setcookie($cookie_name,$cookie_value,time()+3600);

	echo $cookie_name." = ".$_COOKIE["ChannelName"];

	#check the cookies enabled and disabled

	if (count($_COOKIE)>0) {
		echo "<br>Cookies enabled.";
	}
	else{
		echo "<br>Cookies disabled.";
	}
*/
	#Session in PHP
	session_start();   #session dosre file ko access kr skta hai
	$_SESSION['YourGodName'] = "Allha";
	$_SESSION['AllhaToName'] = 99;
  
  	session_unset();     
  	session_destroy();   #session ko destroy kr dea
	?>

</body>
</html>