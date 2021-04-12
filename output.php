<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--Email: <?php echo $_POST[ "email"]?><br>
	Password: <?php echo $_POST["password"]?><br>

	#GET is a not sequre  example http://localhost/php%20hello/form%20handling.php?email=chauhanashwin009%40gmail.com&password=1234567890&Login=Submit
	#POST is a sequre   example  http://localhost/php%20hello/output.php-->
	<?php
	session_start();
	echo $_SESSION['AllhaToName'];
?>
</body>
</html>