<?php

/* for ($i=1; $i <= 100; $i = $i+10) { 
	echo $i . "<br>";
}

*/
for ($i=1; $i <= 100; $i = $i+10) { 
	for ($b = $i; $b < $i + 10; $b++) { 
		  echo $b . ", ";
	}
	echo "<br>";
}
?>